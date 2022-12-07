// function play() {
//   var audio = new Audio('audio/1.mp3');
//   for (let i = 1; i < 3; i++) {
//     audio.src = 'audio/' + i + '.mp3'
//   }
// }

let array;
var i;
var chars = [];
let sounds = new Array();
var xhr = new XMLHttpRequest();
xhr.open('PUT', 'data.php');
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onload = function() {
    if (xhr.status === 200) {
      chars = JSON.parse(xhr.responseText);
      array = Object.keys(chars).length;
      for(i = 0; i < array; i++){
        sounds.push(new Audio("audio/"+chars[i]+".wav"));
      }
    }
    i = -1
};

xhr.onerror = function() {
  console.log("An error occurred during the transaction");
};
xhr.send();

function play() {
    i++;
    if (i >= sounds.length){
      i = -1;
      return;
    }
    sounds[i].addEventListener('ended', play);
    sounds[i].play();
}
