<?php include (base_path("views/backend/layouts/header.view.php")); ?>

<div class="text-right mb-4"><a href="/admin/product" class="btn btn-dark round">Back</a></div>

<div class="col-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Create Shipping</h4>

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

                <form class="form form-vertical"   method="POST" action="/admin/shipping" enctype="multipart/form-data">
                <div class="form-body">
                    <div class="row">
                       
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">States</label>
                            <div class="position-relative mb-2">
                            
                            <select name="shop_id" class="form-select " id="state">
                                               <?php foreach($states as $state): ?>
                                               <option value="<?=$state['id']?>"><?= $state['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                         </div>
                         <div class="form-group has-icon-left">
                            <label for="first-name-icon">Districts</label>
                            <div class="position-relative mb-2">
                            
                            <select name="shop_id" class="form-select " id="state">
                                               <?php foreach($states as $state): ?>
                                               <option value="<?=$state['id']?>"><?= $state['name']?></option>
                                               <?php endforeach ;?>
                                        </select>
                         </div>
                         <div class="form-group has-icon-left">
                            <label for="name-id-icon">Fee</label>
                            <div class="position-relative">
                                <input type="number"  name="price" class="form-control" placeholder="" id="name-id-icon">
                                <div class="form-control-icon">
                                    
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
<script class="">

$('#state').click(function(e)){
    e.preventDefault();

    $.get('/admin/shipping/create' , function(response){
        let 
    })
}

</script>

           