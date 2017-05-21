<?php
require_once("../include/config.php");
require_once("../model/user.php");

class UserController
{
    public $conn;

    function __construct()
    {
        $c = new config();
        $this->conn = $c->getConnection();
    }

    function AjoutUser($conn, $user)
    {
        $req = $conn->prepare('INSERT INTO user (username,password,email) VALUES (:username, :password, :email)');
        $req->execute(array('username' => $user->getUsername(), 'password' => $user->getPassword(), 'email' => $user->getEmail()));
    }

    function getAll($conn)
    {
        $req = $conn->prepare('SELECT * FROM user');
        $req->execute();
        return $req->fetchAll();
    }

    function SupprimerUser($conn, $id)
    {
        $req = $conn->prepare('DELETE from user where id=:id');
        $req->execute(array('id' => $id));
    }

    function TurnOn($conn, $id)
    {
        $req = $conn->prepare('UPDATE user SET statut=:statut where id=:id');
        $req->execute(array('statut' => 'on', 'id' => $id));
    }

    function TurnOff($conn, $id)
    {
        $req = $conn->prepare('UPDATE user SET statut=:statut where id=:id');
        $req->execute(array('statut' => 'off', 'id' => $id));
    }

    function nombreArticles($conn, $id)
    {
        $req = $conn->prepare('SELECT COUNT(*) as total from article where id_user=:id');
        $req->execute(array('id' => $id));
        return $req->fetchColumn();
    }

    function changePassword($conn, $password, $id)
    {
        $req = $conn->prepare('UPDATE user set password=:password where id=:id');
        $req->execute(array('password' => $password, 'id' => $id));
    }

    function sendMessage($conn, $sujet, $message, $id_user)
    {
        $req = $conn->prepare('INSERT INTO messages (sujet,contenu,id_user) VALUES (:sujet,:contenu,:id_user)');
        $req->execute(array('sujet' => $sujet, 'contenu' => $message, 'id_user' => $id_user));
    }

    function getMessages($conn)
    {
        $req = $conn->prepare('SELECT * from messages');
        $req->execute();
        return $req->fetchAll();
    }

    function deleteMessage($conn, $id)
    {
        $req = $conn->prepare('DELETE from messages where id=:id');
        $req->execute(array('id' => $id));
    }

    function checkPassword($conn, $id,$password)
    {
        $req = $conn->prepare('SELECT COUNT(*) as total from user where id=:id and password=:password');
        $req->execute(array('id' => $id,'password'=>$password));
        return $req->fetchColumn();
    }
}

if (isset($_GET['id']) && $_GET['id'] == 1) {
    if (isset($_POST['username']))
        $username = $_POST['username'];

    if (isset($_POST['password']))
        $password = $_POST['password'];

    if (isset($_POST['email']))
        $email = $_POST['email'];

    $user = new User($username, $password, $email);
    $userController = new UserController();
    $userController->AjoutUser($userController->conn, $user);
    header('Location: ../view/index.php?action=signup');

}

if (isset($_GET['id']) && $_GET['id'] == 2) {

    if (isset($_GET['id_user']))
        $id_user = $_GET['id_user'];

    $userController = new UserController();
    $userController->SupprimerUser($userController->conn, $id_user);
    header('Location: ../viewAdmin/users.php');
}

if (isset($_GET['id']) && $_GET['id'] == 3) {

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }

    $crud = new UserController();
    $list = $crud->getAll($crud->conn);

    foreach ($list as $l) {
        if ($l['username'] == $username && $l['password'] == $password) {
            $test = true;
            $id = $l['id'];
            $name = $l['username'];
            $password = $l['password'];
            $statut = $l['statut'];
            break;
        }
    }

    if ($test == true) {
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['user'] = $name;
        $_SESSION['password'] = $password;
        $_SESSION['statut'] = $statut;
        if ($id == 1)
            header('Location: ../viewAdmin/index.php');
        else
            header('Location: ../view/index.php');
    } else {
        header('Location: ../view/login.php?action=failed');
    }


}

if (isset($_GET['id']) && $_GET['id'] == 4) {
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['user']);
    header('Location: ../view/index.php');
}

if (isset($_GET['id']) && $_GET['id'] == 30) {
    if (isset($_GET['id_user'])) {
        $id = $_GET['id_user'];
    }
    $userController = new UserController();
    $userController->TurnOn($userController->conn, $id);
    header('Location: ../viewAdmin/users.php');
}

if (isset($_GET['id']) && $_GET['id'] == 31) {
    if (isset($_GET['id_user'])) {
        $id = $_GET['id_user'];
    }
    $userController = new UserController();
    $userController->TurnOff($userController->conn, $id);
    header('Location: ../viewAdmin/users.php');
}

if (isset($_GET['id']) && $_GET['id'] == 50) {

    if (isset($_GET['id_user'])) {
        $id = $_GET['id_user'];
    }
    if (isset($_POST['password2'])) {
        $password = $_POST['password2'];
    }

    $userController = new UserController();
    $userController->changePassword($userController->conn, $password, $id);
    header('Location: ../view/account.php');
}

if (isset($_GET['id']) && $_GET['id'] == 51) {

    if (isset($_GET['id_user'])) {
        $id = $_GET['id_user'];
    }
    if (isset($_POST['sujet'])) {
        $sujet = $_POST['sujet'];
    }
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }

    $userController = new UserController();
    $userController->sendMessage($userController->conn, $sujet, $message, $id);
    header('Location: ../view/account.php');
}

if (isset($_GET['id']) && $_GET['id'] == 52) {

    if (isset($_GET['id_message'])) {
        $id = $_GET['id_message'];
    }

    $userController = new UserController();
    $userController->deleteMessage($userController->conn, $id);
    header('Location: ../view/account.php');

}

if (isset($_GET['id']) && $_GET['id'] == 100) {

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    session_start();
    $id = $_SESSION['id'];
    $userController = new UserController();
    $count = $userController->checkPassword($userController->conn, $id,$password);
    if ($count==0)
    {
        echo '<label style="color: red">Ancien mot de passe non correct</label>';
        echo '<input type="hidden" id="test" value="0"/>';

    }
    else {
        echo '<label style="color: green">Ancien mot de passe correct</label>';
        echo '<input type="hidden" id="test" value="1"/>';
    }

}

