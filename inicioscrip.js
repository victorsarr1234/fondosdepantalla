const loginForm = document.querySelector('form');

loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const username = loginForm.username.value;
  const password = loginForm.password.value;

  // Lógica de validación de usuario y contraseña
  // ...
});
