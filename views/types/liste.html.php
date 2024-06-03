<div class="container mb-5">
             <div class="card mt-5 w-75 m-auto">
                <div class="card-header">
                Liste des article
                </div>
                <div class="card-body">
                    
                <form class="d-flex" method="POST" action="<?=WEBROOT?>">
                        <div class="col">
                        <div class="mb-3">
                            <label for="" class="form-Label">Nom Type</label>
                            <input type="text" name="nomType"  id="" class="form-control" placeholder="" aria-describedby="emailHelp"/>
                        </div>
                        </div>
                           <div class="col" style="margin-top:25px; margin-left:10px">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark">
                                      Enregistrer
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="controller" value="type">
                            <input type="hidden" name="action" value="add-type">
                    </form>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-light table-bordered"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nom Type</th>
   
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($types as $type): ?>
                                        <tr class="">
                                            <td><?php echo $type["id"]; ?></td>
                                            <td><?php echo $type["nomType"]; ?></td>
                                            
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                    
                </div>
             </div>
             
            </div>