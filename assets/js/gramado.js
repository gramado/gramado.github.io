
class GramadoClass {
    constructor (s){
        console.log("GramadoClass: constructor()");
        console.log(s);
    }
    printString(s){
        console.log(s);
    }
};
let Gramado;
let __gramado_status = 0;

function gramadoInitialize(){
    let ReturnValue=1234;
    console.log("Initializing Gramado ...");

// Creating the Gramado class.
    Gramado = new GramadoClass("Initializing GramadoClass...");
    Gramado.printString("Testing Gramado.printString method ...");

    //arrowFunction1(1);
    //arrowFunction2(2);
    //arrowFunction3(3);
    //arrowFunction4();

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

/* Learning ... */
let arrowFunction1 = (x) => {
    console.log("arrowFunction1: ");
    console.log(x);
}

/* Learning ... */
let arrowFunction2 = (x) => console.log(x)

/* Learning ... */
let arrowFunction3 = x => console.log(x)

/* Learning ... */
let arrowFunction4 = () => console.log("arrowFunction4: ")







