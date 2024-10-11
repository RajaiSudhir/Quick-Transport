<tr>
     <th>ID</th>
     <th>Price</th>
     <th>Truck Number</th>
     <th>Truck Capacity(tonnes)</th>
     <th>User Email</th>
     <th>Bidder Email</th>
     <th class='text-center'>Action</th>
    </tr>
<?php 
    include("header.php");
    $table=mysqli_query($conn,"select * from bidnow where truckcap like '$truckcap%'");
    while($row=mysqli_fetch_array($table))
    {
        $goodstab=mysqli_query($conn,"select * from goods where gid=$row[gid]");
        if(mysqli_num_rows($goodstab)>0)
          echo"<tr class='text-success'>";
        else
          echo "<tr class='text-danger'>";

        echo "<td>$row[bid]</td>";
        echo "<td>$row[price]</td>"; 
        echo "<td>$row[truckno]</td>";
        echo "<td>$row[truckcap]</td>";
        echo "<td>$row[email]</td>";
        echo "<td>$row[biddermail]</td>";
        echo "<td class='text-center'><a href='mailto:$row[biddermail]' class='btn btn-primary'>Contact Now</a> <a href='' class='btn btn-primary'>Delete Bid</a></td>";
        echo "</tr>";
    }
 ?>