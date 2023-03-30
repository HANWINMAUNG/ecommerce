
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
<h3>Edit product</h3>
<div class="text-right">
       <a href="/product" class="btn btn-dark round mb-5">Back</a>
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

                <form class="form form-vertical"   method="POST" action="/product" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?=$product['id']?>">
                <div class="form-body">
                    <div class="row">
                    
                    <div class="col-12">
                        
                        <div class="form-group has-icon-left">
                            <label for="name-id-icon">Name</label>
                            <div class="position-relative">
                                <input type="text"  name="name" class="form-control" placeholder="Name" id="name-id-icon"  value="<?=$product['name']?>">
                                <div class="form-control-icon">
                                    <i data-feather="name"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Owner</label>
                            <div class="position-relative">
                            
                            <select name="shop_id" class="form-select " id="basicSelect" value="<?= $product['shop_id']?>">
                                               <?php foreach($owners as $owner): ?>
                                               <option value="<?=$owner['id']?>"><?= $owner['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                            
                        </div>

                    
                   
                  <div class="form-group has-icon-left">
                            <label for="first-name-icon">Description</label>
                            <div class="position-relative">
                                <textarea  name="description" class="form-control" placeholder="" id="first-name-icon"  >
                                <?=$product['description']?> </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                               
                                <div class="form-group has-icon-left">
                            <label for="name-id-icon">Price</label>
                            <div class="position-relative">
                                <input type="number"  name="price" class="form-control" placeholder="" id="name-id-icon"  value="<?=$product['price']?>">
                                <div class="form-control-icon">
                                    <i data-feather="name"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-icon-left">
                            <label for="name-id-icon">Quantity</label>
                            <div class="position-relative">
                                <input type="number"  name="quantity" class="form-control" placeholder="" id="name-id-icon" value="<?=$product['quantity']?>">
                                <div class="form-control-icon">
                                    <i data-feather="name"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                           <div class="form-group has-icon-left">
                            <label for="time-id-icon">Expiry_date</label>
                            <div class="position-relative">
                                <input type="date"  name="date" class="form-control" placeholder="" id="time-id-icon" value="<?=$product['expiry_date']?>">
                                <div class="form-control-icon">
                                    <i data-feather="time"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                               
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Image_one</label>
                            <div class="position-relative">
                                <input type="file" name="profile_one" class="form-control" placeholder="Input with icon left" id="first-name-icon" value="<?=$product['image_one']?>">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-danger mt-2 mb-2">*Please must be select you profile!</p>
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Image_two</label>
                            <div class="position-relative">
                                <input type="file" name="profile_two" class="form-control" placeholder="Input with icon left" id="first-name-icon"  value="<?=$product['image_two']?>">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-danger mt-2 mb-2">*Please must be select you profile!</p>
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Image_three</label>
                            <div class="position-relative">
                                <input type="file" name="profile_three" class="form-control" placeholder="Input with icon left" id="first-name-icon"  value="<?=$product['image_three']?>">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
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


           