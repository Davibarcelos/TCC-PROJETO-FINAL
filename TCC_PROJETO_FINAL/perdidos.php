<?php
 
require_once '../Pag-login/classes/usuarios.php';
    $u= new Usuario;


// Consulta todos os dados da tabela "perdidos"
$sql = "SELECT * FROM perdidos";
$result = $conn->query($sql);

// Formata os resultados em uma estrutura HTML
if ($result->num_rows > 0) {
    $output = "<table><tr><th>ID</th><th>Nome</th><th>Espécie</th><th>Raça</th><th>Data Desaparecimento</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $output .= "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["especie"]."</td><td>".$row["raca"]."</td><td>".$row["datadesa"]."</td></tr>";
    }
    $output .= "</table>";
} else {
    $output = "Nenhum dado encontrado na tabela 'perdidos'.";
}

// Fecha a conexão com o banco de dados
$conn->close();

// Retorna os resultados como resposta
echo $output;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Dados da Tabela Perdidos</title>
    <style>
        .result {
            width: 80%;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="result" id="resultDiv"></div>

    <script>
        // Função para fazer a requisição dos dados da tabela
        function consultarDados() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    exibirDados(this.responseText);
                }
            };
            xhttp.open("GET", "consultar_dados.php", true);
            xhttp.send();
        }

        // Função para exibir os dados na div resultDiv
        function exibirDados(dados) {
            var resultDiv = document.getElementById("resultDiv");
            resultDiv.innerHTML = dados;
        }

        // Chamada inicial para carregar os dados
        consultarDados();
    </script>
</body>
</html>
