<?php
require_once './vue/vueGenerale.php';
htmlTop("Utilisateurs");
?>



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Liste des utilisateurs</h4>
                                <p class="category">Contient la liste des utilisateurs</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>User</th>
                                    	<th>Nom</th>
                                    	<th>Prénom</th>
                                    	<th>Actions</th>
                                    </thead>
                                    <tbody>
                                        

                                       
                                        <tr>
                                            
                                            <?php foreach ($result as $users) { ?>

                                            <tr>
                                                <td><?php echo $users['ID']; ?></td>
                                                <td><?php echo $users['USER']; ?></td>
                                                <td><?php echo $users['NOM']; ?></td>
                                                <td><?php echo $users['PRENOM']; ?></td>
                                                
                                                <td><div class="btn-group">
                                                    <a class="btn btn-primary" id="boutonadd" href="addUsers.php"><i class="glyphicon glyphicon-plus"></i></a>
                                                   <a class="btn btn-success" id="boutonupdate" href=<?php echo 'modifyusers.php?id=' . $users['ID']; ?>><i class="glyphicon glyphicon-pencil"></i></a> 
                                                   <a class="btn btn-danger" id="boutonremove" href="<?php echo 'deleteUsers.php?id=' . $users['ID']; ?>"><i class="glyphicon glyphicon-trash"></i></a>

                                                    </div></td>

                                                                                           
                                              <?php } ?>
                                  
                                        </tr>
                                     
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php htmlBot() ?>
