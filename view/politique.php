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
        $articles = $articleController->getCategoryArticles($articleController->conn, 1);
        ?>
        <div class="content_area">
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">Politique News</h2>
                        <div class="single_left_coloum floatleft"><img src="../images/a1p.png" alt=""/>
                            <h3>La Corée du Nord teste un nouveau moteur de fusée en présence de Kim Jong-Un</h3>
                            <p>Selon des experts, le régime de Pyongyang pourrait prochainement tester en secret un
                                missile balistique intercontinental depuis un lanceur mobile...</p>
                            <a class="readmore" href="article1politique.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a2p.png" alt=""/>
                            <h3>Election présidentielle : François Hollande estime que la campagne électorale n’est pas
                                à la hauteur</h3>
                            <p>« La qualité est assez basse. Les Français ne s’y retrouvent pas pour l’instant », a
                                déclaré le président de la République, qui assassine au passage le processus des
                                primaires.</p>
                            <a class="readmore" href="article2politique.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a3p.png" alt=""/>
                            <h3>Présidentielle : les candidats prédisent aux élus locaux réforme et rigueur</h3>
                            <p>Les candidats à la présidentielle ont détaillé leur programme pour les collectivités
                                territoriales.</p>
                            <a class="readmore" href="article3politique.php">read more</a></div>
                    </div>
                    <div class="single_left_coloum_wrapper">
                        <div class="single_left_coloum floatleft"><img src="../images/a4p.png" alt=""/>
                            <h3>A Munich, Angela Merkel affiche sa différence avec Donald Trump</h3>
                            <p>Lors de la conférence sur la sécurité, la chancelière allemande a célébré le
                                multilatéralisme et appelé à une coopération approfondie avec le monde musulman.</p>
                            <a class="readmore" href="article4politique.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a5p.png" alt=""/>
                            <h3>Non, Donald Trump n'a pas refusé de serrer la main d'Angela Merkel</h3>
                            <p>Selon le porte-parole du président américain en tout cas…</p>
                            <a class="readmore" href="article5politique.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a6p.png" alt=""/>
                            <h3>Programme de Fillon : mais où est donc passée l'indépendance de la justice ?</h3>
                            <p>Le programme fin février affichait trois axes pour la justice : la simplicité,
                                l'efficacité et l'indépendance. Lundi, ce dernier point a été escamoté.</p>
                            <a class="readmore" href="article6politique.php">read more</a></div>
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