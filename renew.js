function setValue(){
    document.getElementById("name").value = localStorage.getItem("name");
    document.getElementById("email").value = localStorage.getItem("email");
};

function renew() {
    localStorage.setItem("name", document.getElementById("name").value);
    localStorage.setItem("email", document.getElementById("email").value);
    location.reload()
    
    // var xhr = new XMLHttpRequest();    
    // xhr.open('PUT','captcha.php');
    // xhr.setRequestHeader('Content-Type', 'application/json');
    // xhr.onload = function () {
    //     if (xhr.status === 200) {        
    //     document.getElementById('captchaImage').innerHTML = '<img src="createCaptcha.php" alt="Captcha">';
    //     }
    // };
    // xhr.onerror = function () {
    //     console.log("An error occurred during the transaction");
    // };
    // xhr.send();

    // renewAudio();
}

// Detect the refresh page

// window.onbeforeunload = function() {
//     alert('F5 pressed!');
// }

document.addEventListener("keydown", (e) => {         
  if (e.key === "F5") {
    localStorage.setItem("name", document.getElementById("name").value);
    localStorage.setItem("email", document.getElementById("email").value);
  }
});

// Avec le Jquery
// $(document.body).on("keydown", this, function (event) { 
//           if (event.keyCode == 116) { 
//               alert('F5 pressed!'); 
//        } 
// });