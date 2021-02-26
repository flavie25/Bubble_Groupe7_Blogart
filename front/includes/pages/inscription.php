<html>
    <header>
        <meta charset="utf8">
        <title>Inscription</title>
        <link rel="stylesheet" href="./../../assets/css/inscription.css">
    </header>
    <body>
        <svg width="2000" height="2000" viewBox="0 0 1440 1725" fill="none" xmlns="http://www.w3.org/2000/svg" style="padding-left : 0;">
        <path d="M2527.7 534.104C2322.01 189.33 1935.98 64.2684 1935.98 64.2684C1935.98 64.2684 1447.58 -126.848 950.845 150.059C950.845 150.059 695.096 356.279 411.108 139.386C131.292 -74.487 -127.345 412.667 -135.046 426.966C-135.046 427.369 -135.367 427.973 -135.367 428.375C-141.785 453.75 -251.209 909.086 -59.9582 1098.59C-59.9582 1098.59 86.3676 1274.8 334.095 1208.55C334.095 1208.55 1169.05 938.286 1138.57 1370.46C1138.57 1370.46 1164.56 1641.93 1653.59 1710.81C1653.59 1710.81 2099.63 1822.37 2415.07 1415.37C2414.75 1415.37 2733.71 878.877 2527.7 534.104Z" fill="#113638"/>
        </svg>
        
        <div class="formulaire-container">
        <div class="svg">
            <svg width="200" height="200" viewBox="0 0 2813 2813" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1406.5 0C629.793 0 0 629.669 0 1406.44C0 2183.21 629.731 2812.88 1406.5 2812.88C2183.33 2812.88 2813 2183.21 2813 1406.44C2813 629.669 2183.33 0 1406.5 0ZM1406.5 420.541C1663.51 420.541 1871.77 628.866 1871.77 885.75C1871.77 1142.7 1663.51 1350.96 1406.5 1350.96C1149.62 1350.96 941.353 1142.7 941.353 885.75C941.353 628.866 1149.62 420.541 1406.5 420.541ZM1406.19 2445.16C1149.86 2445.16 915.096 2351.81 734.017 2197.29C689.905 2159.67 664.452 2104.5 664.452 2046.61C664.452 1786.08 875.309 1577.57 1135.9 1577.57H1677.22C1937.88 1577.57 2147.93 1786.08 2147.93 2046.61C2147.93 2104.56 2122.6 2159.61 2078.43 2197.23C1897.41 2351.81 1662.58 2445.16 1406.19 2445.16Z" fill="#433E3F"/>
            </svg>
        </div>
            <form action="">
            <fieldset>
        <legend class="legend1">Formulaire Membre...</legend>

        <div class="control-group">
            <label class="control-label" for="prenomMemb"><b>Prénom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" name="prenomMemb" id="prenomMemb" size="80" maxlength="80" value="<?= $prenomMembre; ?>" autofocus="autofocus" />
        </div>
        <div class="control-group">
            <label class="control-label" for="nomMemb"><b>Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" name="nomMemb" id="nomMemb" size="80" maxlength="80" value="<?= $nomMembre; ?>" />
        </div>
        <div class="control-group">
            <label class="control-label" for="pseudoMemb"><b>Pseudo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" name="pseudoMemb" id="pseudoMemb" size="80" maxlength="80" value="<?= $pseudoMembre; ?>"  />
        </div>
        <div class="control-group">
            <label class="control-label" for="passMemb1"><b>Mot de passe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="password" name="passMemb1" id="passMemb1" size="80" maxlength="80" value="<?= $passMembre1; ?>"  />
        </div>
        <div class="control-group">
            <label class="control-label" for="passMemb2"><b>Confirmation mot de passe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="password" name="passMemb2" id="passMemb2" size="80" maxlength="80" value="<?= $passMembre2; ?>"  />
        </div>
        <div class="control-group">
            <label class="control-label" for="eMailMemb1"><b>e-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" name="eMailMemb1" id="eMailMemb1" size="80" maxlength="80" value="<?= $emailMembre1; ?>" />
        </div>
        <div class="control-group">
            <label class="control-label" for="eMailMemb2"><b>Confirmation e-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" name="eMailMemb2" id="eMailMemb2" size="80" maxlength="80" value="<?= $emailMembre2; ?>" />
        </div>

        <div class="control-group">
            <label class="control-label" for="souvenirMemb"><b>Se souvenir de moi :</b></label>
            <div class="controls">
               <fieldset>
                  <input type="radio" name="souvenirMemb"
                  <?= ($souvenirMembre == "on") ? 'checked="checked"' : ''
                  ?> value="on" />&nbsp;&nbsp;Oui&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="souvenirMemb"
                  <?= ($souvenirMembre == "off") ? 'checked="checked"' : ''
                  ?> value="off" checked="checked" />&nbsp;&nbsp;Non
               </fieldset>
            </div>
        </div>
      
        <div class="control-group">
            <label class="control-label" for="accordMemb"><b>J'accepte que mes données soient conservées :</b></label>
            <div class="controls">
               <fieldset>
                  <input type="radio" name="accordMemb"
                  <?= ($accordMembre == "on") ? 'checked="checked"' : ''
                  ?> value="on" />&nbsp;&nbsp;Oui&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="accordMemb"
                  <?= ($accordMembre == "off") ? 'checked="checked"' : ''
                  ?> value="off" checked="checked" />&nbsp;&nbsp;Non
               </fieldset>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="g-recaptcha" data-sitekey="<?= $configData->CAPTCHA_SITE_KEY; ?>"></div>
        </div>

        <div class="control-group">
            <div class="controls">
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Initialiser" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Valider" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />
                <br>
            </div>
        </div>
      </fieldset>
            </form> 
        </div>
    </body>
</html>