$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});

$('#contact_btn').on('click',function(event){
    alert('contact');   
    event.preventDefault(); 

    var data = {
        name : $('#name').val(),
        email : $('#email').val(),
        subject : $('#subject').val(),
        message : $('#comment').val()
    };

    $.ajax({
        url: "/sendMessage",
        type: "POST",
        data: data,
        success: function(response) {
            alert(response);
            $('#success_message').removeAttr('hidden');
            $('#success_message').html(response['success']);
            $('#name').val("");
            $('#email').val("");
            $('#subject').val("");
            $('#comment').val("");
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error: ' + textStatus + ' - ' + errorThrown);
        }
    })
});

setTimeout(function() {
    $('#success_message').fadeOut('fast');
}, 1000);