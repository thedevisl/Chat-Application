<?php
include("config.php");
session_start();
$comm = mysqli_query($conn,"select name,comment,post_time from comments");
while($row=mysqli_fetch_array($comm)){
	$name=$row['name'];
	$comment=$row['comment'];
    $time=$row['post_time'];
?>
<div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
<?php
}
?>