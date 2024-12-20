document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (username.length < 3) {
        alert("Имя пользователя должно содержать не менее 3 символов.");
        event.preventDefault();
    }

    const emailPattern = /^[^s@]+@[^s@]+.[^s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Введите корректный адрес электронной почты.");
        event.preventDefault();
    }

    if (!/d/.test(password)) {
        alert("Пароль должен содержать хотя бы одну цифру.");
        event.preventDefault();
    }
});