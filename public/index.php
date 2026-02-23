<?php
declare(strict_types=1);

$domain = "votreartisanpro.fr";
$host = strtolower($_SERVER['HTTP_HOST'] ?? '');

// Domaine principal
if ($host === $domain || $host === "www.$domain") {
    require "home.php";
    exit;
}

// Extraction sous-domaine
$subdomain = str_replace(".$domain", "", $host);

// Validation stricte du sous-domaine
if (!preg_match('/^[a-z0-9\-]{2,50}$/', $subdomain)) {
    http_response_code(404);
    exit("Artisan non trouvé.");
}

// Chemin cache HTML
$cacheDir = __DIR__ . "/cache/";
$cacheFile = $cacheDir . $subdomain . ".html";
$cacheDuration = 3600; // 1 heure

if (!is_dir($cacheDir)) mkdir($cacheDir, 0755, true);

// Serve le cache si valide
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheDuration) {
    readfile($cacheFile);
    exit;
}

// ======================
// Définition artisan (temporaire)
// Plus tard remplacer par DB
// ======================
$artisans = [
    "ypria" => [
        "nom" => "Ypria Couverture",
        "ville" => "Paris",
        "metier" => "Couvreur",
        "telephone" => "06 00 00 00 01",
        "description" => "Spécialiste toiture et rénovation."
    ],
    "maquette" => [
        "nom" => "Maquette BTP",
        "ville" => "Lyon",
        "metier" => "Maçon",
        "telephone" => "06 00 00 00 02",
        "description" => "Travaux de maçonnerie générale."
    ],
    // Ajouter d’autres artisans ici
];

// Artisan existe ?
if (!isset($artisans[$subdomain])) {
    http_response_code(404);
    require "404.php";
    exit;
}

$data = $artisans[$subdomain];

// ======================
// Génération page + cache
// ======================
ob_start();
require "pages_artisans/template.php";
$html = ob_get_clean();

// Sauvegarde cache
file_put_contents($cacheFile, $html);

// Affiche
echo $html;