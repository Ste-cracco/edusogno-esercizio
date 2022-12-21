const inputPassword = document.querySelector('#password');

document.querySelectorAll('.fa-eye, .fa-eye-slash').forEach(icon => {
  icon.addEventListener('click', () => {
    if (inputPassword.type === 'password') {
        inputPassword.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        inputPassword.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
  });
});