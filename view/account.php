<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Actulyoum</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="canonical" href="article3high-tech.php">
    <link rel="stylesheet" type="text/css" href="../assets/font/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/font/font.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.bxslider.css" media="screen"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="body_wrapper">
    <div class="center">
        <?php include('../include/top.php');
        require_once('../controller/ArticleController.php');
        require_once('../controller/UserController.php');
        $userController = new UserController();
        $articleController = new ArticleController();
        $articles = $articleController->getAllUser($articleController->conn, $_SESSION['id']);
        $userArticle = $userController->nombreArticles($userController->conn, $_SESSION['id']);
        ?>
        <div class="content_area">
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">Espace personnel</h2>
                        <a href="#" data-toggle="modal" data-target="#changePassword">MModifier mot de passe</a>
                    </div>
                    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == 1) { ?>
                    <div class="single_left_coloum_wrapper">
                        <a href="../viewAdmin/index.php"<h2 class="title">Espace Admin</h2></a>
                    </div>
                    <?php } ?>

                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">Articles (<?php echo $userArticle; ?>)</h2>
                    </div>
                    <?php if (isset($_SESSION['statut']) && $_SESSION['statut'] == "off") { ?>
                        <h2>Vous ne pouvez pas publier des articles tant que l'adminstration n'a pas autorisé votre
                            rédaction.
                            <a href="#" data-toggle="modal" data-target="#contactAdmin">Veuillez contacter
                                l'adminstration pour plus d'informations.</a></h2>
                    <?php } else {
                        ?>
                        <style>
                            table {
                                border-collapse: collapse;
                                width: 100%;
                            }

                            th, td {
                                text-align: left;
                                padding: 8px;
                            }

                            tr:nth-child(even) {
                                background-color: #f2f2f2
                            }

                            th {
                                background-color: #CF0000;
                                color: white;
                            }
                        </style>
                        <table>
                            <tr>
                                <th>Catégorie</th>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Date</th>
                                <th>Lien</th>
                            </tr>
                            <?php foreach ($articles as $a) { ?>
                                <tr>
                                    <td><?php echo $a['nom']; ?></td>
                                    <td><?php echo $a['titre']; ?></td>
                                    <td><?php echo $a['contenu']; ?></td>
                                    <td><?php echo $a['date_de_creation']; ?></td>
                                    <td><a href="universalpage.php?id_article=<?php echo $a['id_article']; ?>">Lien vers l'article</a></td>
                                </tr>
                            <?php } ?>
                        </table>
                    <?php } ?>
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


<div class="modal" id="changePassword">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Changer mot de passe</h4>
            </div>
            <div class="modal-body">
                <form method="POST"
                      action="../controller/UserController.php?id=50&id_user=<?php echo $_SESSION['id']; ?>" onsubmit="return passwordCorrect();">
                    <div class="form-group">
                        <div id="password-correct">
                        </div>
                        <label for="password1">Ancien mot de passe</label>
                        <input type="text" id="password1" name="password1" class="form-control" onblur="checkUser()">
                        <label for="password2">Nouveau mot de passe</label>
                        <input type="text" id="password2" name="password2" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Changer mot de passe</button>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>


<div class="modal" id="contactAdmin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Contacter adminstration</h4>
            </div>
            <div class="modal-body">
                <form method="POST"
                      action="../controller/UserController.php?id=51&id_user=<?php echo $_SESSION['id']; ?>">
                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet" class="form-control">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Envoyer Message</button>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>

<script>
    function checkUser() {
            $.ajax({
                type: 'POST',
                url: '../controller/UserController.php?id=100',
                data:'password='+$("#password1").val(),
                success: function (data) {
                    $('#password-correct').html(data);
                },
                error:function (){}
            });
     }
     function passwordCorrect(){
        if ($("#test").val()==0)
            return false;
        else
            return true;
     }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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