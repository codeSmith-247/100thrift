<?php 


function shop_card($name = "Cool Vintage Shirt", $price = '2000', $status = "In Stock", $image = "product_000001.jpg") {
    echo "
    
    <div class = 'card p-rel'>
        <div class = 'image'>
            <img src = 'images/$image' class = 'obj-fit'>
        </div>

        <div class = 'details'>

            <div class = 'product-name flex-col flex-center'>
                <div class = 'name'>$name</div>
                <div class = 'price'>Ghc $price</div>
            </div>

            <div class = 'btn flex-center flex-row p-rel'>

                <span>Add to cart</span>
                <i class = 'bi bi-cart'></i>

                <div class = 'btn-loader p-abs top-left full-hw flex-center'>
                    <div class = 'loader-ball p-rel flex-center round'>
                        <div class = 'divider'></div> 
                        <div class = 'cover-ball p-abs p-center round'></div>
                    </div>
                </div>
            </div>
        </div>

        <div class = 'status p-abs flex-center'>
            $status
        </div>
    </div>

    ";
}