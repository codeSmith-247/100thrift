<?php

    function product_card($name = "A very long Product Name", $price = "2000", $image = "product_000000.jpg", $status = "In Stock", $product_id = '') {
        echo "
        <div class = 'product ov-hidden' product_id = '$product_id'>
            <div class = 'img'>
                <img src = 'images/$image' class = 'obj-fit'>
            </div>
            <div class = 'details p-1 full-w'>
                <div class = 'flex-between'>
                    <h4 cass = 'name'>$name</h4>
                    <div class = 'price flex-row'>
                        <span>Ghc</span>
                        <span>$price</span>
                    </div>
                </div>
                <div class = 'btn-box flex-row ov-hidden flex-between full-w'>
                    <div class = 'instock flex-row'>
                        $status
                    </div>

                    <div class = 'buy-btn flex-col flex-center pointe'>
                        <span>Add to cart</span>
                        <div class = 'stick'></div>
                    </div>

                </div>
            </div>
        </div>
        ";

    }