function mafonction(){
    const nom = document.getElementById("nom").value;
    const pass = document.getElementById("password").value;
    if (nom === "" || pass === "") {
      alert("Veuillez remplir tous les champs obligatoires.");
    }
}

function cree_compte(){
    const nom = document.getElementById("nom").value;
    const email = document.getElementById("email").value;
    const mdp = document.getElementById("mdp").value;
    const rmdp = document.getElementById("rmdp").value;

    if (nom === "" || email === "" || mdp === "" ||rmdp === "" ) {
      alert("Veuillez remplir tous les champs obligatoires.");
    } else {
      alert("Merci pour votre soumission !");
    }
}