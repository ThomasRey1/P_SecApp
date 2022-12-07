// function play() {
//   var audio = new Audio('audio/1.mp3');
//   for (let i = 1; i < 3; i++) {
//     audio.src = 'audio/' + i + '.mp3'
//   }
// }

let array;
var images;
var xhr = new XMLHttpRequest();
xhr.open('PUT', 'createCaptcha.php');
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onload = function() {
    if (xhr.status === 200) {
        play();
    }
};
let sounds = new Array(new Audio("audio/A.wav"),
  new Audio("audio/W.wav"));
  var i = -1;
  
  function play() {
      i++;
      if (i == sounds.length){
        i = -1;
        return;
      }
      sounds[i].addEventListener('ended', play);
      sounds[i].play();
  }