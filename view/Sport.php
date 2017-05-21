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
        $articles = $articleController->getCategoryArticles($articleController->conn, 3);
        ?>
        <div class="content_area">
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">Sport News</h2>
                        <div class="single_left_coloum floatleft"><img src="../images/a1s.png" alt=""/>
                            <h3>Salah Mejri, la vedette du match entre les Mavericks et les 76ers</h3>
                            <p>BASKET- Le basketteur tunisien Salah Mejri, pivot de l'équipe Mavericks de Dallas a fait
                                parler de lui après la rencontre face à 76ers de Philadelphie disputée hier, 1er
                                février.</p>
                            <a class="readmore" href="article1sport.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a2s.png" alt=""/>
                            <h3>NASSER AL-KHELAÏFI, TROISIÈME PERSONNE LA PLUS PUISSANTE DU QATAR</h3>
                            <p>Président du Paris Saint-Germain depuis 2011, Nasser Al-Khelaïfi fait partie des hommes
                                d’affaires les plus influents du Moyen-Orient.</p>
                            <a class="readmore" href="article2sport.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a3s.png" alt=""/>
                            <h3>MONDIAL 2018 : LES BAGARRES DE HOOLIGANS LÉGALISÉES ET ENCADRÉES ?</h3>
                            <p>Un député russe a émis la drôle d’idée de faire du hooliganisme un sport presque comme
                                les autres auquel des spectateurs pourraient assister.</p>
                            <a class="readmore" href="article3sport.php">read more</a></div>
                    </div>
                    <div class="single_left_coloum_wrapper">
                        <div class="single_left_coloum floatleft"><img src="../images/a4s.png" alt=""/>
                            <h3>CRISTIANO RONALDO 9 FOIS PLUS RENTABLE QUE MESSI POUR SES SPONSORS</h3>
                            <p>La magazine Forbes a comparé le retour sur investissement qu’effectuent les marques en
                                misant sur CR7 et Lionel Messi sur les réseaux sociaux.</p>
                            <a class="readmore" href="article4sport.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a5s.png" alt=""/>
                            <h3>Ligue des champions : une « remontada » du FC Barcelone face au PSG est-elle possible
                                ?</h3>
                            <p>Le FC Barcelone est convaincu de pouvoir refaire son handicap mercredi lors du match
                                retour, après sa lourde défaite face au PSG au match aller (4-0).</p>
                            <a class="readmore" href="article5sport.php">read more</a></div>
                        <div class="single_left_coloum floatleft"><img src="../images/a6s.png" alt=""/>
                            <h3>Un mois d'avril de folie pour le Real !</h3>
                            <p>C'est un mois d'avril particulièrement chargé que s'apprête à vivre le Real Madrid avec
                                pas moins de neuf matches au programme, dont un derby face à l'Atletico, un Clasico face
                                au Barça et une double confrontation face au Bayern en Ligue des champions. </p>
                            <a class="readmore" href="article6sport.php">read more</a></div>
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
                        <a href="http://localhost/pfe2017/index.php" class="popular_more">more</a></div>
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