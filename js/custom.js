
const tbody = document.querySelector("tbody");



const listarPedidos = async () => {
    const dados = await fetch("./list.php");
    resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarPedidos();
