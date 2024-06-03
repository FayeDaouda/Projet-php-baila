<div class="container mb-5">
             <div class="card mt-5 w-75 m-auto">
                <div class="card-header">
                Nouvel article
                </div>
                <div class="card-body">
                    
                <form method="POST" action="<?=WEBROOT?>">
                        <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">libelle</label>
                        <input type="text" class="form-control"id="exampleInputEmail1" aria-describedby="emailHelp"/>
                        </div>
                        <div class="mb-2">
                        <label for="qteStock" class="form-label">qteStock</label>
                        <input type="number" class="form-control"id="qteStock" aria-describedby="emailHelp"/>
                        </div>
                        <div class="mb-2">
                        <label for="Prix" class="form-label">Prix</label>
                        <input type="number" class="form-control"id="Prix" aria-describedby="emailHelp"/>
                        </div>
                        <div class="mb-2">
                            <label for="QteStock" class="form-label">Categorie</label>
                            <select name="categorieId" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                <option selected>...</option>
                                <?php foreach ($categories as $categorie): ?>
                                    <option value="<?php echo $categorie["id"]; ?>"><?php echo $categorie["nomCategorie"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="QteStock" class="form-label">Type</label>
                            <select name="typeId" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                <option selected>...</option>
                                <?php foreach ($types as $type): ?>
                                    <option value="<?php echo $type["id"]; ?>"><?php echo $type["nomType"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                             <input type="hidden" name="controller" value="article">
                            <input type="hidden" name="action" value="add-article">        
                            <button type="submit" class="btn btn-primary">Enregistrer</button>

                    
                </form>
                           
                 </div>     
             </div>    
</div> 