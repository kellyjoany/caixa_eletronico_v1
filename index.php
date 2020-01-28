<?php 
  session_start();
  if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
    
  } else {
    header("Location: login.php");
    exit;
  }
?>

<html>
    <head>
        <title>Caixa Eletrônico</title>
    </head>
    <body>
        <h1>Banco XYZ</h1>
        Titular: 000 <br/>
        Agência: 000 <br/>
        Conta: 000 <br/>
        Saldo: 000 <br/>
        <a href="sair.php">Sair</a>
    </body>
</html>