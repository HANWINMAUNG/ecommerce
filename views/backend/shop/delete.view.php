
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
   
       <h3>Delete</h3>
<div class="text-right">
       <a href="/admin/shop" class="btn btn-dark round mb-5">Back</a>
</div>


<div class="card">
                    <div class="card-content text-center">
                        <div class="card-body">
                        <form method="POST" action="/admin/shop/destroy">
                        <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="id" value="<?=$shop['id']?>">
                            <h4 class="card-title mb-0 text-danger">Delete</h4>
                    
                       <p class="card-text">Are you sure to delete<span class="text-primary"><?=$shop['name']?></span>?</p>
                        
                            <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
                            <a href="/admin/shop" class="btn btn-secondary btn-sm">Cancel</a>
                      </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        <?php include (base_path("views/backend/layouts/footer.view.php")); ?>  

           

         