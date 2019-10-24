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

    <div class="container list-group-item" style="height:200px">

<h1>Contact</h1>
<p>Pour nous contacter merci de passer par la page <a href="https://www.facebook.com/pg/BledTube-106102940819597" style="text-decoration: underline dotted;">Facebook</a></p>

    </div><!--/.container-->

    <?php
    //include $global['systemRootPath'] . 'view/include/footer.php';
    ?>

</body>
</html>
