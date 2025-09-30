<?php
require_once 'api_ibge.php';
$regioes = buscarRegioes();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Regiões do Brasil - IBGE </title>
</head>
<body>
    <main class="d-flex min-vh-100 align-items-center justify-content-center">
        <div class="container text-center w-50 rounded bg-light p-5 shadow">
            <h1 class="text-shadow">Regiões do Brasil</h1>
            <h2 class="text-shadow">Consumindo dados de uma API pública</h2>
            <p class="text-shadow">Dados consumidos da API de Localidades do IBGE.</p>
            <table class="table shadow-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-shadow">ID</th>
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
        </div>
    </main>
    <footer>

    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>