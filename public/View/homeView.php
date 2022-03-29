<?php
$return = "";
$id = "";

if (isset($_GET['success'])) {
    $id = "modal";
    switch ($_GET['success']) {
        case '0':
            $return = "Votre message a bien été envoyé !";
            break;
    }
}

if (isset($_GET['error'])) {
    $id = "modal";
    switch ($_GET['error']) {
        case '0':
            $return = "Tous les champs ne sont pas complétés !";
            break;
        case '1':
            $return = "Votre e-mail n'est pas valide !";
            break;
    }
}

?>
<div id='<?= $id?>' class='modal colorWhite center'><?= $return?></div>
<header class="reveal">
    <a href="#" class="reveal-1">Accueil</a>
    <a href="#projects" class="reveal-2">Mes projets</a>
    <a href="#contact" class="reveal-3">Contactez-moi</a>
</header>

<?php
if (isset($var['user'])) {
    foreach ($var['user'] as $user) { ?>
        <div id="top" class="center reveal">
            <div id="cube" class="reveal-1">
            </div>
            <img class="image reveal-2" src="../build/images/<?=$user->getPicture()?>" alt="<?=$user->getFirstname() . " " . $user->getLastname()?>">
            <div id="profilTop" class="flexColumn center center2 colorWhite reveal-3">
                <p>Hey, je m'appelle<p>
                <p class="size50"><?=$user->getFirstname() . " " . $user->getLastname()?></p>
                <p class="dev"><span class="gray">Développeuse</span> <span id="changeColor">FullStack</span></p>
            </div>
        </div>

        <div id="profil" class="flexRow">
            <a href="tel:<?=$user->getPhone()?>"><i class="fas fa-phone-square-alt"></i> : <?=$user->getPhone()?></a>
            <a href="mailto:<?=$user->getEmail()?>"><i class="fas fa-envelope"></i> : <?=$user->getEmail()?></a>
            <a href="https://github.com/ChloeArd" target="_blank"><i class="fab fa-github"></i> : ChloeArd</a>
            <a href="https://www.linkedin.com/in/chlo%C3%A9-ardoise-a222a3231/" target="_blank"><i class="fa-brands fa-linkedin"></i> : Chloé Ardoise</a>
        </div>
        <?php
    }
}
?>

<div class="flexRow padNot reveal">
    <div class="triangle"></div>
    <p class="textDev width_30 absolute reveal-1">Je suis une développeuse <span class="bold reveal-2">Front-End</span> et <span class="bold reveal-2">Back-End</span></p>
    <div class="width_30 imageDev1 absolute">
        <div class="carre1 absolute reveal-4"></div>
        <img class="width_100 reveal-2" src="../build/images/photo-1499951360447-b19be8fe80f5.png" alt="dev">
    </div>
    <div class="width_30 imageDev2 absolute">
        <div class="carre2 absolute reveal-4"></div>
        <img class="width_100 reveal-2" src="../build/images/photo-1488590528505-98d2b5aba04b.png" alt="dev">
    </div>
</div>

<div class="background_white flexColumn justify reveal">
    <div class="flexRow width_100 center wrap">
        <div class="flexColumn marg30 reveal-1 border">
            <h2>Les langages aquis</h2>
            <ul>
                <?php
                if (isset($var['language'])) {
                    foreach ($var['language'] as $language) { ?>
                        <li><?=$language->getName()?></li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="flexColumn marg30 reveal-2 border">
            <h2>Outils de développement</h2>
            <ul>
                <?php
                if (isset($var['tool'])) {
                    foreach ($var['tool'] as $tool) { ?>
                        <li><?=$tool->getName()?></li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="flexColumn marg30 reveal-3 border">
            <h2>Mes compétences</h2>
            <ul>
                <?php
                if (isset($var['skill'])) {
                    foreach ($var['skill'] as $skill) { ?>
                        <li><?=$skill->getName()?></li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div class="center reveal">
    <div class="circle circle-1 reveal-2"></div>
    <div class="circle2 circle-2 reveal-3"></div>
    <div class="circle2 circle-3 reveal-4"></div>
    <?php
    if (isset($var['profile'])) {
        foreach ($var['profile'] as $profile) { ?>
            <p id="profile" class="width_80 colorWhite reveal-1"><?=$profile->getProfile()?></p>
            <?php
        }
    }
    ?>
    <div class="circle2 circle-4 reveal-2"></div>
    <div class="circle circle-5 reveal-3"></div>
    <div class="circle circle-6 reveal-4"></div>
</div>

<div id="projects" class="background_white center flexColumn">
    <h1>Mes projets</h1>
    <div class="flexColumn center">
        <?php
        if (isset($var['project'])) {
            $i = 0;
            foreach ($var['project'] as $project) {
                if ($i === 0) {?>
                <div class="reveal-1 reveal margB">
                    <img class="imageProject1 reveal-2" src="build/images/<?=$project->getPicture1()?>" alt="photo du site <?=$project->getTitle()?>">
                    <div id="project" class="width_90 flexRow">
                        <div class="flexColumn" id="titleProject">
                            <a href="<?=$project->getLink()?>" target="_blank" class="title reveal-3"><i class="far fa-hand-point-right"></i><?=$project->getTitle()?></a>
                            <div class="lineHorizontal"></div>
                            <p class="reveal-4"><?=$project->getDescription()?></p>
                        </div>
                        <div class="imageProject2">
                            <img class="reveal-2" src="build/images/<?=$project->getPicture2()?>" alt="photo du logo du site <?=$project->getTitle()?>">
                        </div>
                    </div>
                </div>
                <?php
                    $i++;
                }
                else {?>
                    <div class="reveal-1 reveal margB projectInverse">
                        <img class="imageProject1 reveal-2" src="build/images/<?=$project->getPicture1()?>" alt="photo du site <?=$project->getTitle()?>">
                        <div id="project" class="width_90 flexRow">
                            <div class="imageProject2">
                                <img class="reveal-2" src="build/images/<?=$project->getPicture2()?>" alt="photo du logo du site <?=$project->getTitle()?>">
                            </div>
                            <div class="flexColumn end" id="titleProject">
                                <a href="<?=$project->getLink()?>" target="_blank" class="title reveal-3"><?=$project->getTitle()?><i class="far fa-hand-point-left"></i></a>
                                <div class="lineHorizontal"></div>
                                <p class="reveal-4"><?=$project->getDescription()?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    $i = 0;
                }
            }
        }
        ?>
    </div>
</div>

<div class="center flexColumn reveal-1 reveal">
    <h2 id="contact" class="colorWhite reveal-2">Contactez-moi ! <i class="fas fa-grin-alt"></i></h2>
    <form id="form" action="../php/contact.php" method="post" class="width_50 flexColumn reveal-3">
        <input name="name" type="text" placeholder="Votre nom et votre prénom">
        <input name="email" type="email" placeholder="Votre e-mail">
        <input name="subject" type="text" placeholder="Sujet">
        <textarea name="message" placeholder="Votre besoin ?"></textarea>
        <input id="send" name="send" type="submit" value="Envoyer">
    </form>

</div>

<a href="#"><i class="fas fa-arrow-circle-up"></i></a>