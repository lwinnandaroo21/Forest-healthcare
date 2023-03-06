
var img = document.getElementById("profileImg");

function setImage() {
    let files = document.getElementById("userfile-upload").files;
    if (files.length == 0)
        return;

    let file = files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
        img.src = reader.result;
    }
}

// eye-icon for password-show toggle

const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
