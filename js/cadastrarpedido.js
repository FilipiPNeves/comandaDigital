const cadForm = document.getElementById("cadastrar-pedido-form");
let qtdPedidos = document.getElementById("qtdPedido");
const msgAlerta = document.getElementById("msgAlerta");

cadForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    
    const dadosForm = new FormData(cadForm);
    dadosForm.append("add", 1);

    const dados = await fetch("cadastrar.php", {
        method: "POST",
        body: dadosForm,
    });

    const resposta = await dados.json();

    if(resposta['erro']){
        msgAlerta.innerHTML = resposta['msg'];
    }else{
        msgAlerta.innerHTML = resposta['msg'];
    };

    
});