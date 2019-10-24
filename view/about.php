<?php
global $global, $config;
if(!isset($global['systemRootPath'])){
    require_once '../videos/configuration.php';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $config->getLanguage(); ?>">
    <head>
        <title><?php echo $config->getWebSiteTitle(); ?> :: <?php echo __("About"); ?></title>
        <?php
        include $global['systemRootPath'] . 'view/include/head.php';
        ?>
    </head>

    <body class="<?php echo $global['bodyClass']; ?>">
        <?php
        include $global['systemRootPath'] . 'view/include/navbar.php';
        ?>

        <div class="container">
            <div class="bgWhite">
                <?php
                $custom = "";
                if (YouPHPTubePlugin::isEnabled("c4fe1b83-8f5a-4d1b-b912-172c608bf9e3")) {
                    require_once $global['systemRootPath'] . 'plugin/Customize/Objects/ExtraConfig.php';
                    $ec = new ExtraConfig();
                    $custom = $ec->getAbout();
                }
                if(empty($custom)){
                ?>
                <h1><?php echo __("Objectifs de BledTube"); ?></h1>
                <p><?php echo __("Vous êtes sur un site qui est 100% légal et déstiné pour toute la famille afin de regarder des vidéos à la demande"); ?></p>
                <p><?php echo __("Nous éstimons qu'il y a déjà assez de sites de streaming sur internet pour éviter d'en faire un nième alors que c'est interdit par la loi française"); ?></p>
                <p><u><?php echo __("Nous ne partagerons donc aucun contenu vidéo qui sera hors de la loi française HADOPI"); ?></u></p>
                <p><?php echo __("La majorité des vidéos sont disponibles sur YouTube et ne sont ici que pour faire un tri dans la multitude de vidéos du site d'origine et donc séléctionner un contenu de qualité, ce qui prend beaucoup de temps et donc vu que le site est gratuit vous verrez certainement quelques pubs dans un avenir proche ou alors je vais voir comment mettre des trucs payants"); ?></p>
                <p><b><?php echo __("BledTube est une déviation humourisique du nom de domaine YouTube"); ?></b><?php echo __(" dont le gestionnaire de contenu lui même en étant une aussi et n'est en aucun cas un concurrent à YouTube de toute façon je suis incapable de gérer tout un site de contenu vidéo"); ?></p>
                <p><?php echo __("J'aimerais juste garder le à propos d'origine pour que vous sachiez quelles sont les motivations à rester dans la légalité et comment le site est construit"); ?></p>

                <h1><?php echo __("Mots du développeur"); ?></h1>

                <p><?php echo __("I would humbly like to thank God for giving me the necessary knowledge, motivation, resources and idea to be able to execute this project. Without God's permission this would never be possible."); ?></p>
                <blockquote class="blockquote">
                    <p><?php echo __("For of Him, and through Him, and to Him, are all things: to whom be glory for ever. Amen."); ?></p>
                    <footer class="blockquote-footer">Apostle Paul in <cite title="Source Title">Romans 11:36</cite></footer>
                </blockquote>
                <div class="btn-group btn-group-justified">
                    <a href="https://www.youphptube.com/" class="btn btn-success">Main Site</a>
                    <a href="https://demo.youphptube.com/" class="btn btn-danger">Demo Site</a>
                    <a href="https://tutorials.youphptube.com/" class="btn btn-primary">Tutorials Site</a>
                    <a href="https://github.com/DanielnetoDotCom/YouPHPTube/issues" class="btn btn-warning">Issues and requests Site</a>
                </div>
                <span class="label label-success"><?php printf(__("You are running YouPHPTube version %s!"), $config->getVersion()); ?></span>

                <span class="label label-success">
                    <?php printf(__("You can upload max of %s!"), get_max_file_size()); ?>
                </span>
                <span class="label label-success">
                    <?php printf(__("You can storage %s minutes of videos!"), (empty($global['videoStorageLimitMinutes']) ? "unlimited" : $global['videoStorageLimitMinutes'])); ?>
                </span>
                <span class="label label-success">
                    <?php printf(__("You have %s minutes of videos!"), number_format(getSecondsTotalVideosLength() / 6, 2)); ?>
                </span>
                <?php
                }else{
                    echo $custom;
                }
                ?>

            </div>

        </div><!--/.container-->
        <?php
        //include $global['systemRootPath'] . 'view/include/footer.php';
        ?>

        <script>
            $(document).ready(function () {



            });

        </script>
    </body>
</html>
