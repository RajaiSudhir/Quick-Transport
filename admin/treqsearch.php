<tr>
     <th>Serial No</th>
     <th>Vehicle No</th>
     <th>Vehicle Location</th>
     <th>Vehicle Route</th>
     <th>Truck</th>
     <th>Truck Body</th>
     <th>Truck Tyre</th>
     <th>Container Body</th>
     <th>Container Tonne</th>
     <th>Trailer Body</th>
     <th>Hyva Tyres</th>
	 <th>Hyva Tonne</th>
     <th>LCV Capacity</th>
	 <th>Tanker Body</th>
	 <th>Tanker Capacity</th>
     <th>Date</th>
     <th>User Mail</th>
     <th>Request Status</th>
     <th>Hire Status</th>
    </tr>
<?php 
    include("header.php");
    $table=mysqli_query($conn,"select * from truck where truck like '$truck%'");
    while($row=mysqli_fetch_array($table))
    {
        echo"<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>"; 
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td>$row[6]</td>";
        echo "<td>$row[7]</td>";
        echo "<td>$row[8]</td>";
        echo "<td>$row[9] $row[10] $row[11]</td>";
        echo "<td>$row[12]</td>";
        echo "<td>$row[13]</td>";
        echo "<td>$row[14] $row[15] $row[16]</td>";
        echo "<td>$row[17]</td>";
		echo "<td>$row[18]</td>";
		echo "<td>$row[19]</td>";
		echo "<td>$row[20]</td>";

        if ($row['lockstatus']=="Disapprove")
            $status="Approve";
        else if ($row['lockstatus']=="Approve")
            $status="Disapprove";

		echo "<td><a class='btn btn-primary' href='truckstats.php?id=$row[0]&&status=$status'>$status</a></td>";
		
		if ($row['hire']=="Unhired")
            $hire="Hired";
        else if ($row['hire']=="Hired")
            $hire="Unhired";
        
        echo "<td><a class='btn btn-primary' href='hirestats.php?id=$row[0]&&hire=$hire'>$row[hire]</a></td>";

//        echo "<td><a href='truckstats.php?id=$row[0]&&status=$row[14]'>$row[14]</a></td>";
        echo "</tr>";
    }
 ?>