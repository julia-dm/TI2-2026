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
        <img src="img/logo.png" alt="">
        <div class="header-title"> <h1>Livre d'or</h1> 
       <p> Laisser une trace de votre passage!</p></div>
       
        <button class="change_theme" id="change_theme">🌙 Dark Mode</button>
    </nav>

<!-- Formulaire d'ajout d'un message -->

<div class="wrapper">
    <div class="bla">
    <div class="form-img">
<!-- <img src="img/img.png" alt="computer"> -->

</div>
 <form action="" method="POST" class="form" id="form">
       <div id="submit_message"></div>
    <div class="field" id="f-firstname">
        <label for="firstname">Nom</label>
        <input type="text" id="firstname" name="firstname" placeholder="Ex:Smith" required>
  <div id="msg">Au moins 2 caractères</div>
    </div>
       <div class="field" id="f-lastname">
        <label for="lastname">Prénom</label>
        <input type="text" id="lastname" name="lastname" placeholder="Ex:John" required>
     <div id="msg">Au moins 2 caractères</div>
    </div>
       <div class="field" id="f-email">
        <label for="usermail">E-mail</label>
        <input type="text" id="usermail" name="usermail" placeholder="john.smith@example.com"required>
     <div id="msg">Respecter le format prenom.nom@mail.com</div>
    </div>
       <div class="field" id="f-postcode">
        <label for="postcode">Code Postal</label>
        <input type="text" id="postcode" name="postcode" placeholder="EX:1000" required maxlength="4">
 <div id="msg">Code postal belge (4 chiffres)</div>
    </div>
       <div class="field" id="f-phone">
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" id="phone" placeholder="Ex:0423456789" required>
         <div id="msg">Numéro de téléphone belge</div>
    </div>
        <div class="field" id="f-message">
    <label for="message">Message</label>
    <textarea name="message" id="message" placeholder="Un petit mot..." maxlength="300" required></textarea>      
     <div id="msg">Au moins 10 caractères</div>
</div>

<!-- <p style="color:black;"><span id="messLen">0</span>/300</p> -->
 <div class="box_char">
   
    <div>
    <input type="checkbox" id="ch_box">
    <label for="ch_box" id="ch_label">J'accepte le storage de mes dobbées personnelles</label>
 
    </div>
     <p style="color:black;"><span id="messLen">0</span>/300</p>
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
            else:
                // preparation du pluriel si on a plus d'un message
                $pluriel = $nbMessages > 1 ? "s" : "";
            ?>
<div class="messages">
    <h2 style="border-bottom:2px solid black; text-align:center;">Message<?= $pluriel ?> récent<?= $pluriel ?> - Il y a actuellement (<?= $nbMessages ?>) message<?= $pluriel ?> </h2>
                       <?php endif; ?>
                    <?php if (!empty($nbMessages)): ?>
                       <?php
                    foreach ($messages as $message):
                    ?>
<ul class="comment_body">
    <li class="comment_meta">
        <p><strong><?= htmlspecialchars($message['firstname']) ?> <?= htmlspecialchars($message['lastname']) ?></strong></p>
        <p><em><?= htmlspecialchars($message['usermail']) ?></em></p>
        <p><?= htmlspecialchars( $message['datemessage'])?></p>
    </li>
<p><?= htmlspecialchars($message['message']) ?></p>

</ul>
    <?php 
     endforeach;
      endif;    
 ?>
 </div>
  <div class="pagination">
<p>
    <a href=""> <?php  echo $pagination ?></a>
</p>
    </div>
 </div>

     </div>
                

<script src="js/validation.js"></script>

</body>
</html>