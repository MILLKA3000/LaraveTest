
$('.addattr').on('click',function(){

    var indigrient_id = $(this).attr('idn');
    var product_id = $('#pr_id').attr('value');

    $('#myModal').modal('show');
    var savedSelection = rangy.saveSelection();
    $('#myModal').on('shown.bs.modal', function () {

        $('#weight').focus();
        $('.sendweight').on('click',function(){
            var attr ={
                'indigrient_id':indigrient_id,
                'weight':$( "#weight" ).val(),
                'product_id':product_id,
                '_token':$( "#token" ).attr('value')
            };
            $.post( "/dashboard/attr/add", attr)
                .done(function( data ) {
                    rangy.restoreSelection(savedSelection);
                    $('#myModal').modal('hide');
                });
        });
    })
});

