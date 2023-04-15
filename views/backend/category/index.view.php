<?php include (base_path("views/backend/layouts/header.view.php")); ?>
       <h3>Products</h3>
<div class="text-right">
<?php if(session('auth_user')['is_admin']==1) : ?>
       <a href="/category/create" class="btn btn-dark round mb-5">Category create</a>
       <?php endif;?>
</div>
                <div class="row" id="table-inverse">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                            
                            </div>         
        
            <div class="m-50 px-5 pb-5 " >
                 <table class="footer"  id="data_table"  >
                                <thead>
                                <tr>
                                <th class="text-align-center">#</th>
                                    <th>NAME</th>
                                    <th>SHOP NAME</th>
                                    <th width="20%">ACTION</th>
                                    
                                </tr>
                                </thead>
                    <tbody>
                            <?php foreach($categories as $key=>$category): ?>
                                <tr>
                                <th scope="row"><?=$key +1?></th>
                                <td><?=$category['name']?></td>
                                <td><?=$category['shop_name']?></td>
                                <td>
                                <?php if(getAuthUser()['is_admin'] ==1):?>

                                    <a href="/category/edit?id=<?= $category['id']?>"  class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
                                
                                    
                                    <a href="/category/delete?id=<?= $category['id']?>"  class="btn btn-danger btn-sm"><i data-feather="trash"></i></a>
                               
                                    <?php endif ;?>
                                    
                                </td>
                            </tr>
                            <?php endforeach ;?>
                </tbody>
            
          </table>
          
        </div>  
       
        <?php include (base_path("views/backend/layouts/footer.view.php")); ?>  

           

         