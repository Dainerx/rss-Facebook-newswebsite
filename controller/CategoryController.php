<?php
require_once ("../include/config.php");
require_once ("../model/Category.php");

/**
 * Created by PhpStorm.
 * User: dainer
 * Date: 29/04/17
 * Time: 03:19 م
 */
class CategoryController
{
    public $conn;

    function __construct()
    {
        $c = new config();
        $this->conn = $c->getConnection();
    }

    function AjoutCategory($conn, $cat)
    {
        $req = $conn->prepare('INSERT INTO category (nom) VALUES (:nom)');
        $req->execute(array('nom' => $cat->getName()));
    }

    function updateCategory($conn, $cat)
    {
        $req = $conn->prepare('UPDATE category SET nom=:nom where id=:id');
        $req->execute(array('nom' => $cat->getName(), 'id' => $cat->getId()));
    }

    function getAll($conn)
    {
        $req = $conn->prepare('SELECT * FROM category');
        $req->execute();
        return $req->fetchAll();
    }

    function deleteAction($conn, $id)
    {
        $req=$conn->prepare('delete from category where id=:ID') ;
        $req->execute(array('ID' => $id ));
    }

}

if (isset($_GET['id'])&& $_GET['id']==1) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    $cat = new Category($name);
    $controller = new CategoryController();
    $controller->AjoutCategory($controller->conn,$cat);
    header('Location: ../viewAdmin/redaction.php');
}


if (isset($_GET['id'])&& $_GET['id']==2) {
    if (isset($_GET['id_category'])) {
        $id_category = $_GET['id_category'];
    }

    $controller = new CategoryController();
    $controller->deleteAction($controller->conn,$id_category);
    header('Location: ../viewAdmin/redaction.php');
}


if (isset($_GET['id'])&& $_GET['id']==3) {
    if (isset($_POST['idCat'])) {
        $id = $_POST['idCat'];
    }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    $cat = new Category($name);
    $cat->setId($id);
    $controller = new CategoryController();
    $controller->updateCategory($controller->conn,$cat);
    header('Location: ../viewAdmin/redaction.php');
}