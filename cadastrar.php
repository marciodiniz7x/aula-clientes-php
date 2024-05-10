<?php
    
    //Cria uma condição para verificar se o envio das informações foram feitas
    //isset() Função para verificar existencia de algo
    //$_POST['name'] captura a informação enviada no nome indicado
    if(isset($_POST["nome_completo"], $_POST["data_nascimento"], $_POST["logradouro"], $_POST["numero"], $_POST["bairro"])){
        
        /*Antes é necessário acessar no navegador localhost/phpmyadmin
        e criar o banco de dados com nome 'clientes', depois criar uma tabela também
        com o nome 'clientes' com 6 campos id, nome, data, logradouro, numero, bairro */

        //Variáveis de conexão com o banco de dados
        $banco = "clientes";
        $host = "mysql";
        $user = "root";
        $senha = "";

        //Cria a conexão com o banco de dados
        $conexao = mysqli_connect($host, $user, $senha, $banco);

        //Cria uma variável que captura os valores enviados
        $nome = $_POST["nome_completo"];
        $data = $_POST["data_nascimento"];
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];

        //Cria uma variável que armazena um comando SQL para gravar os dados no banco
        $sql = "INSERT INTO clientes VALUES(null, '$nome','$data','$logradouro','$numero','$bairro')";

        //mysqli_query executa o comando SQL gravado na variável e o IF verifica se foi realizado com sucesso
        if(mysqli_query($conexao, $sql)){
            echo "<h2>Cadastrado com sucesso!</h2>";
            echo "Nome: ".$nome."<br>";
            echo "Data de nascimento: ".date("d/m/Y", strtotime($data))."<br>";
            echo "Logradouro: ".$logradouro."<br>";
            echo "Número: ".$numero."<br>";
            echo "Bairro: ".$bairro."<br>";
            echo "<br>";
            echo "<a href='./'>Página inicial</a>";
        }else{
            echo "Erro: Não foi possível gravar os dados!";
            echo "<br>";
            echo "<a href='./'>Página inicial</a>";
        }

        
    }else{
        echo "Parâmentos não informados!";
        echo "<br>";
        echo "<a href='./'>Página inicial</a>";
    }
?>