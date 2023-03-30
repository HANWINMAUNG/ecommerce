<?php include (base_path("views/backend/layouts/header.view.php")); ?>

<div class="text-right mb-4"><a href="/shop" class="btn btn-dark round">Back</a></div>

<div class="col-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Create Shop</h4>

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

                <form class="form form-vertical"   method="POST" action="/shop" enctype="multipart/form-data">
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
                            <label for="first-name-icon">Partner</label>
                            <div class="position-relative">
                            
                            <select name="partner_id" class="form-select " id="basicSelect">
                                               <?php foreach($users as $user): ?>
                                               <option value="<?=$user['id']?>"><?= $user['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                            
                        </div>
                    
                    <div class="col-12">
                        
                        <div class="form-group has-icon-left">
                            <label for="time-id-icon">Open_Time</label>
                            <div class="position-relative">
                                <input type="time"  name="open_time" class="form-control" placeholder="" id="time-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="time"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="time-id-icon">Close_Time</label>
                            <div class="position-relative">
                                <input type="time" name="close_time" class="form-control" placeholder="" id="time-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="time"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="form-group has-icon-left">
                            <label for="first-name-icon">Description</label>
                            <div class="position-relative">
                                <textarea  name="description" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Standard</label>
                            <div class="position-relative">
                                <textarea  name="standard" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Public</label>
                            <div class="position-relative">
                                <textarea  name="public" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                           </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Logo</label>
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


           