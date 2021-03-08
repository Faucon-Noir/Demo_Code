function sleep(milliseconds) {
    const date = Date.now();
    let currentDate = null;
    do {
      currentDate = Date.now();
    } while (currentDate - date < milliseconds);
}

function ping() {

    while(1) {
        console.log("ping");
        sleep(1000);  
    }
}