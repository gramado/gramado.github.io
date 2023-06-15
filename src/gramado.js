
let __gramado_status = 0;

function gramadoInitialize(){
    let ReturnValue=1234;
    console.log("Initializing Gramado ...")
    gramadoHelloWorld();
    __gramado_status = 1;
    return ReturnValue;
}

function gramadoHelloWorld(){
    console.log("Hello")
    if (__gramado_status == 1){
        window.alert("Initialized");
    }else{
        window.alert("Not initialized");
    }
}



