function sort_by(){
    var sort_by_value=jQuery('#sort_by_value').val();
    jQuery('#sort').val(sort_by_value);
    jQuery('#sortFilter').submit();
}

function sort_price_filter(){
    var start = jQuery( "#amount" ).val( "$" + ui.values[ 0 ]);
    var end = jQuery( "#amount" ).val( "$" + ui.values[ 1 ]);
    alert('Hello');
    // alert(start + '--' + end);
}