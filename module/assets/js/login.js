$(document).on('submit', '#form-login', function(event) {
    event.preventDefault();
    /* Act on the event */
    var un = $('#username').val();
    var pw = $('#password').val();

    $.ajax({
        url: 'data/user_login.php',
        type: 'POST',
        dataType: 'json',
        data: {
            un: un,
            pw: pw
        },
        success: function(data) {
            // console.log(data);
            if (data.valid == true) {
                window.location = data.url;
            } else {
                alert('Invalid Username / Password!');
            }
        },
        error: function() {
            alert('jkjhkjfkjs');
        }
    }); //end a req
});