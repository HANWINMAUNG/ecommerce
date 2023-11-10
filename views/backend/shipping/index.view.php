<?php include (base_path("views/backend/layouts/header.view.php")); ?>
       <h3>Shippings</h3>
<div class="text-right">
<?php if(session('auth_user')['is_admin']==1) : ?>
       <a href="/admin/shipping/create" class="btn btn-dark round mb-5">Shipping create</a>
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
                <th>STATE</th>
                <th>DISTRICT</th>
                <th>TOWNSHIP</th>
                <th>FEE</th>
                <th width="20%">ACTION</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach($shippings as $key=>$shipping): ?>
                <tr>
                  <th scope="row"><?=$key +1?></th>
                  <td><?=$shipping['state_name']?></td>
                  <td><?=$shipping['district_name']?></td>
                  <td><?=$shipping['township_name']?></td>
                  <td><?=$shipping['fee']?>MMK</td>
                  
                  <td>
                  <?php if(getAuthUser()['is_admin'] ==1):?>
                    <a href="/admin/shipping/edit?id=<?= $product['id']?>"  class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
                   
                     
                    <a href="/admin/shipping/delete?id=<?= $product['id']?>"  class="btn btn-danger btn-sm"><i data-feather="trash"></i></a>
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

           

         