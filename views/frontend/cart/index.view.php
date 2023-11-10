<?php include (base_path("views/frontend/layouts/header.php")); ?>

<?php include (base_path("views/frontend/layouts/navbar.php")); ?>
<div class="container py-5">
    
        <div class="row" id="table-borderless">
                <div class="col-12">
                <div class="card-header">
                        <h4 class="">Cart</h4>
                    </div>
                    <div class="card ">
                   <div class="">
                        <div class="card-body">
                        <a href="/cart/empty"><button type="submit" class="btn btn-danger btn-lg" name="submit" value="addtocard">Empty</button></a>
                        </div>
                        <!-- table with no border -->
                        <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-center">
                            <thead >
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($product_carts ?? [] as $key=>$product_cart): ?>
                            <tr>
                                
                                <td class="text-bold-500" ><?=$key +1?></td>
                                <td><?=$product_cart['name'];?></td>
                                <form class="form form-vertical"   method="POST" action="/cart/quantity" enctype="multipart/form-data">
                                
                                <td class="text-bold-500">
                                    <button type="submit" class="value-button text-decoration-none text-black-50" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                                    <input type="hidden" name="product_cart" value="<?=$product_cart['id']?>">
                                    <input type="text"  name="quantity" id="number"
                                     value="<?= $_SESSION['cart'][ $product_cart['id']]['quantity']; ?>">
                                    <button type="submit" class="value-button text-decoration-none text-black-50" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                                <td>
                            </from>
                                    <div class="">
                                     <a href="/cart/edit?id=<?= $product_cart['id']?>"><button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">update</button></a>
                                     <a href="/cart/delete?id=<?= $product_cart['id']?>"><button type="submit" class="btn btn-danger btn-lg" name="submit" value="addtocard">delete</button></a>
                                    </div>
                                </td>
                             </tr>
                             <?php endforeach ;?>
                            </tbody>
                        </table>
                        
                        </div>
                    </div>
                    
                </div>
                <div class="text-center mt-2">
                <a href="/cart/order"><button type="submit" class="btn btn-success btn-lg " name="submit" value="addtocard">PROCEED TO CHECKOUT</button></a>
                </div>
            </div>
         </div>
</div>



<?php include (base_path("views/frontend/layouts/footer.php")); ?>