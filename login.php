<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nome="viewport" content="widht=device-widht, initial-scale=1.0">
    <title> ProblemsSolutions </title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background-color: goldenrod;
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;    
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;

        }
       .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="inicio.php">voltar</a>
    <div> 
        <h1>login</h1>
        <form action="serviços.php" method="POST">
        <input type="text" name="Email" placeholder="Email">
        <br><br>
        <input type="passowrd" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>