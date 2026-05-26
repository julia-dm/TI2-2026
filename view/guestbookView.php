<?php
# view/guestbookView.php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TI2 | Livre d'or</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="nav">
        <img src="img/logoCF2M.png" alt="logo" width="100" height="100">
        <div> <h1>Livre d'or</h1> <br>
       <p> Laisser une trece de votre passage!</p></div>
       
        <button class="change_theme">☀️ Mode clair </button>
    </nav>

<!-- Formulaire d'ajout d'un message -->

<div class="wrapper">
    <div class="form-img">
<img src="img/img.png" alt="computer">

 <form action="" method="POST" class="form">
    <div class="field">
        <label for="firstname">Nom</label>
        <input type="text" id="firstname" name="firstname" placeholder="Ex:Smith" >
    </div>
       <div class="field">
        <label for="lastname">Prénom</label>
        <input type="text" id="lastname" name="lastname" placeholder="Ex:John">
    </div>
       <div class="field">
        <label for="usermail">E-mail</label>
        <input type="text" id="usermail" name="usermail" placeholder="john.smith@example.com">
    </div>
       <div class="field">
        <label for="postcode">Code Postal</label>
        <input type="text" id="postcode" name="postcode" placeholder="EX:1000" >
    </div>
       <div class="field">
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" id="phone" placeholder="Ex:04 23 45 67 89" >
    </div>
        <div class="field">
    <label for="message">Message</label>
    <textarea name="message" id="message" placeholder="Un petit mot..." ></textarea>
        </div>
    <button type="submit" class="submit-btn ">Envoyer le message</button>
 </form>
</div>
<!-- Si pas de message -->
 <div class="messages">
   <?php
$nbMessages =  $countMessages;
            if (empty($nbMessages)):
              
            ?>
              <h3>Pas encore de message</h3>

<!-- Si 1 message -->
 <?php
            // il y a au mois un message
            elseif( $nbMessages == 1):
               
            ?>
<h3>Il y a 1 message</h3>
<!-- Si plusieurs messages -->
 <?php
            // il y a au mois un message
            else :
                // preparation du pluriel si on a plus d'un message
                 //echo $pagination; 
            ?>
<h2>Il y a (<?= $nbMessages ?>) messages </h2>
        
 
<!-- Pagination (BONUS) -->

<!-- Liste des messages -->
 <div class="messages">
                         <?php
                    foreach ($messages as $message):
                    ?>
<ul class="comment_body">
    <li class="comment_meta">
        <p><strong><?= htmlspecialchars($message['firstname']) ?> <?= htmlspecialchars($message['lastname']) ?></strong></p>
        <p><em><?= htmlspecialchars($message['usermail']) ?></em></p>
        <p><?= htmlspecialchars( $message['datemessage']) ?></p>
    </li>
<p><?= htmlspecialchars($message['message']) ?></p>

</ul>
    <?php 
     endforeach;
 ?>
 </div>
          <?php 
     endif;
 ?>
                 </div>

<img src="" alt="">

<script src="js/validation.js"></script>
</body>
</html>