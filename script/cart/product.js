
class Product {

    filter_obj = {
        name: '',
        category: '',
        start_price: '',
        end_price: '',
        location: 'home',
    };

    fetch_products() {
        $.ajax({
            method: 'POST',
            url: '',
            data: {filter_obj: filter_obj},
            success: (data) => {

                if(data.length == 0) return false;

                this.update_ui(data);
            }
        })
    }

    update_ui(cards) {
        
    }
}