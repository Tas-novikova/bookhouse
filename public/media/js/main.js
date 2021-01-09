$(function () {
    $('#nav a').click(function () {
        var test = $(this).text();
        console.log(test);
    });
});

$(function () {
    $('#nav a').click(function () {
        var title = $(this).attr('data-title');
        var content = $(this).attr('data-body');
        var pict = $(this).attr('data-image');
        console.log(pict);
        $('#title').text(title);
        $('#content').html(content);
        $('#picture').attr('src', 'media/img/'+pict);
    });
});