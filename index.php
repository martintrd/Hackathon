<!DOCTYPE html>
<html>
  <head>
    <title>Mon site web</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Mon site web</h1>
    
    <?php
      // Vérifier si le formulaire a été soumis
      if (isset($_POST['submit'])) {
        // Récupérer les données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        
        // Vérifier que tous les champs ont été remplis
        if (!empty($name) && !empty($email) && !empty($comment)) {
          // Ouvrir le fichier des commentaires en mode ajout
          $file = fopen("comments.txt", "a");
          
          // Ajouter les données du commentaire dans le fichier
          fwrite($file, "<p><strong>$name</strong> ($email) :</p>\n");
          fwrite($file, "<p>$comment</p>\n");
          
          // Fermer le fichier
          fclose($file);
        }
      }
      
      // Afficher les commentaires existants
      if (file_exists("comments.txt")) {
        include("comments.txt");
      }
    ?>
    
    <h2>Laissez un commentaire</h2>
    
    <form method="post">
      <label for="name">Nom:</label>
      <input type="text" id="name" name="name"><br>
      
      <label for="email">Adresse e-mail:</label>
      <input type="email" id="email" name="email"><br>
      
      <label for="comment">Commentaire:</label>
      <textarea id="comment" name="comment"></textarea><br>
      
      <input type="submit" name="submit" value="Envoyer">
    </form>
  </body>
</html>
