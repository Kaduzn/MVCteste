<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        fieldset {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 20px auto;
            padding: 20px;
            max-width: 400px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>

        <form method="post" action="/pessoa/form/save">
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="data_nascimento">Data Nascimento:</label>
            <input id="data_nascimento" value="<?= $model->data_nascimento ?>" name="data_nascimento" type="date" />

            <label for="endereco">Endereço:</label>
            <input id="endereci" value="<?= $model->endereco ?>" name="endereco" type="text" />

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="number" />

            <label for="email">Email:</label>
            <input id="email" value="<?= $model->email ?>" name="email" type="text" />

            <label for="telefone">Telefone:</label>
            <input id="telefone" value="<?= $model->telefone ?>" name="telefone" type="number" />

            <label for="cargo">Cargo:</label>
            <input id="cargo" value="<?= $model->cargo ?>" name="cargo" type="text" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>