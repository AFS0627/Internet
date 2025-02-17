<?php 
    include_once("Database.php");
    include_once("PessoaDAO.php");

    if (isset($_GET["pessoa_id"])) {
        $id2 = $_GET["pessoa_id"];
        $pessoa = getUsuarioById($id2); // Alterado para getUsuarioById
    } else {
        die("Pessoa não encontrada");
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: white;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            font-size: 1.8em;
            font-weight: bold;
        }

        fieldset {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1em;
        }

        input[type="text"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        input[type="submit"], .delete-btn {
            width: 100%;
            padding: 12px;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"] {
            background-color: blue;
        }

        input[type="submit"]:hover {
            background-color: darkblue;
        }

        .delete-btn {
            background-color: red;
            margin-top: 10px;
        }

        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<h2>Editar Pessoa</h2>
<form action="pessoaControle.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($pessoa['id']); ?>">

    <label for="nome">Nome: </label>
    <input type="text" name="nome" value="<?php echo htmlspecialchars($pessoa['nome']); ?>" required>

    <label for="idade">Idade: </label>
    <input type="number" name="idade" value="<?php echo htmlspecialchars($pessoa['idade']); ?>" required>

    <label for="cpf">CPF: </label>
    <input type="text" name="cpf" value="<?php echo htmlspecialchars($pessoa['cpf']); ?>" required>

    <label for="senha">Senha: </label>
    <input type="password" name="senha" value="<?php echo htmlspecialchars($pessoa['senha']); ?>" required>

    <input type="hidden" name="acao" value="editar">
    <input type="submit" value="Salvar alterações">
    
    <button type="submit" name="acao" value="delete" class="delete-btn">Excluir Usuário</button>
</form>

</body>
</html>
