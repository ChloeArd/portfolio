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
            <img class="image" src="../build/images/1.png" alt="Chloé Ardoise">
            <div id="profilTop" class="flexColumn center colorWhite">
                <p>Hey, je m'appelle<p>
                <p class="size50"><?=$user->getFirstname() . " " . $user->getLastname()?></p>
                <p class="dev"><span class="black">Développeuse</span> <span id="changeColor">FullStack</span></p>
            </div>
        </div>

        <div id="profil" class="flexRow">
            <a href="tel:0767669766"><i class="fas fa-phone-square-alt"></i> : 07 67 66 97 66</a>
            <a href="mailto:chloe.ardoise@gmail.com"><i class="fas fa-envelope"></i> : chloe.ardoise@gmail.com</a>
        </div>
        <?php
     }
 }
?>

<div class="background_white flexRow justify">
    <div class="flexColumn marg30 border">
        <h2>Les langages aquis</h2>
        <ul>
            <li>HTML</li>
            <li>CSS / SASS</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>NPM</li>
        </ul>
    </div>
    <div class="flexColumn marg30 border">
        <h2>Outils de développement</h2>
        <ul>
            <li>Bootstrap</li>
            <li>GitHub</li>
            <li>Terminal</li>
            <li>WebPack</li>

        </ul>
    </div>
    <div class="flexColumn marg30 border">
        <h2>Mes compétences</h2>
        <ul>
            <li>Créative</li>
            <li>Organiser</li>
            <li>Sait s'adapter</li>
            <li>Préférence pour le front</li>
            <li>Ponctuelle</li>
        </ul>
    </div>
</div>
<div class="center">
    <p class="width_80 colorWhite">Pour en apprendre un peu plus sur moi, j'ai 19 ans. Je suis une jeune développeuse 👩‍💻, j'ai eu récemment mon diplôme de BAC +2 DWWM 🥳. Pour acquérir encore plus
        de connaissances, je suis actuellement en formation de CDA. Cet univers m'intéresse beaucoup, que j'aimerais en faire mon
        métier. J'aime plus particuliérement le front, je suis une personne créative 🎨, qui essaye d'apporter de l'originalité tout en
        restant simple. Après la formation qui est en cours, je serais à la recherche d'un travail, donc si vous êtes interréssés,
        <a href="#contact" class="contact">contactez moi</a> 😄 !</p>
</div>

<div id="projects" class="background_white center flexColumn">
    <h1>Mes projets</h1>
    <div class="flexRow center">
        <div>
            <img class="imageProject1" src="build/images/262202024_224353823037268_4300898622644850545_n.png">
            <div id="project" class="width_90 flexRow">
                <div class="flexColumn" id="titleProject">
                    <a href="https://animnord.chloeard.fr" target="_blank" class="title"><i class="far fa-hand-point-right"></i>Anim'Nord</a>
                    <div class="lineHorizontal"></div>
                    <p>Site de chiens et de chats perdus ou trouvés dans la région du Nord</p>
                </div>
                <div class="imageProject2">
                    <img src="build/images/logo_animNord-removebg-preview.png">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="center flexColumn">
    <h2 id="contact" class="colorWhite">Contactez-moi ! 😃</h2>
    <form id="form" class="width_50 flexColumn">
        <input name="name" type="text" placeholder="Votre nom et votre prénom">
        <input name="email" type="email" placeholder="Votre e-mail">
        <textarea name="message" placeholder="Votre besoin ?"></textarea>
        <input id="send" name="send" type="submit" value="Envoyer">
    </form>
</div>

<a href="#"><i class="fas fa-arrow-circle-up"></i></a>