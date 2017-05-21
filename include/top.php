<?php session_start(); ?>
<?php if (!(isset($_SESSION['user'])))
{ ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=1466840713334735";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php } ?>
<div class="header_area">
    <div class="logo floatleft"><a href="index.php"><img src="../images/logo1.png" alt="" /></a></div>
    <div class="top_menu floatleft">
        <ul>
            <?php if (!(isset($_SESSION['user'])))
            { ?>
                <li><a href="inscription.php">S'inscrire</a></li>
                <li><a href="login.php">Se connecter</a></li>
                <li><a href="#"><div class="fb-login-button" data-max-rows="1" data-size="small" data-show-faces="false" data-auto-logout-link="true"></div></a></li>
                <?php
            }
            else
            { ?>
                <li><a href="account.php">Connecté autant <?php echo " ". $_SESSION['user'] ?></a></li>
                <li><a href="../controller/UserController.php?id=4">Se déconnecter</a></li>
                <li><a href="publier.php">Publier un article</a></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="social_plus_search floatright">
        <div class="social">
            <ul>
                <li><a href="https://twitter.com/actulyoum" class="twitter"></a></li>
                <li><a href="https://www.facebook.com/actulyoum.tn/" class="facebook"></a></li>
            </ul>
        </div>
        <div class="search">
            <form action="#" method="post" id="search_form">
                <input type="text" value="Search news" id="s" />
                <input type="submit" id="searchform" value="search" />
                <input type="hidden" value="post" name="post_type" />
            </form>
        </div>
    </div>
</div>
<div class="main_menu_area">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="Economie.php">Economie</a>
        </li>
        <li><a href="politique.php">Politique</a>
        </li>
        <li><a href="high-tech.php">High-Tech</a>
        </li>
        <li><a href="Sport.php">Sport</a>
        </li>
</div>
