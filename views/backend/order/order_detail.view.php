<?php include (base_path("views/backend/layouts/header.view.php")); ?>

       <h3>Orders Detail</h3>

       <nav class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div>
                            <h6>Order No </h6>
                        </div>
                        <div class="mt-4">
                            <h6>Customer </h6>
                        </div>
                        <div class="mt-4">
                            <h6>Total Amount</h6>
                        </div>
                        <div class="mt-4">
                            <h6>Order Confirm Date</h6>
                        </div>
                        <div class="mt-4">
                            <h6>Details </h6>
                        </div>
                    </div>

                    <div class="col-8">
                        <div class="">
                        <h6>- <?=$order_detail['order_no']?> </h6>
                        </div>
                        <div class="mt-4">
                        <h6>- <?=$order_detail['user_name']?> </h6>
                        </div>
                        <div class="mt-4">
                        <h6>- <?=$order_detail['total']?> MMK</h6>
                        </div>
                        <div class="mt-4">
                        <h6>- <?=$order_detail['created_at']?> </h6>
                        </div>
                        <div class="mt-4">
                        <h6>- <div class="row" id="table-borderless">
                                    <div class="col-12">
                                        <div class="card">
                                        
                                        <div class="card-content">
                                           
                                            <!-- table with no border -->
                                            <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Products name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Shop id</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                       <?php foreach(json_decode($order_detail['order_detail'],JSON_OBJECT_AS_ARRAY) as $key=>$order_no):
                                                        ;?>       
                                                <tr>
                                                    <td class="text-bold-500"><?=$key +1?></td>
                                                    <td><?=$order_no['product_name']?></td>
                                                    <td class="text-bold-500"><?=$order_no['quantity']?></td>
                                                    <td><?=$order_no['price']?></td>
                                                    <td><?=$order_no['shop_id']?></td>
                                                    
                                                </tr>
                                                <?php endforeach ;?>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div> 
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
     <?php include (base_path("views/backend/layouts/footer.view.php")); ?>  

           

         