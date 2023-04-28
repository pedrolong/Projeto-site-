function main() {
    var usuario;
    var senha;
    var recorrente;
var i=0; 
    var musuario=["pedrolongo","pedroh"]; 
var msenha=["1234","5678"];
    recorrente = true;
    do {
        usuario = window.prompt('Enter a value for usuario'); 
if (usuario != musuario[i]) {i++} 
if(musuario==null){i--} 
        senha = window.prompt('Enter a value for senha');
        if (usuario == musuario[i]) {
            if (senha == msenha[i]) {

                window.alert("usuario e senha OK");
                recorrente = true;
            }
        }

        if (usuario == musuario[i]) {
            if (senha == msenha[i]) {

                window.alert("usuario e senha OK");
                recorrente = true;
            }
        }
    } while (recorrente == true);
var i=0; 

} 