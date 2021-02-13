<?php
$detail    	   = $_POST['detail'];
$id    	   = $_POST['id'];

echo shell_exec('python details.py '.$id.' '.$detail.'');



?>

<script>
$('span').on('click', function (e) {
    e.preventDefault()
    id = $(this).attr('data-content');
    action = $(this).attr('data-action');
    
    if (action == 'radio') {
        $('[data-group="detail-tabs--'+id.substr(-5)+'"]').removeClass('active');
        $(id).toggleClass('active');        
    }

});
</script>