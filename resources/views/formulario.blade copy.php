<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnóstico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #0275d8;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .card-body {
            padding: 10px;
        }
        .btn-lg {
            width: 100%;
            background-color: #5cb85c;
        }
        .form-control {
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        .form-group label {
            font-weight: bold;
        }
        h5 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 18px;
        }
        .text-center {
            text-align: center;
        }
        .form-check-input {
            margin-left: 0;
        }
        .navbar-custom {
            background-color: #0275d8;
            padding: 10px;
            color: white;
        }
        .navbar-custom .navbar-brand {
            color: white;
            font-weight: bold;
        }
        .navbar-custom .user-icon {
            color: white;
            float: right;
        }
        .btn-back {
            background-color: transparent;
            border: none;
            position: absolute;
            left: 10px;
            top: 10px;
            font-size: 20px;
            color: #0275d8;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-custom">
        <button class="btn-back">&larr;</button>
        <a class="navbar-brand" href="#">OS</a>
        <div class="user-icon">
            <i class="fas fa-user"></i>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Código: 00000</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="nomeCliente">Nome do Cliente</label>
                        <input type="text" class="form-control" id="nomeCliente" placeholder="Nome do Cliente">
                    </div>
                    <div class="form-group mb-3">
                        <label for="data">Data</label>
                        <input type="date" class="form-control" id="data">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="tipoProduto">Tipo do Produto</label>
                            <select class="form-control" id="tipoProduto">
                                <option value="">Selecione o Produto</option>
                                <!-- Adicione opções aqui -->
                            </select>
                        </div>
                        <div class="col">
                            <label for="telefoneCliente">Telefone do Cliente</label>
                            <input type="text" class="form-control" id="telefoneCliente" placeholder="Telefone">
                        </div>
                        <div class="col">
                            <label for="prioridade">Prioridade</label>
                            <select class="form-control" id="prioridade">
                                <option value="baixa">Baixa</option>
                                <option value="media">Média</option>
                                <option value="alta">Alta</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="problemas">Possíveis Problemas</label>
                        <textarea class="form-control" id="problemas" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="pecas">Peças a serem testadas</label>
                        <textarea class="form-control" id="pecas" rows="3"></textarea>
                    </div>

                    <h5 class="text-center">Diagnóstico Final</h5>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="finalizado">
                        <label class="form-check-label" for="finalizado">
                            Finalizado
                        </label>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="valorGasto">Valor Gasto</label>
                            <input type="text" class="form-control" id="valorGasto" placeholder="Valor Gasto">
                        </div>
                        <div class="col">
                            <label for="maoDeObra">Mão de Obra</label>
                            <input type="text" class="form-control" id="maoDeObra" placeholder="Mão de Obra">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="pecasTrocadas">Peça(s) Trocada(s)</label>
                            <input type="text" class="form-control" id="pecasTrocadas" placeholder="Peças Trocadas">
                        </div>
                        <div class="col">
                            <label for="problemasSolucionados">Problema(s) solucionado(s)</label>
                            <input type="text" class="form-control" id="problemasSolucionados" placeholder="Problemas Solucionados">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nomeTecnico">Nome do Técnjkhhhhhhjkjkjkico</label>
                        <input type="text" class="form-control" id="nomeTecnico" placeholder="Nome do Técnico">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>