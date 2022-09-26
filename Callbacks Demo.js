function anotherAddEventListener(type, event){

    var eventThatHappened = {
        key: "moveover",
        duration: "30 secs"
    }

    if(type === eventThatHappened.key){
        event(eventThatHappened)
    }
}

anotherAddEventListener("moveover", function(e){
    console.log(e);
}); // Output: {key: 'moveover', duration: '30 secs'}
