/**
 * Created by Mangrove on 1/3/2018.
 */
$(document).ready(function() {
    /*place jQuery actions here*/
    var link = "onpotik/index.php/produk"; // Url to your application (including index.php/)

    $("ul.products form").submit(function() {
        // Get the product ID and the quantity
        var id = $(this).find('input[name=product_id]').val();
        var qty = $(this).find('input[name=quantity]').val();

        $.post(link + "cart/tambah_keranjang", { product_id: id, quantity: qty, ajax: '1' },
            function(data){
                // Interact with returned data
            });

        return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

});