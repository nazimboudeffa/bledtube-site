<?php
global $global, $config;
if(!isset($global['systemRootPath'])){
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/user.php';
$email = "";
if (User::isLogged()) {
    $email = User::getEmail_();
}
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['language']; ?>">
    <head>
        <title><?php echo $config->getWebSiteTitle(); ?> :: <?php echo __("Contact"); ?></title>
        <?php
        include $global['systemRootPath'] . 'view/include/head.php';
        ?>
    </head>

    <body class="<?php echo $global['bodyClass']; ?>">
        <?php
        include $global['systemRootPath'] . 'view/include/navbar.php';
        ?>

    <div class="container list-group-item" style="height:500px">

<h1>Contact</h1>
<p>Pour nous contacter merci de passer par la page <a href="https://www.facebook.com/pg/BledTube-106102940819597" style="text-decoration: underline dotted;">Facebook</a></p>
<p>Actuellement nous utilisons les sous domaines suivants</p>
<ul>
  <li>www.bledtube.com /// Production</li>
  <li>test.bledtube.com /// Tests</li>
  <li>dev.bledtube.com /// Développements</li>
</ul>
<p>Si vous trouvez un bug merci de nous le signaler par le même moyen</p>
<p>Si vous souhaitez avoir votre copie du serveur RDV sur github.com/YouPHPTube/YouPHPTube</p>
<p>Le serveur coûte actuellement 9.99€ / an + (3.59 / mois) + (4.50 /mois) pour le moment en production</p>
<p>Le serveur est hébérgé chez OVH.COM et les vidéos sont sur WASABI.COM c'est pour cela que l'on ne peut pas uploader via un compte utilisateur et seul les admins peuvent le faire</p>
<p>Si vous souhaitez suggerer des vidéos faite le toujours par la page Facebook</p>
<p>Merci</p>
    </div><!--/.container-->

    <?php
    //include $global['systemRootPath'] . 'view/include/footer.php';
    ?>

</body>
</html>
