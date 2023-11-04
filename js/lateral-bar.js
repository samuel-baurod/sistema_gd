$(document).ready(()=>{
   
    $('#secBe').click(()=>{
        
        $('#main-content').empty();

        $.ajax(
            {
                // GET es una Peticion HTTP, al backend 
                type:       'GET',
                url:        '../view/buzon-entrada.php',
                success:    function(response){
                    $('#main-content').html(response);
                },
                error:      function(err){
                    // alert("Hay un error en la vista: " + JSON.stringify(err));
                    $('#main-content').html(JSON.stringify(err));
                }        
            }
        )

    });



});