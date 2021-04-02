
console.log("ajax tutorial");
window.onload = function(){
var fetchBtn1 = document.getElementById('fetchBtn');
fetchBtn1.addEventListener("click", buttonClickHandler);

function buttonClickHandler (){
    console.log("you have clicked the button");

    var xhr = new XMLHttpRequest();
    xhr.open('GET','taran1.txt', true );
    xhr.onprogress = function(){
        console.log('on progress');
        
    };
    xhr.onload = function(){
        console.log(this.responseText);
        
    };
    xhr.send();
}
    
}
