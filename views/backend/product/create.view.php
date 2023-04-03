<?php include (base_path("views/backend/layouts/header.view.php")); ?>

<div class="text-right mb-4"><a href="/product" class="btn btn-dark round">Back</a></div>

<div class="col-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Create Product</h4>

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
                            <label for="first-name-icon">Owner</label>
                            <div class="position-relative">
                            
                            <select name="shop_id" class="form-select " id="basicSelect">
                                               <?php foreach($shops as $shop): ?>
                                               <option value="<?=$shop['id']?>"><?= $shop['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                            
                        </div>
            
                  <div class="form-group has-icon-left">
                            <label for="first-name-icon">Description</label>
                            <div class="position-relative">
                                <textarea  name="description" class="form-control" placeholder="" id="first-name-icon">
                           </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                <div class="form-group has-icon-left">
                            <label for="name-id-icon">Price</label>
                            <div class="position-relative">
                                <input type="number"  name="price" class="form-control" placeholder="" id="name-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="name"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-icon-left">
                            <label for="name-id-icon">Quantity</label>
                            <div class="position-relative">
                                <input type="number"  name="quantity" class="form-control" placeholder="" id="name-id-icon">
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
                                <input type="date"  name="date" class="form-control" placeholder="" id="time-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="time"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                               
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Image_one</label>
                            <div class="position-relative">
                                <input type="file" name="profile_one" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Image_two</label>
                            <div class="position-relative">
                                <input type="file" name="profile_two" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Image_three</label>
                            <div class="position-relative">
                                <input type="file" name="profile_three" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
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


           