function renew() {        
    var xhr = new XMLHttpRequest();    
    xhr.open('PUT','captcha.php');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function () {
        if (xhr.status === 200) {        
        document.getElementById('captchaImage').innerHTML = '<img src="createCaptcha.php" alt="Captcha">';
        }
    };
    xhr.onerror = function () {
        console.log("An error occurred during the transaction");
    };
    xhr.send();
}
