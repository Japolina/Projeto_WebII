<html lang="pt-BR">
<script src="https://kit.fontawesome.com/736f1fe219.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="lightbox.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Aposta Grenal</title>
</head>
<style>
    .container{
        width: 800px;
        padding: 20px;
        border: 1px solid black;
        border-radius: 15px;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 10px auto;
    }
    h1{
        display: flex;
        justify-content: center;
        align-items: center;
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
        <form action="exercicio6.php" method="post">
            <h1>Aposta Grenal</h1>
            <input type="text" name="time1" id="time1" placeholder="Insira o nome do time A">
            <input type="number" name="gols1" min="0" max="20" id="gols1" placeholder="Gols">

            <input type="text" name="time2" id="time2" placeholder="Insira o nome do time B">
            <input type="number" name="gols2" min="0" max="20" id="gols2" placeholder="Gols">

            <input type="submit" value="Apostar">
            <input type="reset" value="Limpar">
        </form>
    </div>
</body>

</html>