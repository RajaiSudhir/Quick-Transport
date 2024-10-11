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
     <th>Request Status</th>
     <th>Hire Status</th>
    </tr>
<?php 
    include("header.php");
    $table=mysqli_query($conn,"select * from goods where vtype like '$vtype%'");
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
        if ($row['lockstatus']=="Disapprove")
            $status="Approve";
        else if ($row['lockstatus']=="Approve")
            $status="Disapprove";
        
        echo "<td><a href='req.php?id=$row[0]&&status=$status' class='btn btn-primary'>$status</a></td>";
        if ($row['hire']=="Unhired")
            $hire="Hired";
        else if ($row['hire']=="Hired")
            $hire="Unhired";
        
        
        echo "<td><a href='ghirestats.php?id=$row[0]&&hire=$hire' class='btn btn-primary'>$hire</a></td>";
        echo "</tr>";
    }
 ?>