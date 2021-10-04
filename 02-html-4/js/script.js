var username = document.getElementById("username");

const question = prompt("what`s your username ?");
if(question ) {
    username.innerText ="welcome: " + question;

} else{
    username.innerText ="welcome: guess"
}
//esto es para que me pregunte en la pgina el nombre del usuario