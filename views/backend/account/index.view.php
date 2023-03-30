
<?php include (base_path("views/backend/layouts/header.view.php")); ?>
     
       <h2>Account</h2>
<div class="text-right">
       <a href="/admin/accounts/create" class="btn btn-dark round mb-5">Create Account</a>
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
                <th>ROLE</th>
                <th width="20%">ACTION</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $key=>$user): ?>
                <tr>
                  <th scope="row"><?=$key +1?></th>
                  <td><?=$user['name']?></td>
                  <td><?=$user['email']?></td>
                  <td><?=$user['phone']?></td>
                  <td>
                    <?php if($user['is_admin']) : ?>
                      <span class="badge bg-success">Admin</span>
                      <?php else :?>
                        <span class="badge bg-primary">Partner</span>
                        <?php endif ;?> 
                  </td>
                  <td>
                    <a href="/admin/accounts/edit?id=<?= $user['id']?>"  class="btn btn-warning btn-sm"><i data-feather="edit"></i>Edit</a>
                    <?php if(getAuthUser()['email'] !== $user['email']):?>
                     
                    <a href="/admin/accounts/delete?id=<?= $user['id']?>"  class="btn btn-danger btn-sm"><i data-feather="delete"></i>Delete</a>
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

           

         