
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
<h3>Edit Shop Slider</h3>
<div class="text-right">
       <a href="/shop_slider" class="btn btn-dark round mb-5">Back</a>
</div>



<div class="col-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title mb-0 text-danger">Edit</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
            <?php if(isset($errors)) :?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach($errors as $error) : ?>
                                <li><?= $error?></li>
                                <?php endforeach ;?>
                            </ul>
                            </div>
                    <?php endif ; ?>

              
                    
                     <form class="form form-vertical"   method="POST" action="/shop_slider" enctype="multipart/form-data">
                     <input type="hidden" name="_method" value="PATCH">
                     <input type="hidden" name="id" value="<?=$shop['id']?>">
                <div class="form-body">
                    <div class="row">
                    
                   
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Shop_name</label>
                            <div class="position-relative">
                            
                            <select name="shop_id" class="form-select " id="basicSelect" value="<?= $shop_slider['shop_id']?>">
                                               <?php foreach($shops as $shop): ?>
                                               <option value="<?=$shop['id']?>"><?= $shop['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                            
                        </div>
                       
                        
                    </div>
                    </div>
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">image</label>
                            <div class="position-relative">
                                <input type="file" name="image[]" class="form-control" placeholder="Input with icon left" id="first-name-icon" multiple>
                                <?=$shop_slider['image']?>
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
                            
                     <p class="text-danger mt-2 mb-2">*Please must be select you profile!</p>
                     <div class="col-12 d-flex justify-content-center mt-2 ">
                        <button type="submit" class="btn btn-primary btn-sm mr-2">Confirm</button>
                        <a href="/shop" class="btn btn-secondary btn-sm">Cancel</a>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    

    <?php include (base_path("views/backend/layouts/footer_info.php")); ?>         


           