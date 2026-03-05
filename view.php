<?php
include "db.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Email</th>
<th>Phone</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "</tr>";
}

echo "</table>";
?>