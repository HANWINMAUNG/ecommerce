<?php include (base_path("views/backend/layouts/header.view.php")); ?>

<div class="text-right mb-4"><a href="/admin/customer" class="btn btn-dark round">Back</a></div>

<div class="col-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Create Customer</h4>

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
                <div class="form-body">
                    <div class="row">
                    
                    <input type="hidden" name="status" value="1">
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
                            <label for="email-id-icon">Email</label>
                            <div class="position-relative">
                                <input type="text"  name="email" class="form-control" placeholder="Email" id="email-id-icon">
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
                            <label for="mobile-id-icon">Phone</label>
                            <div class="position-relative">
                                <input type="text" name="phone" class="form-control" placeholder="Mobile" id="mobile-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-icon-left">
                            <label for="first-name-icon">Address</label>
                            <div class="position-relative">
                                <textarea  name="address" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Profile</label>
                            <div class="position-relative">
                                <input type="file" name="profile_name" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           
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

           