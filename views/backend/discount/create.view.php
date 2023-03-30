<?php include (base_path("views/backend/layouts/header.view.php")); ?>

<div class="text-right mb-4"><a href="/discount" class="btn btn-dark round">Back</a></div>

<div class="col-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Create Discount</h4>

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
                <div class="form-body">
                    <div class="row">
                    
                    
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Product Name</label>
                            <div class="position-relative">
                            
                            <select name="product_id" class="form-select " id="basicSelect">
                                               <?php foreach($products as $product): ?>
                                               <option value="<?=$product['id']?>"><?= $product['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                            
                        </div>
            
                        <div class="col-12">
                                <div class="form-group has-icon-left">
                            <label for="name-id-icon">Amount</label>
                            <div class="position-relative">
                            <select id="discount" name="discount_type" >
                                  <option value="percent">%</option>
                                  <option value="Buy 1 GET 1">Buy 1 GET 1</option>
                                  <option value="Buy 2 GET 1">Buy 2 GET 1</option>
                                  <option value="Buy 3 GET 1">Buy 3 GET 1</option>
                            </select>
                                <div class="form-control-icon">
                                    <i data-feather="name"></i>
                                               </div>
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

    

    <?php include (base_path("views/backend/layouts/footer_info.php")); ?>         


           