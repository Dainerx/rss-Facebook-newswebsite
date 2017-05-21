<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Actulyoum</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../assets/font/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/font/font.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.bxslider.css" media="screen"/>
</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=1466840713334735";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="body_wrapper">
    <div class="center">
        <?php include('../include/top.php');
        require_once('../controller/ArticleController.php');
        $articleController = new ArticleController();
        $articles = $articleController->getCategoryArticles($articleController->conn, 2);
        ?>
        <div class="content_area">
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">High-Tech News</h2>
                        <div class="single_left_coloum floatleft"><img src="../images/a1h.png" alt=""/>
                            <h3>Apple préparerait un iPhone Edition pour les 10 ans de son smartphone</h3>
                            <p>En complément du renouvellement des iPhone 7 et iPhone 7 Plus, Apple lancerait une
                                version anniversaire baptisée iPhone Edition.</p>
                            <a class="readmore" href="article1high-tech.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a2h.png" alt=""/>
                            <h3>Les États-Unis accusent des espions russes du piratage de Yahoo!</h3>
                            <p>Les autorités américaines ont annoncé l'inculpation de quatre personnes, dont deux
                                membres des services de renseignement russes, pour une attaque massive dont a été
                                victime le géant du Web.</p>
                            <a class="readmore" href="article2high-tech.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a3h.png" alt=""/>
                            <h3>Quelles sont les versions d’Android les plus utilisées ?</h3>
                            <p>Tous les mois, Google publie de nouvelles statistiques qui rendent compte de la
                                répartition des différentes versions de son système d'exploitation d'Android.</p>
                            <a class="readmore" href="article3high-tech.php">read more</a></div>
                    </div>
                    <div class="single_left_coloum_wrapper">
                        <div class="single_left_coloum floatleft"><img src="../images/a4h.png" alt=""/>
                            <h3>Gmail pour Android permet désormais de transférer de l’argent</h3>
                            <p>Déjà disponible à partir d’un PC, le transfert d’argent via Gmail vient d’être étendu à
                                l’application Android du service de messagerie, mais seulement aux États-Unis.</p>
                            <a class="readmore" href="article4high-tech.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a5h.png" alt=""/>
                            <h3>Windows 10 Build 15060 : correctifs et bugs connus sur PC</h3>
                            <p>Microsoft propose encore une nouvelle version de test de Windows 10 dans sa nouvelle
                                version 1703 mais il ne s'agit pas encore de la version finalisée.</p>
                            <a class="readmore" href="article5high-tech.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a6h.png" alt=""/>
                            <h3>Nintendo Switch : une production doublée sur l'ensemble de l'année ?</h3>
                            <p>Afin de faire face à la demande, Nintendo aurait revu à la hausse la production de la
                                Switch, elle pourrait être doublée sur l'ensemble de l'année.</p>
                            <a class="readmore" href="article6high-tech.php">read more</a></div>
                    </div>
                    <div class="single_left_coloum_wrapper">
                        <?php foreach ($articles as $a) { ?>
                            <div class="single_left_coloum floatleft"><img src="<?php echo $a['image']; ?>" alt=""/>
                                <h3><?php echo $a['titre']; ?></h3>
                                <p><?php echo $a['contenu']; ?></p>
                                <a class="readmore" href="universalpage.php?id_article=<?php echo $a['id_article']; ?>">read more</a></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="right_coloum floatright">
                    <div class="single_right_coloum">
                    </div>
                </div>
            </div>
            <div class="sidebar floatright">
                <div class="single_sidebar"><img src="../images/add1.png" alt=""/></div>
                <div class="single_sidebar">
                    <div class="news-letter">
                        <h2>Sign Up for Newsletter</h2>
                        <p>Sign up to receive our free newsletters!</p>
                        <form action="#" method="post">
                            <input type="text" value="Name" id="name"/>
                            <input type="text" value="Email Address" id="email"/>
                            <input type="submit" value="SUBMIT" id="form-submit"/>
                        </form>
                        <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
                    </div>
                </div>
                <div class="single_sidebar">
                    <div class="popular">
                        <h2 class="title">Popular</h2>
                        <ul>
                            <li>
                                <div class="single_popular">
                                    <p>08 mars 2017</p>
                                    <h3>A Munich, Angela Merkel affiche sa différence avec Donald Trump <a
                                                href="article4politique.php" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>09 mars 2017</p>
                                    <h3>Présidentielle : les candidats prédisent aux élus locaux réforme et rigueur <a
                                                href="article3politique.php" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>08 mars 2017</p>
                                    <h3>NASSER AL-KHELAÏFI, TROISIÈME PERSONNE LA PLUS PUISSANTE DU QATAR <a
                                                href="article2sport.php" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>09 mars 2017</p>
                                    <h3>Quelles sont les versions d’Android les plus utilisées ?<a
                                                href="article3high-tech.php" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>08 mars 2017</p>
                                    <h3>La grande angoisse de l’industrie allemande <a href="article5economie.php"
                                                                                       class="readmore">Read More</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                        <a href="index.php" class="popular_more">more</a></div>
                </div>
            </div>
        </div>
        <div class="footer_top_area">
            <div class="inner_footer_top"><img src="../images/add3.png" alt=""/></div>
        </div>
        <div class="copyright_text">
            <p>Copyright &copy; 2017 ACTULYOUM Inc. All Rights Reserved </p>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="../assets/js/jquery-min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="../assets/js/selectnav.min.js"></script>
<script type="text/javascript">
    selectnav('nav', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    selectnav('f_menu', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true
    });
</script>
</body>
</html>