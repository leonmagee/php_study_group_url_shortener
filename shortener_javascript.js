$(document).ready( function() {

    $('#url_id').focus();

});

function go( url_input ) {

    $.post( 'url.php', { url_post: url_input }, function(data) {

        if ( data == 'error_no_url' ) {

            $('#message').html('<p>No URL Specified</p>');

        } else if ( data == 'error_invalid_url' ) {

            $('#message').html('<p>Not a valid URL</p>');

        } else if ( data == 'error_is_min' ) {

            $('#message').html('<p>Already phptest.dev URL</p>');

        } else {

            $('#url_id').val( data );

            $('#url_id').select();

            $('#message').html('<p>Successfully Shortened URL</p>');
        }

    });
}