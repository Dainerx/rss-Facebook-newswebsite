<?php
require_once("../include/config.php");
require_once("../model/Article.php");

/**
 * Created by PhpStorm.
 * User: dainer
 * Date: 28/04/17
 * Time: 02:17 م
 */
class ArticleController
{
    public $conn;

    function __construct()
    {
        $c = new config();
        $this->conn = $c->getConnection();
    }

    function AjoutArticle($conn, $article)
    {
        $req = $conn->prepare('INSERT INTO article (id_category,id_user,titre,contenu,date_de_creation,image) VALUES 
        (:id_category,:id_user,:titre,:contenu,:date_de_creation,:image) ');
        $req->execute(array('id_category' => $article->getIdCat(), 'id_user' => $article->getIdUser(), 'titre' => $article->getTitre(),
            'contenu' => $article->getContenu(), 'date_de_creation' => $article->getDate(), 'image' => $article->getImage()));
    }

    function getAll($conn)
    {
        $req = $conn->prepare('SELECT c.nom, a.*, u.username FROM category c inner join article a on c.id=a.id_category inner join user u ON 
                              u.id=a.id_user');
        $req->execute();
        return $req->fetchAll();
    }

    function getOne($conn,$id)
    {
        $req = $conn->prepare('SELECT c.nom, a.*, u.username FROM category c inner join article a on c.id=a.id_category inner join user u ON 
                              u.id=a.id_user where a.id_article=:id');
        $req->execute(array('id'=>$id));
        return $req->fetchAll();
    }

    function getCategoryArticles($conn, $id_cat)
    {
        $req = $conn->prepare('SELECT c.nom, a.*, u.username FROM category c inner join article a on c.id=a.id_category inner join user u ON 
                              u.id=a.id_user where c.id=:id_cat');
        $req->execute(array('id_cat' => $id_cat));
        return $req->fetchAll();
    }

    function getAllUser($conn, $id)
    {
        $req = $conn->prepare('SELECT c.nom, a.*, u.username FROM category c inner join article a on c.id=a.id_category inner join user u ON 
                              u.id=a.id_user where u.id=:id_arg');
        $req->execute(array('id_arg' => $id));
        return $req->fetchAll();
    }

    function updateArticle($conn, $cat, $title, $content, $id_article)
    {
        $req = $conn->prepare('UPDATE article SET id_category=:id_category, titre=:titre, contenu=:contenu where id_article=:id_article');
        $req->execute(array('id_category' => $cat, 'titre' => $title, 'contenu' => $content, 'id_article' => $id_article));
    }

    function SupprimerArticle($conn, $id)
    {
        $req = $conn->prepare('DELETE from article where id_article=:id');
        $req->execute(array('id' => $id));
    }

}

if (isset($_GET['id']) && $_GET['id'] == 1) {
    session_start();
    $user = $_SESSION['id'];

    if (isset($_POST['cat'])) {
        $cat = $_POST['cat'];
    }

    if (isset($_POST['titre'])) {
        $titre = $_POST['titre'];
    }

    if (isset($_POST['contenu'])) {
        $contenu = $_POST['contenu'];
    }

    $date = date("Y-m-d H:i:s");
    $uploaddir = '../images/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    echo $uploadfile;

    $article = new Article($cat, $user, $titre, $contenu, $date, $uploadfile);
    $crud = new ArticleController();
    $crud->AjoutArticle($crud->conn, $article);

    header('Location: ../view/index.php?action=upload');
}

if (isset($_GET['id']) && $_GET['id'] == 2) {
    if (isset($_GET['id_article'])) {
        $id = $_GET['id_article'];
    }

    $crud = new ArticleController();
    $crud->SupprimerArticle($crud->conn, $id);
    header('Location: ../viewAdmin/redaction.php');
}

if (isset($_GET['id']) && $_GET['id'] == 3) {

    if (isset($_POST['category'])) {
        $category = $_POST['category'];
    }

    if (isset($_POST['titre'])) {
        $titre = $_POST['titre'];
    }

    if (isset($_POST['content'])) {
        $contenu = $_POST['content'];
    }

    if (isset($_POST['idProduct'])) {
        $idProduct = $_POST['idProduct'];
    }

    $crud = new ArticleController();
    $crud->updateArticle($crud->conn, $category, $titre, $contenu, $idProduct);
    header('Location: ../viewAdmin/redaction.php');

}

if (isset($_GET['id'])&& $_GET['id']==200) {
}
?>
