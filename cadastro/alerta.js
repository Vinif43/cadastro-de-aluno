let nome = document.getElementById("nome_aluno");
let matricula = document.getElementById("matricula_aluno");
let nota1 = document.getElementById("aluno_nota1");
let nota2 = document.getElementById("aluno_nota2");
let butao = document.getElementById("botao_clicar");

butao.addEventListener("click",function(event){

    if(nome.value == ""){
        event.preventDefault();
        swal("Invalido!", "Informe o seu nome", "warning");
        return;
    }
    if(!isNaN(nome.value)){
        event.preventDefault();
        swal("Invalido!", "esse campo não pode ter numeros", "error");
        return;
    }
    if(matricula.value == ""){
        event.preventDefault();
        swal("Invalido!", "Informe a sua matricula", "warning");
        return;
    }
    if(isNaN(matricula.value)){
        event.preventDefault();
        swal("Invalido!", "esse campo não pode ter letras", "error");
        return;
    }
    if(nota1.value == ""){
        event.preventDefault();
        swal("Invalido!", "informe a sua primeira nota", "warning");
        return;
    }
    if(isNaN(nota1.value)){
        event.preventDefault();
        swal("Invalido!", "esse campo não pode ter letras", "error");
        return;
    }
    if(nota2.value == ""){
        event.preventDefault();
        swal("Invalido!", "informe a sua segunda nota", "warning");
        return;
    }
    if(isNaN(nota2.value)){
        event.preventDefault();
        swal("Invalido!", "esse campo não pode ter letras", "error");
        return;
    }

})