$(function () {

    $('#fetch-posts').on('click', function (e) {
        e.preventDefault();
        $('#result').html('yükleniyor..');
        $.getJSON(API_URL + '/posts', function (response) {
            $('#result').html('');
            $.each(response, function (key, post) {
                $('#result').append(`<li>${post.content}</li>`);
            })
        });
    });

})