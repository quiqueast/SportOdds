<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python props.py '.$redi.'');

?>
<script>
$( "td > img" ).each(function() {
    redire = $( this ).attr( "data-src" );
    $( this ).attr( "src", redire );
});

$('span').on('click', function (e) {
    e.preventDefault()
    id = $(this).attr('data-content');
    $('#bet-type').toggleClass('active');
    grp = $(this).attr('data-group');
    action = $(this).attr('data-action');
    anchor = $(this).text();
    console.log(anchor);
    $('[data-group="'+grp+'"]').removeClass('active');
    $('span[data-action="select"][data-content="#bet-type"]').text(anchor);
    $('#bet-type').removeClass('active');
    $(id).toggleClass('active');    
});

</script>