<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Affichage des données issues du formulaire de contact</h1>
    
        <p>"Merci"</p><?php echo $_POST['user_name'];
        ?>
        <p>"de nous avoir contacté à propose de </p> <?php echo $_POST['sujet'];
        ?>
        <p> "Un de nos conseillers vous contactera soit à l'adresse "</p><?php echo $_POST['user_email'];
        ?>
        <p>"ou par téléphone au </p><?php echo $_POST['telephone'];
        ?>
        <p>"dans les plus brefs délais pour traiter votre demande"</p><?php echo $_POST['user_message'];
        ?>

</body> 
</html>

