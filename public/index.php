<?php
// declare(strict_types=1);

// /*
// |--------------------------------------------------------------------------
// | Configuration
// |--------------------------------------------------------------------------
// */

// $rootDomain = 'votreartisanpro.fr';
// $baseDir    = __DIR__ . '/pages_artisans';

// /*
// |--------------------------------------------------------------------------
// | Détection du sous-domaine
// |--------------------------------------------------------------------------
// */

// $host = strtolower($_SERVER['HTTP_HOST'] ?? '');

// // Suppression du port éventuel (localhost:8000)
// $host = explode(':', $host)[0];

// $allowedRoots = [
//     $rootDomain,
//     "www.$rootDomain",
//     "preprod.$rootDomain",
//     "test.$rootDomain" // futur container de test
// ];

// if (in_array($host, $allowedRoots)) {
//     require __DIR__ . '/home.php';
//     exit;
// }

// // Mode local (facultatif)
// if ($host === 'localhost' || $host === '127.0.0.1') {
//     $subdomain = $_GET['subdomain'] ?? null;
// } else {
//     if (!str_ends_with($host, '.' . $rootDomain)) {
//         http_response_code(400);
//         exit('Domaine invalide.');
//     }

//     $subdomain = substr($host, 0, -strlen('.' . $rootDomain));
// }

// /*
// |--------------------------------------------------------------------------
// | Validation sécurité
// |--------------------------------------------------------------------------
// */

// // Uniquement lettres, chiffres, tirets
// if (!$subdomain || !preg_match('/^[a-z0-9-]{2,50}$/', $subdomain)) {
//     http_response_code(404);
//     exit('Artisan invalide.');
// }

// /*
// |--------------------------------------------------------------------------
// | Construction du chemin sécurisé
// |--------------------------------------------------------------------------
// */

// $artisanDir = realpath($baseDir . '/' . $subdomain);


// // Vérifie que le dossier existe
// if ($artisanDir === false || !str_starts_with($artisanDir, realpath($baseDir))) {
//     http_response_code(404);
//     exit('Artisan introuvable.');
// }

// // Fichier index prioritaire
// $indexFile = $artisanDir . '/index.php';

// if (!is_file($indexFile)) {
//     http_response_code(404);
//     exit('Page artisan inexistante.');
// }

// /*
// |--------------------------------------------------------------------------
// | Sécurité HTTP headers
// |--------------------------------------------------------------------------
// */

// header('X-Frame-Options: SAMEORIGIN');
// header('X-Content-Type-Options: nosniff');
// header('Referrer-Policy: strict-origin-when-cross-origin');

// /*
// |--------------------------------------------------------------------------
// | Inclusion de la page
// |--------------------------------------------------------------------------
// */

// readfile($indexFile);
// exit;


declare(strict_types=1);

$rootDomain = 'votreartisanpro.fr';
$baseDir    = __DIR__ . '/pages_artisans';

$host = strtolower($_SERVER['HTTP_HOST'] ?? '');
$host = explode(':', $host)[0]; // Suppression du port

// 1. Liste des domaines qui pointent vers la Homepage
$homeDomains = [
    $rootDomain,
    "www.$rootDomain",
    "preprod.$rootDomain",
    "proprios.$rootDomain",
    "test.$rootDomain"
];

if (in_array($host, $homeDomains)) {
    require __DIR__ . '/home.php';
    exit;
}

// 2. Extraction du sous-domaine
if ($host === 'localhost' || $host === '127.0.0.1') {
    $subdomainRaw = $_GET['subdomain'] ?? '';
} else {
    if (!str_ends_with($host, '.' . $rootDomain)) {
        http_response_code(400);
        exit('Domaine invalide.');
    }
    // On enlève le suffixe ".votreartisanpro.fr"
    $subdomainRaw = substr($host, 0, -strlen('.' . $rootDomain));
}

// 3. LOGIQUE MULTI-NIVEAU (ex: ypria.preprod -> ypria)
$parts = explode('.', $subdomainRaw);
// On définit les mots-clés techniques à ignorer pour trouver le dossier dossier
$technicalKeywords = ['preprod', 'proprios', 'maquette', 'www'];

$subdomain = $parts[0]; // Par défaut le premier
foreach ($parts as $p) {
    if (!in_array($p, $technicalKeywords)) {
        $subdomain = $p;
        break; // On a trouvé le nom de l'artisan (ex: ypria)
    }
}

/* Validation sécurité (on garde ton regex) */
if (!$subdomain || !preg_match('/^[a-z0-9-]{2,50}$/', $subdomain)) {
    http_response_code(404);
    exit('Artisan invalide : ' . htmlspecialchars($subdomain));
}

/* Construction du chemin */
$artisanDir = realpath($baseDir . '/' . $subdomain);

if ($artisanDir === false || !str_starts_with($artisanDir, realpath($baseDir))) {
    http_response_code(404);
    exit('Artisan introuvable.');
}

$indexFile = $artisanDir . '/index.php';

if (!is_file($indexFile)) {
    http_response_code(404);
    exit('Page artisan inexistante.');
}

// Headers de sécurité
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');

// ATTENTION : Utilise include ou require au lieu de readfile 
// car readfile affiche le code source PHP au lieu de l'exécuter !
include $indexFile;
exit;

?>