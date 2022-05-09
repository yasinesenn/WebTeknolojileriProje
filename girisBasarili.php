<?php
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
    }else{
        echo "Hoşgeldiniz b211210386. <br>";
        header("Refresh: 3; url=index.html");
    }
?>