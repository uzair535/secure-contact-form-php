$(document).ready(function(){
    // ajax form
    $('form[data-ajax]').on('submit', function(e){
        e.preventDefault();
        var form = $(this);

        $.ajax({
            type: "POST",
            url: "include/form.php",
            data: $(this).serialize(),
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if(data.success){
                successMessage(data.success);
            }else if(data.error){
                errorMessage(data.error);
            }

            // reset form
            if(data.reset && data.reset == 'true'){
                $(form)[0].reset();
            }
        });
    });

    // alert message
    function errorMessage(message){
        $('div.alert').hide();
        $('div.alert-danger').text(message).fadeIn().delay(5000).fadeOut();
    }

    // success messages
    function successMessage(message){
        $('div.alert').hide();
        $('div.alert-success').text(message).fadeIn().delay(5000).fadeOut();;
    }
});