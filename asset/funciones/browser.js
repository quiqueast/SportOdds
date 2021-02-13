function enviar(redi) {
    $.ajax({
        url: "./carga/matchuPhp.php",
        type: "POST",
        data: { redi },
        success: function(respuesta) {

            $('#matchUpMost').html(respuesta);
            ocultarSecciones();
            $('#MostT').show();
        },
        error: function(xhr, status) {
            alert("Error en metodo AJAX");
        },
    });
}

$('a.button').on('click', function(e) {

    e.preventDefault()
    redi = $(this).attr('href');
    enviar(redi);

});

$('button.button').on('click', function(e) {

    e.preventDefault()
    redi = $(this).attr('data-content');
    id = $('.card').attr('re');
    detail = redi.substr(-5);
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $('#game-detail--' + detail).hide();

    } else {

        $(this).addClass('active');
        $.ajax({
            url: "./carga/details.php",
            type: "POST",
            data: { detail, id },
            success: function(respuesta) {

                $('#game-detail--' + detail).html(respuesta);
                $('#game-detail--' + detail).show();
                $("td > img").each(function() {
                    redire = $(this).attr("data-src");
                    $(this).attr("src", redire);
                });
            },
            error: function(xhr, status) {
                alert("Error en metodo AJAX");
            },
        });
    }


});


function activeDetails(id) {
    $(this).toggleClass('active');
    $(id).toggleClass('active');

}