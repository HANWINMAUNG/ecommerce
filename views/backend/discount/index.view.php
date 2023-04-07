
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
     
       <h2>Discount</h2>
<div class="text-right">
       <a href="/discount/create" class="btn btn-dark round mb-5"> Discount Create </a>
</div>



       <div class="row" id="table-inverse">
  <div  class=" col-12">
    <div class="card">
      <div class="card-header">
        
      </div>
      
        <!-- table with dark -->
        <div class="m-50 px-5 pb-5 ">
          <table class="footer"  id="data_table"  >
            <thead>
              <tr>
              <th width="20%"class="text-align-center">#</th>
                <th>PRODUCT NAME</th>
                <th>SHOP NAME</th>
                <th>DISCOUNT TYPE</th>
                <th>AMOUNT</th>
                <th width="20%">ACTION</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach($discounts as $key=>$discount): ?>
                <tr>
                  <th scope="row"><?=$key +1?></th>
                  <td><?=$discount['product_name']?></td>
                  <td><?=$discount['shop_name']?></td>
                  <td><?=$discount['discount_type']?></td>
                  <td><?=$discount['amount']?></td>
                  <td>
                  <?php if(getAuthUser()['is_admin'] ==1):?>
                    <a href="/discount/edit?id=<?= $discount['id']?>"  class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
                    
                     
                    <a href="/discount/delete?id=<?= $discount['id']?>"  class="btn btn-danger btn-sm"><i data-feather="trash"></i></a>
                   <?php endif ;?>
                     <!-- <form action="/admin/accounts/delete" method="POST">
                  //     <input type="hidden" name="_method" value="DELETE">
                  //     <input type="hidden" name="id" value="">
                  //   <button type="submit" class="btn btn-danger btn-sm"><i data-feather="delete"></i>Delete</button>
                  //     </form> -->
                   </td> 
                  
              </tr>
              <?php endforeach ;?>
            </tbody>
            
          </table>
          
        </div>  
       
        <?php include (base_path("views/backend/layouts/footer.view.php")); ?>  

           

         