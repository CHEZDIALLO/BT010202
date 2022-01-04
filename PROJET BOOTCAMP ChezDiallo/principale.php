<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">



        <div id="content">
            
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            
        
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    
                    echo "<br>Bonjour $user, vous êtes connectés" ; 
                }
            ?>
            
        </div>
        <a href="commande.html"><span>Passer une commande</span></a>
    </body>
</html>
