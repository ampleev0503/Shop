$(document).ready(function(){
    $(".add_to_card").on('click', function () {
        var id = $(this).attr("data-id");
        $.ajax({
            type: 'POST',
            url: "/basket/AddAjax/?id="+id,
            success: function (data) {
                console.log('успех');
                $(".ellipse_count").html('<p>' + data + '</p>');
            },
            error: function () {
                console.log('ошибка');
            }
        });
    });
});