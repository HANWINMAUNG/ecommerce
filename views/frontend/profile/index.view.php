<?php include (base_path("views/frontend/layouts/header.php")); ?>

<?php include (base_path("views/frontend/layouts/navbar.php")); ?> 

<h3 class="m-5 d-flex flex-row">Customer Info</h3>

<nav class="mt-4 mb-5">
     <div class="container border ">
     <div class="">
     <a href="/edit" class="btn btn-dark round mb-5 mt-4">Edit</a>
   </div>
         <div class="row">
             <div class="col-4">
                 <div>
                     <h6>Customer Name </h6>
                 </div>
                 <div class="mt-5">
                     <h6>Email </h6>
                 </div>
                 <div class="mt-5">
                     <h6>Phone</h6>
                 </div>
                 <div class="mt-5">
                     <h6>Address</h6>
                 </div>
                 <div class="pt-4">
                 <div class="mt-5">
                     <h6>State</h6>
                 </div>
                 <div class="mt-5">
                     <h6>Distinct</h6>
                 </div>
                 <div class="mt-5 mb-5">
                     <h6>Townships</h6>
                 </div>
                 </div>
             </div>

             <div class="col-8">
                 <div class="">
                 <input type="text"  name="name" class="form-control"  id="name-id-icon"  value="<?=$_SESSION['auth_cus']['name']?>">
                 </div>
                 <div class="mt-4">
                 <input type="text"  name="name" class="form-control"  id="name-id-icon"  value="<?=$_SESSION['auth_cus']['email']?>">
                 </div>
                 <div class="mt-4">
                 <input type="text"  name="name" class="form-control"  id="name-id-icon"  value="<?=$_SESSION['auth_cus']['phone']?>">
                 </div>
                 <div class="mt-4">
                 <textarea name="address" class="form-control" placeholder="Input with icon left" id="first-name-icon" >
                 <?=$_SESSION['auth_cus']['address']?>
                 </textarea>
                 </div>
                 <div class="mt-4">
                 <input type="text"  name="name" class="form-control"  id="name-id-icon"  value="<?=$_SESSION['auth_cus']['name']?>">
                 </div>
                 <div class="mt-4">
                 <input type="text"  name="name" class="form-control"  id="name-id-icon"  value="<?=$_SESSION['auth_cus']['name']?>">
                 </div>
                 <div class="mt-4 mb-5">
                 <input type="text"  name="name" class="form-control"  id="name-id-icon"  value="<?=$_SESSION['auth_cus']['name']?>">
                 </div>
                 </div>
             </div>
         </div>
     </div>
 </nav>


<?php include (base_path("views/frontend/layouts/footer.php")); ?>