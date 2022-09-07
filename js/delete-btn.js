var btn = document.querySelectorAll('.php-vote');

btn.forEach((elem) => {
    elem.addEventListener('click', () => {
        localStorage.setItem('vote', 1);
    })
})

var key = localStorage.getItem('vote');

if(key == 1){
    btn[0].style.display = 'none';
    btn[1].style.display = 'none';
} else {
    console.log('1');
}