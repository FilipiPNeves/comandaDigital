<?php
    include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda Eletrônica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="principal">
            <div class="retangulo shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="titulo">Cozinha</h1>
                <p class="descricao">Lista dos pedidos que estão sendo feitos</p>
                <div class="botao">
                    <a href="cozinha.php">
                        <button type="button" class="btn btn-primary">
                            Ver Pedidos
                            <span class="badge text-bg-secondary" id="qtdPedido">0</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="retangulo shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="titulo">Novo Pedido</h1>
                <p class="descricao">Adicionar um novo pedido</p>
                <div class="botao">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastrarPedidoModal">
                    Criar
                    </button>
                </div>
            </div>
            <div class="retangulo shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="titulo">Prontos</h1>
                <p class="descricao">Pedidos prontos para servir</p>
                <div class="botao">
                    <a href="prontos.php">
                        <button type="button" class="btn btn-primary">
                            Ver Pedidos
                            <span class="badge text-bg-secondary">0</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="retangulo shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="titulo">Finalizar Mesa</h1>
                <p class="descricao">Fechar a conta do cliente</p>
                <div class="botao">
                    <a href="finalizarmesa.php">
                        <button type="button" class="btn btn-primary">
                            Mesas
                        </button>
                    </a>
                </div>
            </div>
        </div>

        
    </div>

        <!-- Modal -->
    <div class="modal fade" id="cadastrarPedidoModal" tabindex="-1" aria-labelledby="cadastrarPedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cadastrarPedidoModalLabel">Cadastrar Pedido</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="cadastrar-pedido-form">
                        <span id="msgAlerta"></span>
                        <div class="mb-3">
                            <label for="pedido" class="col-form-label">Pedido:</label>
                            <input type="text" name="pedido" class="form-control" id="pedido" required>
                        </div>
                        <div class="mb-3">
                            <label for="anotacoes" class="col-form-label">Anotações:</label>
                            <input type="text" name="anotacoes" class="form-control" id="anotacoes" required>
                        </div>
                        <div class="mb-3">
                            <label for="mesa" class="col-form-label">Mesa:</label>
                            <input type="number" name="mesa" class="form-control" id="mesa" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" class="btn btn-primary btn-sm" id="cadastar-pedido-btn" value="Cadastrar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/cadastrarpedido.js"></script>
</body>
</html>