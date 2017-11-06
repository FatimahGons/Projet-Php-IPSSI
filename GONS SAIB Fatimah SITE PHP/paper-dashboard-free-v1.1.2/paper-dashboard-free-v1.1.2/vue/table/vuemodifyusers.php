<?php
require_once './vue/vueGenerale.php';
htmlTop("Modifier un utilisateur");
?>

<?php echo $resultat; ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Modifier un utilisateur</h4>
                        <p class="category">Veuillez remplir ces champs afin de modifier un utilisateur</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <div class="form">
                            <form class="form-validate form-horizontal " id="register_form" method="POST" action="" class="required">

                                <?php foreach ($result as $getUsers) { ?>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" >User <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" name="user" type="text" value="<?php echo $getUsers['USER']; ?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="heurerdv">Nom <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" name="nom" type="text" value="<?php echo $getUsers['NOM']; ?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="prix">Prénom <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" name="prenom" type="text" value="<?php echo $getUsers['PRENOM']; ?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input class="btn btn-fill" id="boutoninsc" type="submit" value="Envoyer" name="envoyer">
                                        </div>                      
                                    </div> 
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php htmlBot(); ?>