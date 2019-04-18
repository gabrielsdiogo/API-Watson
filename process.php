<?php
session_start();
$error=false;

if(isset($_POST['btn'])){
    $mensagem =$_POST['msg'];
    $msg_filtered = preg_replace("/\s|&nbsp;/",'%20',$mensagem);
    $url="https://node-red-gs.mybluemix.net/chat?mensagem=".$msg_filtered;


    $dados=file_get_contents($url);
    $var1=explode(':"',$dados);
    $var2=explode('"',$var1[1]);

    if($var2[0]!=null && $var2[0]!=""){
            
        $_SESSION['msg'] = $var2[0];
        echo"<script>window.location.href = 'index.php';</script>";
    }else{
        $error=true;
        echo"<script>window.location.href = 'index.php';</script>";
    } 
    
}




?>