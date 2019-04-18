<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watson - Restaurant</title>
</head>
<body>
    <?php require_once 'process.php'?>
    <fieldset>
        <?php 

        
           if($_SESSION['msg']!=""){
               echo $_SESSION['msg'];
           } 
        
        
        ?>
    </fieldset><br>
    <form action="process.php" method="post">
        <input type="text" name="msg" id="msg" autofocus>
        <button type="submit" name="btn">Enviar</button>    
    </form>
    
</body>
</html>