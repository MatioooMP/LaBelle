<?php 
    session_start();
    require __DIR__ ."/../config/config.php";
?>



<label> Usuário Logado: <?php echo $_SESSION['userLogged']; ?></label>
    
