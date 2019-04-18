<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include('process.php');?>
    <?php echo $resposta?>
    <?php 
        

        echo $_SESSION['msg'];
        echo $resposta;
    
    ?>
</body>
</html>