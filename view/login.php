<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actulyoum</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="canonical" href="article3high-tech.php">
<link rel="stylesheet" type="text/css" href="../assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
      <?php include ('../include/top.php') ?>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">Connexion au compte</h2>
          </div>
<div class="news-letter">
<form action="../controller/UserController.php?id=3" method="POST">

<div class="form-group">
<?php if (isset($_GET['action'])&& $_GET['action']=="failed") {?>
<label style="color: red">Mauvaise combinaison, veuillez réssayer</label><br>
<label for="">Pseudo</label>
<?php }
else { ?>
<label for="">Pseudo</label>
<?php } ?>

<input type="text" name="username" class="form-control" required />
</div>

<div class="form-group">
<label for="">Mot de passe</label>
<input type="password" name="password" class="form-control" required />
</div>

<input type="submit" value="Se connecter" id="form-submit" />


</form>
</div>
</div>
</div>


		<div class="sidebar floatright">
        <div class="single_sidebar"> <img src="../images/add1.png" alt="" /> </div>
        <div class="single_sidebar">
          <div class="news-letter">
            <h2>Sign Up for Newsletter</h2>
            <p>Sign up to receive our free newsletters!</p>
            <form action="#" method="post">
              <input type="text" value="Name" id="name" />
              <input type="text" value="Email Address" id="email" />
              <input type="submit" value="SUBMIT" id="form-submit" />
            </form>
            <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
          </div>
        </div>
		</div>
        <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="../images/add3.png" alt="" /> </div>
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