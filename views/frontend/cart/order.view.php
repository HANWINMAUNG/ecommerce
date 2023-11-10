<?php include (base_path("views/frontend/layouts/header.php")); ?>

<?php include (base_path("views/frontend/layouts/navbar.php")); ?>
<div class="container py-5">
   
        <div class="row" id="table-borderless">
                <div class="col-12">
                <div class="card-header">
                        <h4 class="">Order Detail</h4>
                    </div>
                    <div class="card ">
                   <div class="">
                       
                        <!-- table with no border -->
                        <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-center">
                            <thead >
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($product_carts as $key=>$product_cart): ?>
                               
                            <tr>
                            
                                <td class="text-bold-500" ><?=$key +1?></td>
                                <td><?=$product_cart['name'];?></td>
                                <td ><img class="rounded"  style="width:60px;height:60px;" src="<?= asset_image($product_cart['image_one']) ?>" alt="Product Image"></td>
                                <td><?=$product_cart['price'];?></td>
                                <td><?= $_SESSION['cart'][ $product_cart['id']]['quantity']; ?></td>
                                <td class=""><?=$total=$_SESSION['cart'][ $product_cart['id']]['quantity']*$product_cart['price'];?></td>
                             </tr>
                             <?php endforeach ;?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                <a href="/cart/order_store"<button type="submit" class="btn btn-success btn-lg " name="submit" value="addtocard">ORDER NOW</button></a>
                </div>
                
            </div>
         </div>
</div>



<?php include (base_path("views/frontend/layouts/footer.php")); ?>