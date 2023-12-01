<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <div4>
            <a href="inicio.php">Início</a>
        </div4>
        <div5>
            <a href="quem somos.php">Integrantes</a>
        </div5>
        <div6>
            <a href="contato.php">Contatos</a>
        </div6>


</head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: goldenrod;
        }
        header{
            color: black;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            height: 150px;
            background-color: goldenrod;
            padding: 20px;
            font-size: 50px;
            }
            main{
            color: white;
            align-items: top;
            height: 250px;
            background-color: rgb(105, 102, 102);
            padding: 30px;
            font-size: 3px;
            }
            footer{
            color: black;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            height: 150px;
            background-color: goldenrod;
            padding: 30px;
            font-size: 30px;
            }
            div1{
                position: absolute;
                top: 30%;
                left: 65%;
                transform: translate(-100%,-100%);
                font-size: 30px;
            }
            div2 {
                position: absolute;
                top: 90%;
                left: 50%;
                transform: translate(-100%,-100%);
                font-size: 40px;
            }
    </style>
<body>
    <header>
        <div1>
          <h1>Agendamento de Serviços</h1>
        </div1>
        
      </header>
    <main>
        <div2>
          <pre>


      SERVIÇOS:
  - Design e manutenção de sites
  - Manutenção de sistemas de TI
  - Instalação de novos sistemas
  - Serviços de rede
  - Consultoria especializada
          </pre>
        </div2>
        </main>
    <footer>
    <form>
    <div>
        <label>Data e Hora:</label>
        <input type="datetime-local" name="data-hora">
        <!--
        <input type="datetime" name="data-hora">
        -->
        <!--
            <input type="submit" name="enviar"
            value="Enviar Mensagem"> -->
            <input type="reset" name="limpar" value="Limpar">
            <button>Agendar consultoria</button>
        </div>
    </form>
    </footer>
</body>
</html>