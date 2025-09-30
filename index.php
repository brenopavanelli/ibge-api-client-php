<?php
require_once 'api_ibge.php';
$regioes = buscarRegioes();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiões do Brasil - IBGE </title>
</head>
<body>

    <h1>Regiões do Brasil</h1>
    <h2>Consumindo dados de uma API pública</h2>
    <p>Dados consumidos da API de Localidades do IBGE.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Sigla</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($regioes as $regiao) {
                    echo "<tr>";
                    echo "<td>" . $regiao['id'] . "</td>";
                    echo "<td>" . $regiao['sigla'] . "</td>";
                    echo "<td>" . $regiao['nome'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>