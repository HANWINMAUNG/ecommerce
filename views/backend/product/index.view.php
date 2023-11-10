<?php include (base_path("views/backend/layouts/header.view.php")); ?>
       <h3>Products</h3>
<div class="text-right">
<?php if(session('auth_user')['is_admin']==1) : ?>
       <a href="/admin/product/create" class="btn btn-dark round mb-5">Product create</a>
       <?php endif;?>
</div>




<div class="row" id="table-inverse">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
       
      </div>
      
        <!-- table with dark -->
        
        <div class="m-50 px-5 pb-5 " >
          <table class="footer"  id="data_table"  >
            <thead>
              <tr>
              <th class="text-align-center">#</th>
                <th>NAME</th>
                <th>OWNER</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>EXPIRY_DATE</th>
                
                <th width="20%">ACTION</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach($products as $key=>$product): ?>
                <tr>
                  <th scope="row"><?=$key +1?></th>
                  <td><?=$product['name']?></td>
                  <td><?=$product['shop_name']?></td>
                  <td><?=$product['description']?></td>
                  <td><?=$product['price']?></td>
                  <td><?=$product['quantity']?></td>
                  <td><?=$product['expiry_date']?></td>
                  <td>
                  <?php if(getAuthUser()['is_admin'] ==1):?>
                    <a href="/admin/product/edit?id=<?= $product['id']?>"  class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
                   
                     
                    <a href="/admin/product/delete?id=<?= $product['id']?>"  class="btn btn-danger btn-sm"><i data-feather="trash"></i></a>
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

           

         