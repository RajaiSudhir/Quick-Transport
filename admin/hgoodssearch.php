<tr>
     <th>Serial No</th>
     <th>Source Location</th>
     <th>Destination Location No</th>
     <th>Material Name</th>
     <th>Quantity</th>
     <th>Vehicle Type</th>
     <th>Truck Body</th>
     <th>Truck Tyre</th>
     <th>Container Body</th>
     <th>Trailer Body</th>
     <th>Hyva Tyres</th>
     <th>Tanker Body</th>
     <th>Rate</th>
     <th>Date</th>
     <th>User Mail</th>
     
     <th>Hire Status</th>
</tr>
<?php 
    include("header.php");
    $table=mysqli_query($conn,"select * from goods where mname like '$mname%'");
    while($row=mysqli_fetch_array($table))
    {
        echo"<tr>";
        echo "<td>$row[gid]</td>";
        echo "<td>$row[sloca]</td>"; 
        echo "<td>$row[dloca]</td>";
        echo "<td>$row[mname]</td>";
        echo "<td>$row[quan]</td>";
        echo "<td>$row[vtype]</td>";
        echo "<td>$row[tbody]</td>";
        echo "<td>$row[ttyre]</td>";
        echo "<td>$row[cbody]</td>";
        echo "<td>$row[trbody]</td>";
        echo "<td>$row[htyres]</td>";
        echo "<td>$row[tanbody]</td>";
        echo "<td>$row[rates]</td>";
        echo "<td>$row[postdate]</td>";
        echo "<td>$row[username]</td>";
        
        echo "<td><button class='btn btn-primary' disable>$row[hire]</button></td>";
        echo "</tr>";
    }
 ?>