<header>
    <a href="../../public/index.php">Acceuil</a>
    <a href="#projects">Mes projets</a>
    <a href="#contact">Contactez-moi</a>
</header>

<?php
if (isset($var['user'])) {
    foreach ($var['user'] as $user) { ?>
        <div id="top" class="center">
            <div id="cube">
            </div>
            <img class="image" src="../build/images/<?=$user->getPicture()?>" alt="<?=$user->getFirstname() . " " . $user->getLastname()?>">
            <div id="profilTop" class="flexColumn center colorWhite">
                <p>Hey, je m'appelle<p>
                <p class="size50"><?=$user->getFirstname() . " " . $user->getLastname()?></p>
                <p class="dev"><span class="black">Développeuse</span> <span id="changeColor">FullStack</span></p>
            </div>
        </div>

        <div id="profil" class="flexRow">
            <a href="tel:<?=$user->getPhone()?>"><i class="fas fa-phone-square-alt"></i> : <?=$user->getPhone()?></a>
            <a href="mailto:<?=$user->getEmail()?>"><i class="fas fa-envelope"></i> : <?=$user->getEmail()?></a>
        </div>
        <?php
    }
}
?>

<div class="background_white flexRow justify">
    <div class="flexColumn marg30 border">
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
    <div class="flexColumn marg30 border">
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
    <div class="flexColumn marg30 border">
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
<div class="center">
    <?php
    if (isset($var['profile'])) {
        foreach ($var['profile'] as $profile) { ?>
            <p class="width_80 colorWhite"><?=$profile->getProfile()?></p>
            <?php
        }
    }
    ?>
</div>

<div id="projects" class="background_white center flexColumn">
    <h1>Mes projets</h1>
    <div class="flexRow center">
        <?php
        if (isset($var['project'])) {
            foreach ($var['project'] as $project) { ?>
                <div>
                    <img class="imageProject1" src="build/images/<?=$project->getPicture1()?>">
                    <div id="project" class="width_90 flexRow">
                        <div class="flexColumn" id="titleProject">
                            <a href="<?=$project->getLink()?>" target="_blank" class="title"><i class="far fa-hand-point-right"></i><?=$project->getTitle()?></a>
                            <div class="lineHorizontal"></div>
                            <p><?=$project->getDescription()?></p>
                        </div>
                        <div class="imageProject2">
                            <img src="build/images/<?=$project->getPicture2()?>">
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<div class="center flexColumn">
    <h2 id="contact" class="colorWhite">Contactez-moi ! 😃</h2>
    <form id="form" class="width_50 flexColumn">
        <input name="name" type="text" placeholder="Votre nom et votre prénom">
        <input name="email" type="email" placeholder="Votre e-mail">
        <input name="subject" type="text" placeholder="Sujet">
        <textarea name="message" placeholder="Votre besoin ?"></textarea>
        <input id="send" name="send" type="submit" value="Envoyer">
    </form>
</div>

<a href="#"><i class="fas fa-arrow-circle-up"></i></a>