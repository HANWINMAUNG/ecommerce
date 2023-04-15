<?php include (base_path("views/backend/layouts/header.view.php")); ?>

<div class="text-right mb-4"><a href="/category" class="btn btn-dark round">Back</a></div>

<div class="col-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Create Category</h4>

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

                <form class="form form-vertical"   method="POST" action="/category" enctype="multipart/form-data">
                <div class="form-body">
                    <div class="row">
                    
                                <div class="col-12">
                                    
                                    <div class="form-group has-icon-left">
                                        <label for="name-id-icon">Name</label>
                                        <div class="position-relative">
                                            <input type="text"  name="name" class="form-control" placeholder="Name" id="name-id-icon">
                                            <div class="form-control-icon">
                                                <i data-feather="name"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Shop Name</label>
                                        <div class="position-relative">
                                                    <select name="shop_id" class="form-select " id="basicSelect">
                                                        <?php foreach($shops as $shop): ?>
                                                        <option value="<?=$shop['id']?>"><?= $shop['name']?></option>
                                                        <?php endforeach ;?>
                                                    </select>
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

    

    <?php include (base_path("views/backend/layouts/footer_info.php")); ?>         


           