function my_timer2(x) {
    document.open();

    document.write('<h1>' + setInterval(function() { console.log(x--); }, 1000) + '</h1>');

    document.close();
}