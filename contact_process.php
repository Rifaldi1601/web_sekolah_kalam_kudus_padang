<?php
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "<script>
        window.location.href='mailto:rifaldi160100@gmail.com?subject=$subject&body=$message'
</script>";