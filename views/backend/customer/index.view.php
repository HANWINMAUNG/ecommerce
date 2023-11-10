
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
     
       <h2>Customer</h2>
<div class="text-right">
<?php if(session('auth_user')['is_admin']==1) : ?>
       <a href="/admin/customer/create" class="btn btn-dark round mb-5">Create Customer</a>
       <?php endif;?>
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
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>ADDRESS</th>
                <th>STATUS</th>
                <th width="20%">ACTION</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach($customers as $key=>$customer): ?>
                <tr>
                  <th scope="row"><?=$key +1?></th>
                  <td><?=$customer['name']?></td>
                  <td><?=$customer['email']?></td>
                  <td><?=$customer['phone']?></td>
                  <td><?=$customer['address']?></td>
                  <td>
                    <?php if($customer['status']) : ?>
                      <span class="badge bg-success">Active</span>
                      <?php else :?>
                        <span class="badge bg-danger">Inactive</span>
                        <?php endif ;?> 
                  </td>
                  <td>
                  <?php if(getAuthUser()['is_admin'] ==1):?>
                    <a href="/admin/customer/edit?id=<?= $customer['id']?>"  class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
                    
                    <a href="/admin/customer/delete?id=<?= $customer['id']?>"  class="btn btn-danger btn-sm"><i data-feather="trash"></i></a>
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

           

         