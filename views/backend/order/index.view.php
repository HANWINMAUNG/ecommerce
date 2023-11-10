<?php include (base_path("views/backend/layouts/header.view.php")); ?>
       <h3>Orders</h3>

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
                <th>ORDER NUMBER</th>
                <th>CUSTOMER</th>
                <th>TOTAL AMOUNT</th>
                <th width="20%">ACTION</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach($orders as $key=>$order): ?>
                <tr>
                  <th scope="row"><?=$key +1?></th>
                  <td><?=$order['order_no']?></td>
                  <td><?=$order['user_name']?></td>
                  <td><?=$order['total']?></td>+
                  <td>
                  <?php if(getAuthUser()['is_admin'] ==1):?>
                    <a href="/admin/order/order_detail?id=<?= $order['id']?>"  class="btn btn-primary btn-sm">Order Detail</a>
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

           

         