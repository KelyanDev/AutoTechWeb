const loginBtn = document.querySelector('#login');
const nameUser = document.querySelector('#name');
let username = localStorage.getItem('name');

console.log(nameUser);

if (localStorage.getItem('name') !== null && localStorage.getItem('userId') !== null && localStorage.getItem('token') !== null) {
     loginBtn.lastChild.textContent = username;
     loginBtn.href = "../layout/account.php";
} else {
     console.log('La clé "username" n\'existe pas dans le localStorage.');
}
