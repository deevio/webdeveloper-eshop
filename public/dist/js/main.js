
$(document).ready(function(){

    console.log('ok');
    
    $.get(
        'http://eshop/data/books'
    )
    
    .done(function( data ) {

        //console.table(data);

        $.each( data, function(index, kniha){
            
            console.log(kniha);

        });

        $('#books');



    });

});