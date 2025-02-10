<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color:white;
        }
        td {
            height: 50px;
        }
    </style>
</head>
<body>

<?php
    include_once("Database.php");
    include_once("PessoaDAO.php");

    $listaPessoa = getUsuarios();
?>

    <h2>Listagem</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cpf</th>
            <th>Senha</th> 
        </tr>
        <?php
        foreach ($listaPessoa as $pessoa) {
        ?>
            <tr>
                <td>
                    <a href="editPessoa.php?pessoa_id=<?php echo $pessoa['id']; ?>">
                        <?php echo $pessoa['id']; ?>
                    </a>
                </td>
                <td><?php echo $pessoa['nome']; ?></td>
                <td><?php echo $pessoa['idade']; ?></td>
                <td><?php echo $pessoa['cpf']; ?></td>
                <td><?php echo $pessoa['senha']; ?></td> 
                
            </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>
