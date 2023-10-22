<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Contact - Merci</title>
</head>
<body>
    <h1>Merci <?php echo $_POST['prenom'] . ' ' . $_POST['nom']; ?> de nous avoir contacté à propos de "<?php echo $_POST['sujet']; ?>".</h1>
    <p>Un de nos conseillers vous contactera soit à l'adresse <?php echo $_POST['email']; ?> ou par téléphone au <?php echo $_POST['telephone']; ?> dans les plus brefs délais pour traiter votre demande :</p>
    <p><?php echo $_POST['message']; ?></p>
</body>
</html>
