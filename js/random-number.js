function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

document.querySelector('#rand-num').innerHTML = getRandomInt(51);