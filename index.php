<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

<?php 

$conn = mysqli_connect('localhost', 'root', 'root', 'crud') or die('connection failed');

$sql = "SELECT * FROM students JOIN student_class WHERE students.class = student_class.class_id";
$result = mysqli_query($conn, $sql) or die('query unsuccessfull');

  if(mysqli_num_rows($result) > 0) { ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
<?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['class_name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
<?php } ?>
        </tbody>
    </table>
 <?php }

?>


</div>
</div>
</body>
</html>
