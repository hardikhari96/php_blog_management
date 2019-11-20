<?php

$uname = $_POST['uname'];
$pass = md5($_POST['pass']);

?>

<div> 

<h1> userame = <?php echo $uname ;?></h1>
<h1> Password = <?php echo $pass; ?></h1> 
</div>

<?php

?>