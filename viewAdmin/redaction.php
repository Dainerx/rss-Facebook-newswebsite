<?php
require_once('../controller/CategoryController.php');
require_once('../controller/ArticleController.php');
$controllerCat = new CategoryController();
$listCat = $controllerCat->getAll($controllerCat->conn);
$controllerArt = new ArticleController();
$listArt = $controllerArt->getAll($controllerArt->conn);

?>
<?php include('../include/sidemenu.php'); ?>
</div>
<!-- /col-3 -->
<div class="col-sm-9">

    <!-- column 2 -->
    <a href="#"><strong><i class="fa fa-wrench" aria-hidden="true"></i> Gérer les articles</strong></a>
    <hr>

    <div class="row">
        <!--/col-->
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <a href="#" data-toggle="modal" data-target="#addArt"><i class="fa fa-plus-circle"
                                                                             aria-hidden="true"></i> Ajouter un
                        article</a>
                    <tr>
                        <th>Catégorie</th>
                        <th>Utilisateur</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach ($listArt as $l) { ?>
                        <tr>
                            <td><?php echo $l['nom']; ?></td>
                            <td><?php echo $l['username']; ?></td>
                            <td><?php echo $l['titre']; ?></td>
                            <td><?php echo $l['contenu']; ?></td>
                            <td><?php echo $l['date_de_creation']; ?></td>

                            <td><a href="#" data-toggle="modal" data-target="#editModalArt<?php echo $i; ?>"
                                   class="open-editCat"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a onclick="return testDelete();"
                                   href="<?php echo "../controller/ArticleController.php?id=2&id_article=" . $l['id_article']; ?>"><i
                                            class="fa fa-trash" aria-hidden="true"></i> </a></td>
                        </tr>
                        <!-- Modal Edit Article -->
                        <div id="editModalArt<?php echo $i; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modifier un article</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="../controller/ArticleController.php?id=3">
                                            <input id="idProduct" name="idProduct"
                                                   value="<?php echo $l['id_article']; ?>"
                                                   hidden>
                                            <div class="form-group">
                                                <label for="nameCategory">Category name</label>
                                                <select name="category" class="form-control" id="nameCategory">
                                                    <option value="<?php echo $l['id_category']; ?>"><?php echo $l['nom']; ?></option>
                                                    <?php foreach ($listCat as $lCat) { ?>
                                                        <option value="<?php echo $lCat['id']; ?>"><?php echo $lCat['nom']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="titre">Titre article</label>
                                                <input type="text" name="titre" class="form-control" id="titre"
                                                       value="<?php echo $l['titre']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Contenu de publication</label>
                                                <textarea type="text" name="content" class="form-control" id="content"
                                                          value="<?php echo $l['contenu']; ?>">
                                                    <?php echo $l['contenu']; ?>
                                                </textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default">Confirmer cette modification
                                            </button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                        $i++;
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/col-span-6-->


    </div>
    <!--/row-->
</div>
<!--/col-span-9-->
</div>
</div>
<!-- /Main -->

<footer class="text-center">Copyright © 2017 ACTULYOUM Inc. All Rights Reserved</footer>

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
<!-- script references -->


<div id="addArt" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modifier un article</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="../controller/ArticleController.php?id=1" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nameCategory">Category name</label>
                        <select name="cat" class="form-control" id="nameCategory">
                            <option value="<?php echo $l['id_category']; ?>"><?php echo $l['nom']; ?></option>
                            <?php foreach ($listCat as $lCat) { ?>
                                <option value="<?php echo $lCat['id']; ?>"><?php echo $lCat['nom']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titre">Titre article</label>
                        <input type="text" name="titre" class="form-control" id="titre"
                               value=""/>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu de l'article</label>
                        <textarea type="text" name="contenu" class="form-control"
                                  id="content">                         </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required/>
                    </div>
                    <button type="submit" class="btn btn-default">Ajouter ce Article
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        $(".form-control option").each(function () {
            $(this).siblings("[value='" + this.value + "']").remove();
        });
    });

    function testDelete() {
        var test = confirm("Vous voulez supprimer cet élément de la base de donnée");
        if (test)
            return true;
        else
            return false;
    }
</script>
<script src="js/scripts.js"></script>
</body>
</html>