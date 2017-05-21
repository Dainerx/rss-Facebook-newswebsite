<?php
require_once ("include/config.php");
$c = new config();
$conn = $c->getConnection();
$req = $conn->prepare('SELECT * from user');
$req->execute();
$list=$req->fetchAll();
?>
<table border="2px">
<thead>
<tr>
<td>username</td>
<td>email</td>
<td>action</td>
</tr>
</thead>
<tbody>
<?php foreach ($list as $users) {?>
<tr>
<td><?php echo $users['username']; ?></td>
<td><?php echo $users['email']; ?></td>
<td><a href="controller/UserController.php?id=2&id_user=<?php echo $users['id']?>">Supprimer</a></td>
</tr>
</tbody>
<?php } ?>
</table>