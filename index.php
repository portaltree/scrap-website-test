<?php
if (isset($_GET['url']) && !empty($_GET['url']) && isset($_GET['tl']) && !empty($_GET['tl'])){
	echo file_get_contents('https://translate.google.com/translate?sl=auto&tl='.$_GET['tl'].'&u='.$_GET['url']);
?>
<script>
    document.getElementById("wtgbr").innerHTML = " ";
    document.getElementById("gt-logo").innerHTML = " ";
    document.getElementById("gt-c").innerHTML = " ";
</script>
<?php
}
?>
