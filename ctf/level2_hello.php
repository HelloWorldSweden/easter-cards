<?php
$falseflag = false;
if(isset($_POST['password'])) {
  $password = $_POST['password'];
  if(!is_null($password)){
   if($password == "äppelmos"){ //Eller det lösenordet som tillhör den sidan
     header("Location: https://uppdrag.helloworld.se/ctf/level3_bonjour.php"); //Redirect, ändra till den uppgift som kommer efter
   }else{
     $falseflag = true;
   }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HW! CTF - Level 2</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Monoton&display=swap">
    <!-- add website icon -->
    <link rel="icon" href="https://cdn.glitch.com/9f283387-d235-4e18-8461-e5d9e2d2c5da%2Ffavicon.png?v=1593503631622">

  </head>
  <body class="main">
    <!-- Huvudrubrik -->
    <h1 id="head">
      Level 2
    </h1>

    <!-- Beskrivning -->
    <div class="plain-text">
      <h2 class="center-text">
        Grattis! Du klarade nivå 1!
      </h2>
      <p>
        Tack! Att jag inte tänkte på att lösenordet inte behövde vara gömt här hemma, utan
        kunde vara gömt digitalt. Nu kan jag äntligen börja spela <i>Pandou Hike</i>! :D
      </p>
      <p>
        Eftersom du verkade vara så duktig på att hitta gömda saker, har jag valt att gömma
        ett nytt lösenord för dig. Jag tog några lådor och placerade lösenordet låååångt
        ner.
      </p>
      <p class="center-text">
        <b>
          Kan du hitta lösenordet till nivå 3?
        </b>
      </p>
    </div>

    <div id="hint" >
      <button onclick="showHint()" id="hint-button">VISA HINT</button>
      <p class="dold plain-text">
        <b>HINT:</b>
        <i>Om du letar runt bland taggarna under fliken <b>Elements</b>, kan du hitta något?
          Du behöver troligtvis öppna upp ett antal taggar innan du finner något. Kanske kan det
          hjälpa att läsa avsnittet <b>2. Fliken - Elements</b> och <b>2.1 Vanliga taggar</b> i
          DevTools-guiden.</i>
      </p>
    </div>

    <!-- Vad kan det här vara? -->
    <div id="mystisk tagg">
      <div>
        <div>
          <!-- Återvändsgränd! Du får fortsätta leta vidare. -->
        </div>
        <div>
          <div>
            <!-- Jag tror vi är på god väg... -->
            <div>
              <!-- Åh nej, återvändsgränd :(-->
            </div>
          </div>
          <div>
            <div>
              <div>
                <div>
                  <!-- Nu måste vi väl ändå vara påväg någon stans? -->
                  <div>
                    <div>
                      <div>
                        <!-- Lösenordet till nivå 3: äppelmos -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rutan med input -->
    <?php
    if(!$falseflag){
      echo "<form id='form' action='https://uppdrag.helloworld.se/ctf/level2_hello.php#form' method='post'>";
    }else{
      echo "<form class ='formblink' id='form' action='https://uppdrag.helloworld.se/ctf/level2_hello.php#form' method='post'>";
    }
    ?>
        <input type="text" placeholder="Lösenord" id="password" name = "password" required="">
        <input type = "submit" id="form-button" value = "enter">
    </form>
    <script src="script.js"></script>
  </body>
</html>
