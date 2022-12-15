<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Andrea - Admin</title>
    <link rel="stylesheet" href="../Admin.css">
</head>
<body>
    <?php
        include("../View/Header.php")
    ?>
    <div class="flex-ticket">
        <div class= "flex-container-half">
            <div class="msg">
                <p class="admin-text">De&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="msg">
                <p class="admin-text">Objet&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="msg">
                <p class="admin-text">Priorité&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
        </div>
        <div class="flex-container-half">
            <div class="msg">
                <p class="admin-text">Date&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="msg">
                <p class="admin-text">Catégorie&nbsp;:</p>
                <input class="data-ticket" type="text">
            </div>
            <div class="boutton">
                <button type="button" id="boutton-envoyer">Envoyer</button>
            </div>
        </div>

        <div class="flex-container-100">
            <textarea id="freeform" rows="4" cols="50" placeholder="Write down your text here"></textarea>

        </div>
    </div>
    <?php
    include("../View/Footer.php");
    ?>
</body> 
</html>