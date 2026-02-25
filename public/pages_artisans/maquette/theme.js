

const select = document.getElementById('theme-select');
const body = document.getElementById('body');

select.addEventListener('change', function(){
const color = this.value;
body.removeAttribute('class');
body.classList.add(color)
})

