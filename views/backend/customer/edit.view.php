
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
   
       <h3>Edit Account</h3>
<div class="text-right">
       <a href="/admin/customer" class="btn btn-dark round mb-5">Back</a>
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

            <form class="form form-vertical"   method="POST" action="/customer" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?=$customer['id']?>">
                <div class="form-body">
                    <div class="row">
                   
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                         <div class="form-group has-icon-left">
                            <label for="name-id-icon">Name</label>
                            <div class="position-relative">
                                <input type="text"  name="name" class="form-control" placeholder="Name" id="name-id-icon" value="<?=$customer['name']?>">
                                <div class="form-control-icon">
                                    <i data-feather="name"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        
                        <div class="form-group has-icon-left">
                            <label for="email-id-icon">Email</label>
                            <div class="position-relative">
                                <input type="text"  name="email" class="form-control" placeholder="Email" id="email-id-icon" value="<?=$customer['email']?>">
                                <div class="form-control-icon">
                                    <i data-feather="mail"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="password-id-icon">Password</label>
                            <div class="position-relative">
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="password-id-icon">Confirm Password</label>
                            <div class="position-relative">
                                <input type="password " name="com_password" class="form-control" placeholder="Password" id="password-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="mobile-id-icon">Mobile</label>
                            <div class="position-relative">
                                <input type="text" name="phone" class="form-control" placeholder="Mobile" id="mobile-id-icon" value="<?=$customer['phone']?>">
                                <div class="form-control-icon">
                                    <i data-feather="phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Address</label>
                            <div class="position-relative">
                                <textarea name="address" class="form-control" placeholder="Input with icon left" id="first-name-icon" >
                                <?=$customer['address']?>
                            </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                            <div class="form-group has-icon-left">
                            <label for="first-name-icon">Status</label>
                            <div class="position-relative">
                            
                            <select name="status" class="form-select " id="basicSelect">
                                            <option  value="1"
                                            <?php if($customer['status']==1):?>
                                              selected
                                            <?php endif;?>>Active</option>
                                            <option  value="0" 
                                            <?php if($user['status']==0):?>
                                              selected
                                            <?php endif ; ?>>Inactive</option>
                                        </select>
                            
                        </div>
                                            </div>      
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Profile</label>
                            <div class="position-relative">
                                <input type="file" name="profile_name" class="form-control" placeholder="Input with icon left" id="first-name-icon"value="<?=$customer['profile']?>">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
                                </div>
                            </div>
                             <p class="text-danger mt-2 mb-2">*Please must be select you profile!</p>
                    <div class="col-12 d-flex justify-content-center mt-2 ">
                        <button type="submit" class="btn btn-primary btn-sm mr-2">Confirm</button>
                        
                        <a href="/admin/customer" class="btn btn-secondary btn-sm">Cancel</a>
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

           

         