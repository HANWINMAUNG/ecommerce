<?php include(base_path("views/backend/layouts/header.view.php")); ?>

<h3>Edit Discount</h3>
<div class="text-right">
       <a href="/admin/discount" class="btn btn-dark round mb-5">Back</a>
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



                     <form class="form form-vertical"   method="POST" action="/discount" enctype="multipart/form-data">
                     <input type="hidden" name="_method" value="PATCH">
                     <input type="hidden" name="id" value="<?=$discount['id']?>">
                <div class="form-body">
                    <div class="row">

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Shop Name</label>
                            <div class="position-relative">
                            
                            <select name="shop_id" class="form-select" >
                                <option selected  value="<?=$discount['shop_id']?>" ><?= $discount['shop_name']?></option>
                            </select>
                            </div>
                         </div>
                        </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Product Name</label>
                            <div class="position-relative">
                            
                            <select name="product_id" class="form-select"   >
                                <option selected value="<?=$discount['product_id']?>"><?= $discount['product_name']?></option>
                            </select>
                            
                                  </div>
                         </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                                   <label for="name-id-icon">Discount Type</label>
                         <div class="position-relative">
                             <select id="discount" name="discount_type" class="form-select">
                             <option selected value="<?=$discount['discount_type']?>"><?= $discount['discount_type']?></option>
                                  <option value="percent">% Discount</option>
                                  <option value="Buy 1 GET 1">Buy 1 GET 1</option>
                                  <option value="Buy 2 GET 1">Buy 2 GET 1</option>
                                  <option value="Buy 3 GET 1">Buy 3 GET 1</option>
                            </select>
                                
                                </div>
                             </div>
                         </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="name-id-icon">Amount</label>
                            <div class="position-relative">
                                <input type="number"  name="amount" class="form-control" placeholder="Amount" id="name-id-icon" value="<?= $discount['amount']?>">
                                <div class="form-control-icon">
                                    <i data-feather="name"></i>
                                </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Cancel</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

                    
 

    <?php include(base_path("views/backend/layouts/footer_info.php")); ?>
    

                   
            