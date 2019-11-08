//Search XHR
$('.search-text').on('keyup', function() {
    $.ajax({
        url: '/Article',
        type: 'GET',
        dataType: 'json',
        data: {
            'search': $('.search-text').val()
        },
        success: function(data) {
            $('.article_list').html(data['view']);
            console.log(data);
        },
        error: function(xhr, status) {
            console.log(xhr.error + "Error Status :" + status);
            console.log('gagal');
        },
        complete: function() {
            alreadyloading = false;
        }
    });

});

//Comment XHR
$(document).ready(function() {
    $('#save').on('click', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/Comment',
            type: 'POST',
            dataType: 'json',
            data: {
                'search': $('.fcomment').serialize()
            },
            success: function(data) {
                $('.comment_article').html(data['view']);
                console.log(data);
            },
            error: function(xhr, status) {
                console.log(xhr.error + "Error Status :" + status);
                console.log('gagal');
            },
            complete: function() {
                alreadyloading = false;
            }
        })
    })
});