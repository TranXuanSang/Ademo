<div class="wellcome">
<?php
$page = isset($_GET['page']) ? $_GET["page"] : $home;
include ($page);
?>
</div>