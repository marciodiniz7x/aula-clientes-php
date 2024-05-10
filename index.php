<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <section id="formulario">
        <h2>Cadastro de Clientes</h2>
        <label>Informe os dados do cliente</label>
        <br>
        <form action="cadastrar.php" method="post" id="form">
            <input type="text" placeholder="Nome completo" name="nome_completo" id="nome_completo" class="input"
                autocomplete="off">
            <input type="date" name="data_nascimento" id="data_nascimento" class="input">
            <input type="text" placeholder="Logradouro" name="logradouro" id="logradouro" class="input"
                autocomplete="off">
            <input type="number" placeholder="Nº" name="numero" id="numero" class="input" autocomplete="off">
            <input type="text" placeholder="Bairro" name="bairro" id="bairro" class="input" autocomplete="off">
        </form>
        <button onclick="validar();">Cadastrar</button>
    </section>
</body>

</html>