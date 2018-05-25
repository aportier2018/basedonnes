
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
                <h1>Formulaire projet 23 mai 2018</h1>
      </header>
      <div class = "contenu">
          <form  name="form" method ="post" action="formulaire.php" onsubmit="return validateForm(this)" >
            <label for ="titre">Titre</label>
              <input  type="radio" name="titre" id="titre" value = "Mme">Mme
              <input  type="radio" name="titre" id="titre" value="M">M<span id="etoile">*</span></br>

            <label for="prenom">Prénom:</label>
              <input type="text" name="prenom" id="prenom" ><span>*</span></br>

            <label for="nom">Nom:</label>
              <input type="text" name="nom" id="nom"><span>*</span></br>

            <label for="email">Email: </label>
              <input type="email" name="email" id="email" ><span>*</span></br>

            <label for="souvenir">Se souvenir de moi</label>
              <input type="checkbox" name="souvenir" id="souvenir" value="1"/> </br>

            <input class= "envoyer" type="submit" value="Envoyer">

          </form>
        </div>

    </body>
  </html>
