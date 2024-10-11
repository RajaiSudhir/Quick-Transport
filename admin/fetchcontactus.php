<tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Phone Number</th>
     <th>Subject</th>
     <th>Message</th>
     <th>Date</th>
     <th class='text-center'>Action</th>
</tr>
<?php 
    include("header.php");
    $table=mysqli_query($conn,"select * from contact where name like '$name%'");
    while($row=mysqli_fetch_array($table))
    {
        echo"<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>"; 
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td>$row[5]</td>";
        echo "<td class='text-center'><a href='callto:$row[pno]' class='btn btn-primary'>Call</a> <a href='mailto:$row[mail]' class='btn btn-primary'>Mail</a></td>";
        echo "</tr>";
    }
 ?>