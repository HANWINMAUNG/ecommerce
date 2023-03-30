<?php include (base_path("views/backend/layouts/header.view.php")); ?>
       <h3>Shop Sliders</h3>
<div class="text-right">
<?php if(session('auth_user')['is_admin']==1) : ?>
       <a href="/shop_slider/create" class="btn btn-dark round mb-5">Shop Slider create</a>
       <?php endif;?>
</div>




<div class="row" id="table-inverse">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
       
      </div>
      
        <!-- table with dark -->
        
        <div class="px-5 pb-5 " >
          <table class="footer"  id="data_table"  >
            <thead>
              <tr>
              <th class="text-align-center">#</th>
                <th>SHOP_NAME</th>
                
                <th width="20%">ACTION</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach($shop_sliders as $key=>$shop_slider): ?>
                <tr>
                  <th scope="row"><?=$key +1?></th>
                  <td><?=$shop_slider['shop_name']?></td>
                  
                  <td>
                  <?php if(getAuthUser()['is_admin'] ==1):?>
                    <a href="/shop_slider/edit?id=<?= $shop_slider['id']?>"  class="btn btn-warning btn-sm"><i data-feather="edit"></i>Edit</a>
                   
                     
                    <a href="/shop_slider/delete?id=<?= $shop_slider['id']?>"  class="btn btn-danger btn-sm"><i data-feather="delete"></i>Delete</a>
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