function flipContainer() {
    containerAuth=document.querySelector(".container-authentification");
    const urlParams = new URLSearchParams(window.location.search);
    const type = new URLSearchParams(window.location.search).get("type");
    containerAuth.classList.toggle('flipped');
    if (type == 'sign-up') {
        urlParams.set('type', 'login');
        containerAuth.style.background = "linear-gradient(to bottom right,#AED9E0,#FFFFFF)";
    } else {
        urlParams.set('type', 'sign-up');
        containerAuth.style.background = "linear-gradient(to bottom right, #FFDAB9, #FFFFFF )";
    }
    const newUrl = window.location.pathname + '?' + urlParams.toString();
    window.history.pushState({}, '', newUrl);
}
var usagePolicyCheckbox = document.getElementById("usage-policy");
var signUpButton = document.getElementById("sign-up-button");
usagePolicyCheckbox.addEventListener("change", function() {
  if (this.checked) {
    signUpButton.style.opacity = "1";
    signUpButton.style.cursor = "pointer";
    signUpButton.style.backgroundColor="rgb(45, 149, 223,1)"
  } else {
    signUpButton.style.opacity = "0.6";
    signUpButton.style.cursor = "not-allowed";
    signUpButton.style.backgroundColor="rgb(125, 159, 183)"
  }
});
function testMail(type){
    console.log(type+"-email-error")
    emailErr=document.getElementById(type+"-email-error");
    emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/
    if (emailRegex.test(document.getElementById(type+"-emailInput").value)){
        emailErr.style.opacity="0"
        return
    }
    else{
        emailErr.style.opacity="1"
    }
}

const passwordFields = document.querySelectorAll("input[type='password']");
passwordFields.forEach(passwordField => {
    const eyesOpen = passwordField.parentElement.querySelector(".eyes-open");
    const eyesClosed = passwordField.parentElement.querySelector(".eyes-masked");
    eyesClosed.addEventListener("click", function () {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyesOpen.style.opacity = 1;
            eyesClosed.style.opacity = 0;
        } else {
            passwordField.type = "password";
            eyesOpen.style.opacity = 0;
            eyesClosed.style.opacity = 1;
        }
    });
});
