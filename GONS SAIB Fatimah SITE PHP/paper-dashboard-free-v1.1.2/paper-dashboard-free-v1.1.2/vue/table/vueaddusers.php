<?php
require_once './vue/vueGenerale.php';
htmlTop("Ajouter un utilisateur");
?>

<?php echo $resultat; ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Ajouter un utilisateur</h4>
                        <p class="category">Veuillez remplir ces champs afin d'ajouter un nouvel utilisateur</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <div class="form">
                            <form class="form-validate form-horizontal " id="register_form" method="POST" action="" class="required">
                               
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">User <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" name="user" type="text" required/>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Mot de passe <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" name="mdp" type="text" required/>
                                    </div>
                                </div>
                              
                                <div class="form-group ">
                                    <label for="password" class="control-label col-lg-2">Nom <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="nom" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email" class="control-label col-lg-2">Prénom <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="prenom" type="text" required/>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="btn btn-fill" id="boutoninsc" type="submit" value="Confirmer" name="envoyer">    
                                        <input class="btn btn-default" type="submit" value="Annuler" name="annuler">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php htmlBot(); ?>