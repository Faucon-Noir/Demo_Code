var playergold = (0);

function addGold(playergold) {

    playergold = playergold + gold;

    console.log(playergold)
}

function my_timer2(x) {
    setInterval(function() { document.write(x++); }, 1000);
}

function ClickGold(points) {
    playergold = addGold(playergold) + 1;
    console.log(playergold);
}