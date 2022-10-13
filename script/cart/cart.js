
class Cart {

    total_price = 0;
    total_item = 0;

    cart = {}

    constructor() {}

    add_to_cart(product_id){
        //if item is already in cart increase item quantity
        if(this.cart[product_id]) {
            this.cart[product_id]['quantity']++;
        }
        //if item is not in the database
        else if(!this.fetch_product_details(product_id)) {
            Swal.fire({
                icon: 'error',
                title: 'Product Unavailable'
            });
        }
        //if item is not in cart set quantity of item to 1
        else {
            this.cart[product_id] = {
                'quantity': 1,
            }
        }

        this.update_cart_ui();
    }

    remove_from_cart(product_id){

        if(this.cart[product_id]) {
            destroy(this.cart[product_id]);
            return true;
        }
        return false;
    }

    decrease_item_quantity(product_id){

        if(!this.cart[product_id]) {
           return false;
        }

        this.cart[product_id]['quantity']--;

        if(this.cart[product_id]['quantity'] == 0) {
            this.remove_from_cart(product_id);
        }

        return true;
    }

    fetch_product_details(product_id){
        $.ajax({
            method: 'POST',
            url: '',
            data: {product_id: product_id},
            success: (data) => {

                if(data.length == 0) return false;

                return data;
            }
        })
    }

    record_details(product_id){
        $.ajax({
            method: 'POST',
            url: '',
            data: {product_id: product_id},
            success: (data) => {

                if(data.length == 0) return false;

                return data;
            }
        })
    }

    check_out() {
        
    }

    update_cart_ui(){}
}