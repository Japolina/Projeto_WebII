<html lang="pt-BR">
<script src="https://kit.fontawesome.com/736f1fe219.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="lightbox.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Aula Formulário</title>
</head>

<style>
    .container {
        width: 400px;
        padding: 20px;
        border: 1px solid black;
        border-radius: 15px;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 10px auto;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    form input {
        width: 200px;
        display: flex;
        padding: 10px;
        margin-top: 20px;
        border: 1px solid black;
        border-radius: 10px;
    }
</style>

<body>
    <div class="container">
        <h1>Restaurante</h1>
        <form action="exercicio5.php" method="post">
            <input type="text" name="nomePrato" id="nomePrato" 
            placeholder="Insira o nome do prato">
            <input type="number" name="peso" id="peso" 
            min="10" max="2000" step="0.01" placeholder="Peso">
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar">
        </form>
    </div>
</body>

</html>