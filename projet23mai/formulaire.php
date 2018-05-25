<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>projet 23 mai 2018</title>
      <link type ="text/css" rel="stylesheet" href="css/style.css">
       <script src="script.js"></script>
    </head>
    <body>

      <header>
                <h1> Demande prise en compte</h1>
      </header>
      <div class = "retour">
          <form  name="form" method ="post" action="formulaire.php" onsubmit="return validateForm(this)" >
            <label for ="titre">Titre</label>
            <?php echo $_POST["titre"] ?></br>
            <label for="prenom">Prénom:</label>
              <?php echo $_POST["prenom"] ?></br>
            <label for="nom">Nom:</label>
              <?php echo $_POST["nom"] ?></br>
            <label for="email">Email: </label>
              <?php echo $_POST["email"] ?></br>
          </form>

          <?php

          $titre = $_POST["titre"];
          $prenom = $_POST["prenom"];
          $nom = $_POST["nom"];
          $email = $_POST["email"];


         $servername = "localhost";
         $username = "root@localhost";
         $password = "";
         $dbase ="test";

         if (!empty($_POST["souvenir"])){
           $x = 1;
         }
         else {
           $x = 0;
         }

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbase);

         // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
         echo "Connected successfully";
         $sql = "INSERT INTO contact (titre, prenom, nom, email, souvenir)
          VALUES ('$titre','$prenom','$nom','$email',$x)";

          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

$conn->close();
         ?>

          <p class="reponse">
           <?php
              $titre = "Envoi de mail par PHP";
              $texte = "bonjour";
              $destinataire=$_POST["email"];
              $delapartde = "anne.portier@wanadoo.fr";

              if (mail($destinataire,$titre,$texte,$delapartde))
                {
                echo "Statut d'envoi du message: succès.";
                }
                else
                {
                  echo "Statut d'envoi du message: non envoyer !";
                }
            ?>
          </p>
      </div>

  </body>
</html>
