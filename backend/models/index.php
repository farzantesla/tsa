<?php
$Get_url = "http://" . $_SERVER['HTTP_HOST'];
echo $Get_url;
?>

<script>
    window.location.href = '<?php echo $Get_url; ?>/tsa';
    </script>