function buildFunction(){
    var arr =[];
    
   for(var i=0; i<3; i++){
       arr.push(
           (function(j){
           return function(){
               console.log(j)
           }
       }(i))
       
     )
   }     
   
    return arr;
}

var fs = buildFunction();
fs[0]();
fs[1]();
fs[2]();


function greet(whattosay){
    
    return function(name){
        console.log(whattosay +" "+name);
    }
}

greet("Hello")("Henry")




//var a="Hello World";
//execution context
// Scope Chain


//function c(){
//   // var myVal;
//    console.log(myVal);
//}
//
//
//function a(){
//    // Reference to Outer Lexical Environment
//    
//    function b(){ // the outer lexical environment of b is a
//   // var myVal;
//    console.log(myVal);
//}
//    var myVal = 2;
//    console.log(myVal);
//    b();
//    c();
//    
//}
//
//var myVal = 1; // Global execution context
//console.log(myVal);
//
//a();

//var person = new Object();
//
//person["firstname"] = "Henry";
//person["lastname"] = "Smith";
//
//var firstName = "firstname";
//
//console.log(person);
//console.log(person[firstName]);
//
//var objectLiteral = {
//    
//    firtname : 'Marida', 
//    isAProgrammer: true
//}
//
//console.log(JSON.stringify(objectLiteral));
//
// var jsonValue =JSON.parse( '{"firstname": "Jame", "isAProgrammer": true}');
// 
// console.log(jsonValue);
//
//// long runing function
//function waitThreeSeconds(){
//    var ms = 3000 + new Date().getTime();
//    while(new Date < ms){}
//    console.log("finished function");
//}
//
//function clickHandler(){
//    console.log("click event!");
//}
//
////listen for the click event
//document.addEventListener("click", clickHandler);
//
//waitThreeSeconds();
//console.log("finished execution");