$(document).ready(function() {

    //console.log('ok');

    $.get(
        'http://eshop/data/books'
    )

    .done(function(data) {

        //console.table(data);
        var books = '';
        books = `        
            <thead>
                <tr>
                    <th class="col-sm-12 col-md-3">Name</th>
                    <th class="col-sm-12 col-md-3">Price</th>
                    <th class="col-sm-12 col-md-1">Edit</th>
                    <th class="col-sm-12 col-md-1">Delete</th>                    
                </tr>   
            </thead>     
        `;
        
        $.each(data, function(index, kniha) {


            
            books += `
            
                <tr>
                    <td>
                        <input type="text" class="form-control" name="title[${kniha.id}]" value="${kniha.title}"/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="price[${kniha.id}]" value="${kniha.cena}"/>
                    </td>                    
                    <td>                        
                       <input type="button" class="form-control" name="save" value="save" class="btn btn-success" data-id="${kniha.id}"/>
                    </td>
                    <td>                        
                        <input type="button" class="form-control" name="delete" value="delete" class="btn btn-danger" data-id="${kniha.id}"/>
                        <input type="hidden"  name="id"  value="${kniha.id} "/>
                    </td>                    
                </tr>    
                   
            `;
           

            //console.log(books);

            //var a = $('#zoznamKnih').html(books);

            // console.log(a);  

        });
        

        var a = $('#listOfBooks').html(books);


        $('input[name="save"]').on('click', function() {

            var buttonClicked =  $(this);
            var id = buttonClicked.data('id');

            console.log(id);
            console.log($('input[name="save"]'));

            var title = $(`[name="title[${id}]"]`).val();
            var price = $(`[name="price[${id}]"]`).val();

            //var title = $('input[title="id[  ]"]').val();
            $.post('http://eshop/data/book/' + id, {

                id,
                title,
                price,

            });
      
        });

    });



});