function hello_world() {
    console.log('Hello World!');
}

function ping() {
    setInterval(function() { console.log('ping'); }, 1000);
}

function my_timer(x) {
    setInterval(function() { console.log(x--); }, 1000);
}

function my_timer2(x) {
    setInterval(function() { document.write('<h1>' + x-- + '</h1>'); }, 1000);
}