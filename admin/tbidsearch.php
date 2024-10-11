<tr>
     <th>ID</th>
     <th>Price</th>
     <th>Material</th>
     <th>Quantity(tonnes)</th>
     <th>Loading City</th>
     <th>Unloading City</th>
     <th>User Email</th>
     <th>Bidder Email</th>
     <th class='text-center'>Action</th>
    </tr>
<?php 
    include("header.php");
    $table=mysqli_query($conn,"select * from truckbid where material like '$material%'");
    while($row=mysqli_fetch_array($table))
    {
        $trucktab=mysqli_query($conn,"select * from truck where id=$row[id]");
        if(mysqli_num_rows($trucktab)>0)
          echo"<tr class='text-success'>";
        else
          echo "<tr class='text-danger'>";

        
        echo "<td>$row[id]</td>";
        echo "<td>$row[price]</td>"; 
        echo "<td>$row[material]</td>";
        echo "<td>$row[quan]</td>";
        echo "<td>$row[lcity]</td>";
        echo "<td>$row[unlcity]</td>";
        echo "<td>$row[email]</td>";
        echo "<td>$row[biddermail]</td>";
        echo "<td class='text-center'><a href='mailto:$row[biddermail]' class='btn btn-primary'>Contact Now</a> <a href='' class='btn btn-primary'>Delete Bid</a></td>";
        echo "</tr>";
    }
 ?>