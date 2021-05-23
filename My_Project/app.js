var button=document.querySelector('.btn');
var text=document.querySelector('.text')

var ratio=0.3
var options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

var cursor=document.querySelector('.cursor');
var cursor2=document.querySelector('.cursor2');

document.addEventListener('mousemove',function(e){
    cursor.style.cssText=cursor2.style.cssText="left: "+ e.clientX + "px; top: "+ e.clientY + "px;";
})
//TypeWriter
const texts=['are many types of Mental Illnesses :                                '];
let count=0;
let index=0;
let currentText='';
let letter='';
(function type(){
    if(count===texts.length){
        count=0;
    }
    currentText=texts[count];
    letter=currentText.slice(0,++index);
    document.querySelector('.typing').textContent=letter;
    if(letter.length===currentText.length){
        count++;
        index=0;
    }
    setTimeout(type,150);
    
}());