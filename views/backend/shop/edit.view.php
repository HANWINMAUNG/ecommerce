
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
<h3>Edit Shop</h3>
<div class="text-right">
       <a href="/shop" class="btn btn-dark round mb-5">Back</a>
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

                <form class="form form-vertical"   method="POST" action="/shop" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?=$shop['id']?>">
                <div class="form-body">
                    <div class="row">
                    
                    <div class="col-12">
                        
                        <div class="form-group has-icon-left">
                            <label for="name-id-icon">Name</label>
                            <div class="position-relative">
                                <input type="text"  name="name" class="form-control" placeholder="Name" id="name-id-icon"  value="<?=$shop['name']?>">
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
                            
                            <select name="partner_id" class="form-select " id="basicSelect" value="<?= $shop['partner_id']?>">
                                         <?php foreach($partners as $partner): ?>
                                               <option value="<?=$partner['id']?>"><?= $partner['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                            
                        </div>

                                         </div>
                    <div class="col-12">
                        
                        <div class="form-group has-icon-left">
                            <label for="time-id-icon">Open_Time</label>
                            <div class="position-relative">
                                <input type="time"  name="open_time" class="form-control" placeholder="" id="time-id-icon" value="<?=$shop['open_time']?>">
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
                                <input type="time" name="close_time" class="form-control" placeholder="" id="time-id-icon"  value="<?=$shop['close_time']?>">
                                <div class="form-control-icon">
                                    <i data-feather="time"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                  <div class="form-group has-icon-left">
                            <label for="first-name-icon">Description</label>
                            <div class="position-relative">
                                <textarea  name="description" class="form-control" placeholder="Input with icon left" id="first-name-icon"  >
                                <?=$shop['description']?> </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                         </div>
                                         <div class="col-12">
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Standard</label>
                            <div class="position-relative">
                                <textarea  name="standard" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                                <?=$shop['standard']?> </textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                         </div>
                                         <div class="col-12">
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Public</label>
                            <div class="position-relative">
                                <textarea  name="public" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                                <?=$shop['public']?></textarea>
                                <div class="form-control-icon">
                                    <i data-feather=""></i>
                                </div>
                                         </div>
                                <div class="form-group has-icon-left">
                            <label for="first-name-icon">Logo</label>
                            <div class="position-relative">
                                <input type="file" name="profile_name" class="form-control" placeholder="Input with icon left" id="first-name-icon"  value="<?=$shop['logo']?>">
                           
                                <div class="form-control-icon">
                                    <i data-feather="image"></i>
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


           