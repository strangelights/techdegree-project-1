
// random hex string idea courtesy of https://www.paulirish.com/2009/random-hex-color-code-snippets/
let random = Math.random().toString(16).slice(2, 8);
let hex = '#';
hex += random;

window.onload = function(){
    // alert(hex); //debug
    document.body.style.backgroundColor = hex;
}
