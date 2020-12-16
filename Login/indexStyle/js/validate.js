

function passwordChanged() {
    var strength = document.querySelector('#strength');
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
    var enoughRegex = new RegExp("(?=.{8,}).*", "g");
    var pwd = document.querySelector('#password');
    if (pwd.value.length == 1) {
        strength.innerHTML = '<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" id="strength" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">more character!</div>';

    } else if (false == enoughRegex.test(pwd.value)) {
        strength.innerHTML = '<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" id="strength" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">more character!</div>';
    } else if (strongRegex.test(pwd.value)) {
        strength.innerHTML = '<div class="progress-bar progress-bar-striped bg-success" role="progressbar" id="strength" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Strong!</div>';
    } else if (mediumRegex.test(pwd.value)) {
        strength.innerHTML = '<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" id="strength" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Medium!</div>';
    } else {
        strength.innerHTML = '<div class="progress-bar progress-bar-striped bg-info" role="progressbar" id="strength" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">WeaK!</div>';
    }
}

function checkPasswordMatch(){
    var pass = document.querySelector('#password').value;
  var cpass = document.querySelector('#cpassword').value;
  var content = document.querySelector('#mcpassword');
    if(pass == cpass){
        content.innerHTML = '<div class="progress-bar bg-success" role="progressbar" id="strength" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">password matched!</div>';
    }else if(pass != cpass){ 
        content.innerHTML = '<div class="progress-bar bg-danger" role="progressbar" id="strength" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">password doesn"t match</div>';
    }
}
