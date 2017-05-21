<?php
require_once('../controller/CategoryController.php');
$controllerCat = new CategoryController();
$listCat = $controllerCat->getAll($controllerCat->conn);

?>
<?php include('../include/sidemenu.php'); ?>
</div>
<!-- /col-3 -->
<div class="col-sm-9">

    <!-- column 2 -->
    <a href="#"><strong><i class="fa fa-wrench" aria-hidden="true"></i> Gérer les categories</strong></a>
    <hr>

    <div class="row">

        <!--/col-->
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-striped">
                    <a href="#" data-toggle="modal" data-target="#addModalCat"><i class="fa fa-plus-circle"
                                                                                  aria-hidden="true"></i> Ajouter une
                        catégorie</a>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Libelle Catégorie</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach ($listCat as $l) { ?>
                        <tr>
                            <td><?php echo $l['id']; ?></td>
                            <td><?php echo $l['nom']; ?></td>
                            <input id="idCat" hidden value="<?php echo $l['id']; ?>">
                            <input id="labelCat" hidden value="<?php echo $l['nom']; ?>">
                            <td>
                                <a href="#" data-toggle="modal" data-target="#editModalCat<?php echo $i; ?>"
                                   class="open-editCat"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a onclick="return testDelete();"
                                   href="<?php echo "../controller/CategoryController.php?id=2&id_category=" . $l['id']; ?>"><i
                                        class="fa fa-trash" aria-hidden="true"></i> </a></td>
                        </tr>
                        <!-- Modal Edit Cat -->
                        <div id="editModalCat<?php echo $i; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modifier une catégorie</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="../controller/CategoryController.php?id=3">
                                            <input id="idCat" name="idCat" value="<?php echo $l['id']; ?>" hidden>
                                            <div class="form-group">
                                                <label for="nameCategory">Category name</label>
                                                <input type="text" name="name" class="form-control" id="nameCategory"
                                                       value="<?php echo $l['nom']; ?>">
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


<!-- Modal Add Cat -->
<div id="addModalCat" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajout de catégorie</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="../controller/CategoryController.php?id=1">
                    <div class="form-group">
                        <label for="nameCategory">Category name</label>
                        <input type="text" name="name" class="form-control" id="nameCategory">
                    </div>
                    <button type="submit" class="btn btn-default">Ajouter</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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