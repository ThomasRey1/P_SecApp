// function play() {
//   var audio = new Audio('audio/1.mp3');
//   for (let i = 1; i < 3; i++) {
//     audio.src = 'audio/' + i + '.mp3'
//   }
// }
let sounds = new Array(new Audio("audio/1.mp3"),
  new Audio("audio/2.mp3"));

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