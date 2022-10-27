<?php
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<h3>Management</h3>
<hr style="background-color: blue; height:2px">
<a class="btn btn-primary" href="?page=categoryadd.php">New Category</a>
<hr/>
<table id="example" class="display dt-responsive nowrap" style="width:100%; background-color: white;">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Decription</th>
        <th></th>
    </tr>
</thead>
<tbody>
</tbody>
</table>