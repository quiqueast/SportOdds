$('.btnM').on('click', function(e) {
    e.preventDefault()
    $('.clen').html(' ');
    py = $(this).attr('aria-controls');
    redi = $(this).attr('tabli');
    resp = '<center><img src="./asset/icon/load.gif"></center>';
    $('#' + py + "-" + redi).html(resp);

    $.ajax({
        url: "./carga/" + py + ".php",
        type: "POST",
        data: { redi },
        success: function(respuesta) {

            console.log(py);
            $('#' + py + "-" + redi).html(respuesta);
            $('.card').attr('re', redi);
            $('.container-header .nav').hide();
            $('.green').hide();
            $('.yellow').hide();

        },
        error: function(xhr, status) {
            alert("Error en metodo AJAX");
        },
    });

    $(this).tab('show');

});

$('.btnC').on('click', function(e) {
    e.preventDefault()
    var cant = $(this).attr('cant');
    $('#cant').val(cant);
});
$('.parlay-clear').on('click', function(e) {
    e.preventDefault()
    var cant = $(this).attr('btn');
    $('#most' + cant).val('');
});
$('#btnT').on('click', function(e) {
    e.preventDefault()
    $('.slider').val(0);
    $('#TotalM').val(0);
    $('.parlay-bet').val('');
    $('#cant').val(100);
    $('#most1').attr('canti', '0');
    $('#most2').attr('canti', '0');
    $('#most3').attr('canti', '0');
    $('#most4').attr('canti', '0');
});
$(document).ready(function() {

    $('#nfl-general').click();
});

$('.slider').change(function(e) {
    e.preventDefault();
    var sl = $(this).attr('sl');
    var valorS = $(this).val();
    var val = $('#cant').val();
    var res1;
    var res2;
    var res3;
    var res4;

    if (valorS <= 0) {
        if (valorS >= -10 && valorS <= 0) {
            valorS = -110;
        } else {
            valorS = valorS + '0';
        }
        $('#most' + sl).val(valorS);
        switch (sl) {
            case '1':
                res1 = (val * ((-1 * valorS) / 100)) / 100;
                $('#most1').attr('canti', res1);
                break;
            case '2':
                res2 = (val * ((-1 * valorS) / 100)) / 90;
                $('#most2').attr('canti', res2);
                break;
            case '3':
                res3 = (val * ((-1 * valorS) / 100)) / 85;
                $('#most3').attr('canti', res3);
                break;
            case '4':
                res4 = (val * ((-1 * valorS) / 100)) / 80;
                $('#most4').attr('canti', res4);
                break;

            default:
                break;
        }

    } else {

        if (valorS <= 10 && valorS >= 0) {
            valorS = 110;
        } else {
            valorS = valorS + '0';
        }

        switch (sl) {
            case '1':
                res1 = valorS * ((val / 100));
                $('#most1').attr('canti', res1);
                break;
            case '2':
                res2 = valorS * ((val / 100));
                $('#most2').attr('canti', res2);
                break;
            case '3':
                res3 = valorS * ((val / 100));
                $('#most3').attr('canti', res3);
                break;
            case '4':
                res4 = valorS * ((val / 100));
                $('#most4').attr('canti', res4);
                break;

            default:
                break;
        }


        $('#most' + sl).val('+' + valorS);
    }

    res1 = parseInt($('#most1').attr('canti'));
    res2 = parseInt($('#most2').attr('canti'));
    res3 = parseInt($('#most3').attr('canti'));
    res4 = parseInt($('#most4').attr('canti'));
    res = res1 + res2 + res3 + res4;

    $('#TotalM').val(res);

});


function ocultarSecciones() {
    $("#NFLT").hide();
    $("#NCAAFT").hide();
    $("#NCAABT").hide();
    $("#NBAT").hide();
    $("#NHLT").hide();
    $("#MLBT").hide();
    $("#CalculadoraT").hide();
    $('#MostT').hide();
    $('#trendsT').hide();
    $('#wagersT').hide();
}

$('.MbTN').on('click', function(e) {

    $('.clen').html(' ');

    e.preventDefault()

    $('.MbTN').removeClass('active');
    $(this).addClass('active');

    ocultarSecciones();
    var id = $(this).attr('id');

    if (id == 'Calculadora') {
        $('#btnT').click();
    }

    if (id == 'trends') {
        resp = '<center><img src="./asset/icon/load.gif"></center>';
        $('#' + id + 'mos').html(resp);

        $.ajax({
            url: "./carga/" + id + ".php",
            type: "POST",
            data: {},
            success: function(respuesta) {

                console.log(id);
                $('#' + id + 'mos').html(respuesta);
                $('.container-header .nav').hide();
                $('.article').hide();
            },
            error: function(xhr, status) {
                alert("Error en metodo AJAX");
            },
        });
    }
    if (id == 'wagers') {
        resp = '<center><img src="./asset/icon/load.gif"></center>';
        $('.' + id).html(resp);

        $.ajax({
            url: "./carga/" + id + ".php",
            type: "POST",
            data: {},
            success: function(respuesta) {

                console.log(id);
                $('.' + id).html(respuesta);
                $(".filters-print").each(function() {
                    $(this).hide();
                });
            },
            error: function(xhr, status) {
                alert("Error en metodo AJAX");
            },
        });
    }

    $("#" + id + 'T').show();
    id = id.toLowerCase();
    $('#' + id + '-general').click();
});

$(".option").click(function() {
    $(".option").removeClass("active");
    $(this).addClass("active");

});