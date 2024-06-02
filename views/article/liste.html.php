<div class="container mb-5">
             <div class="card mt-5 w-75 m-auto">
                <div class="card-header">
                Liste des article
                </div>
                <div class="card-body">
                            <div class="d-flex justify-content-end mb-2" >
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-outline-dark btn-sm "
                                    href="<?=WEBROOT ?>/?action=form-article" 
                                    role="button"
                                    >Nouveau</a
                                >
                                
                            </div>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-light table-bordered"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">libelle</th>
                                            <th scope="col">qt stock</th>
                                            <th scope="col">prix</th>
                                            <th scope="col">Categorie</th>
                                            <th scope="col">Type</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($articles as $article): ?>
                                        <tr class="">
                                            <td><?php echo $article["libelle"]; ?></td>
                                            <td><?php echo $article["qteStock"]; ?></td>
                                            <td><?php echo $article["prixAppro"]; ?></td>
                                            <td><?php echo $article["nomCategorie"]; ?></td>
                                            <td><?php echo $article["nomType"]; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                    
                </div>
             </div>
             
            </div>