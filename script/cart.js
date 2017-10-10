/**
 * Created by gpnissar on 2017-08-16.
 */

$(function(){
    console.log('DOM construit');
    var cart_qty_inputs = $('input[name="card_item_qty"]');
    console.log('cart_qty_inputs', cart_qty_inputs);
    cart_qty_inputs.on('change', function(event){
        console.log('Changement qty article');
        var form = $(event.target).parents('form');
        console.log(form);
        form.trigger('submit');
    });
});

