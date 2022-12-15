<!DOCTYPE html>
<html dir="ltr" lang="fr">
    <head>
        <link rel="stylesheet" href="../CSS/Profil.css ">
    </head>
    <body>
    <?php
    include("../View/Header.php");
    ?>
        <div class="flexcontainer1">
            <div class="fc11">
                <div class="Photo"> Photo de profil </div>
                <form class ="formIP">
                    <input class="InformationsPersonnelles" type="text" placeholder="Nom Prénom">
                    <input class="InformationsPersonnelles" type="text" placeholder="Age">
                    <input class="InformationsPersonnelles" type="text" placeholder="Adresse">
                    <input class="InformationsPersonnelles" type="text" placeholder="Adresse Mail">
            </div>
                    <div class="fc11">
                        <div class="BigAM">
                            <input class="Aproposdemoi" type="text" placeholder="A propos de moi">
                        </div>
                        <input class="Button1" type="submit" value="Modifier mon profil">
                </form>
                
            </div>
        </div>
        <div class="flexcontainer2">
            <div class="Paramètres">
                <form class="ParamètreGetD">
                    <div class="ParamètreG">
                        <div class="Check"> 
                            <a> Je souhaite recevoir les notifications <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise la géolocalisation <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs à CO2 <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                    </div>
                    <div class="ParamètreD">
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs cardiaques <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs sonores <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                        <div class="Check"> 
                            <a> J'autorise l'utilisation de capteurs à température corporelle <br> 
                                <input type="checkbox"> Oui 
                                <input type="checkbox"> Non 
                            </a>
                        </div>
                    </div>
                </div>
                <input class="Button2" type="submit" value="Enregistrer les modifications">
            </form>
        </div>
        <?php
            include("../View/Footer.php");
        ?>
    </body>
</html>