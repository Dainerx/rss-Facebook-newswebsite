<?php

if (isset($_GET['action']) && $_GET['action'] == "signup") {
    echo '<script>alert("Félicitations, vous êtes inscrit avec succès");</script>';
}
if (isset($_GET['action']) && $_GET['action'] == "upload") {
    echo '<script>alert("Article publié! Merci pour votre collaboration");</script>';
}
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Actulyoum</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
    <meta property="fb:pages" content="119959501413492"/>
    <link rel="stylesheet" type="text/css" href="../assets/font/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/font/font.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.bxslider.css" media="screen"/>
</head>
<body>
<div class="body_wrapper">
    <div class="center">
        <?php include('../include/top.php');
        include('../controller/ArticleController.php');
        $crud = new ArticleController();
        $list = $crud->getAll($crud->conn);
        $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
        $rssfeed .= '<rss version="2.0">';
        $rssfeed .= '<channel>';
        $rssfeed .= '<title>My RSS feed</title>';
        $rssfeed .= '<link>http://devsite.tw.tn/</link>';
        $rssfeed .= '<description>TANITWEB</description>';
        $rssfeed .= '<language>en-us</language>';
        $rssfeed .= '<copyright>Copyright (C) 2017</copyright>';

        foreach ($list as $l) {
            $rssfeed .= '<item>';
            $rssfeed .= '<title>' . $l['titre'] . '</title>';
            $rssfeed .= '<description>' . $l['contenu'] . '</description>';
            $rssfeed .= '<link>' . "http://devsite.tw.tn/" . '</link>';
            $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($l['date_de_creation'])) . '</pubDate>';
            $rssfeed .= '</item>';
        }
        $rssfeed .= '</channel>';
        $rssfeed .= '</rss>';
        $handle = fopen("../rss.xml", "w+");
        fclose($handle);
        $myfile = fopen("../rss.xml", "w");
        fwrite($myfile, $rssfeed);
        fclose($myfile);
        ?>
        <div class="slider_area">

            <div class="slider">

                <ul class="bxslider">

                    <li><a href="article1economie.php" target="_blank"><img src="../images/1.png" alt=""
                                                                            title="2017 : risque politique maximal pour l'économie mondiale"/></a>
                    </li>

                    <li><a href="article4sport.php" target="_blank"><img src="../images/2.png" alt=""
                                                                         title="Cristiano ronaldo 9 fois plus rentable que messi pour ses sponsors"/></a>
                    </li>

                    <li><a href="article1high-tech.php" target="_blank"><img src="../images/3.png" alt=""
                                                                             title="Apple préparerait un iPhone Edition pour les 10 ans de son smartphone"/></a>
                    </li>

                </ul>

            </div>

        </div>

        <div class="content_area">
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">Economy News</h2>
                        <a class="more" href="Economie.php">more</a>
                        <div class="single_left_coloum floatleft"><img src="../images/a4e.png" alt=""/>
                            <h3>La Chambre de commerce européenne dénonce la « Grande muraille » protectionniste en
                                Chine</h3>
                            <p>Le lobby européen fustige les subventions « colossales » accordées aux entreprises
                                chinoises des nouvelles technologies.</p>
                            <a class="readmore" href="article6economie.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a1e.png" alt=""/>
                            <h3>L’AIE craint un nouveau choc petrolier apres 2020</h3>
                            <p> Faute d’investissements, l’industrie de l’or noir pourrait connaître un début de pénurie
                                et une flambée des prix.</p>
                            <a class="readmore" href="article3economie.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a6e.jpg" alt=""/>
                            <h3>Pourquoi l’economie mondiale reste « accro » au dollar</h3>
                            <p>Vu d’ailleurs. Dans cette chronique hebdomadaire, l’économiste américaine Carmen Reinhart
                                pointe le problème posé par la position dominante de la devise américaine comme monnaie
                                de réserve et la solution possible qui pourrait venir de Chine.</p>
                            <a class="readmore" href="article2economie.php">read more</a></div>
                    </div>
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">latest articles</h2>
                        <a class="more" href="index.php">more</a>
                        <div class="single_left_coloum floatleft"><img src="../images/a5p.png" alt=""/>
                            <h3>Non, Donald Trump n'a pas refusé de serrer la main d'Angela Merkel</h3>
                            <p> Selon le porte-parole du président américain en tout cas…</p>
                            <a class="readmore" href="article5politique.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a3e.png" alt=""/>
                            <h3>Inférieure aux prévisions, la croissance française atteint 1,1 % en 2016</h3>
                            <p>Le gouvernement tablait sur une progression de 1,4 % du PIB sur l’ensemble de l’année. En
                                2015, la croissance s’était établie à 1,2 %.</p>
                            <a class="readmore" href="article4economie.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a6h.png" alt=""/>
                            <h3>Nintendo Switch : une production doublée sur l'ensemble de l'année ?</h3>
                            <p>Afin de faire face à la demande, Nintendo aurait revu à la hausse la production de la
                                Switch, elle pourrait être doublée sur l'ensemble de l'année.</p>
                            <a class="readmore" href="article6high-tech.php">read more</a></div>
                    </div>
                    <div class="single_left_coloum_wrapper single_cat_left">
                        <h2 class="title">High-Tech News</h2>
                        <a class="more" href="high-tech.php">more</a>
                        <div class="single_cat_left_content floatleft">
                            <a href="article1high-tech.php"><h3>Apple préparerait un iPhone Edition pour les 10 ans de
                                    son smartphone</h3></a>
                            <p>En complément du renouvellement des iPhone 7 et iPhone 7 Plus, Apple lancerait une
                                version anniversaire baptisée iPhone Edition.</p>
                            <p class="single_cat_left_content_meta">by <span>Mamadou</span> | 11 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">
                            <a href="article3high-tech.php"><h3>Quelles sont les versions d’Android les plus utilisées
                                    ?</h3></a>
                            <p>Tous les mois, Google publie de nouvelles statistiques qui rendent compte de la
                                répartition des différentes versions de son système d'exploitation d'Android.</p>
                            <p class="single_cat_left_content_meta">by <span>Youssef</span> | 20 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">
                            <a href="article5high-tech.php"><h3>Windows 10 Build 15060 : correctifs et bugs connus sur
                                    PC</h3></a>
                            <p>Microsoft propose encore une nouvelle version de test de Windows 10 dans sa nouvelle
                                version 1703 mais il ne s'agit pas encore de la version finalisée.</p>
                            <p class="single_cat_left_content_meta">by <span>John Doe</span> | 9 comments</p>
                        </div>
                    </div>
                </div>
                <div class="right_coloum floatright">
                    <div class="single_right_coloum">
                        <h2 class="title">Policy news</h2>
                        <ul>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Présidentielle : les candidats prédisent aux élus locaux réforme et rigueur</h3>
                                    <p>Les candidats à la présidentielle ont détaillé leur programme pour les
                                        collectivités territoriales (ci-dessus un conseil départemental)</p>
                                    <p class="single_cat_right_content_meta"><a href="article3politique.php"><span>read more</span></a>
                                        10 mars 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>A Munich, Angela Merkel affiche sa différence avec Donald Trump</h3>
                                    <p>Lors de la conférence sur la sécurité, la chancelière allemande a célébré le
                                        multilatéralisme et appelé à une coopération approfondie avec le monde
                                        musulman.</p>
                                    <p class="single_cat_right_content_meta"><a href="article4politique.php"><span>read more</span></a>
                                        09 mars 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Election présidentielle : François Hollande estime que la campagne électorale
                                        n’est pas à la hauteur</h3>
                                    <p>« La qualité est assez basse. Les Français ne s’y retrouvent pas pour l’instant
                                        », a déclaré le président de la République, qui assassine au passage le
                                        processus des primaires.</p>
                                    <p class="single_cat_right_content_meta"><a href="article2politique.php"><span>read more</span></a>
                                        11 mars 2017</p>
                                </div>
                            </li>
                        </ul>
                        <a class="popular_more" href="politique.php">more</a></div>
                    <div class="single_right_coloum">
                        <h2 class="title">Sport news</h2>
                        <div class="single_cat_right_content editorial"><a href="article5sport.php"><img
                                        src="../images/a0s.png" alt=""/></a>
                            <a href="article5sport.php"><h3>MONDIAL 2018 : LES BAGARRES DE HOOLIGANS LÉGALISÉES ET
                                    ENCADRÉES ?</h3></a>
                        </div>
                        <div class="single_cat_right_content editorial"><a href="article2sport.php"><img
                                        src="../images/a2s.png" alt=""/></a>
                            <a href="article2sport.php"><h3>NASSER AL-KHELAÏFI, TROISIÈME PERSONNE LA PLUS PUISSANTE DU
                                    QATAR</h3></a>
                        </div>
                        <div class="single_cat_right_content editorial"><a href="article3sport.php"><img
                                        src="../images/a3s.png" alt=""/></a>
                            <a href="article3sport.php"><h3>Ligue des champions : une « remontada » du FC Barcelone face
                                    au PSG est-elle possible ?</h3></a>
                        </div>
                        <div class="single_cat_right_content editorial"><a href="article4sport.php"><img
                                        src="../images/a4s.png" alt=""/></a>
                            <a href="article4sport.php"><h3>CRISTIANO RONALDO 9 FOIS PLUS RENTABLE QUE MESSI POUR SES
                                    SPONSORS</h3></a>
                        </div>
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
<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
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