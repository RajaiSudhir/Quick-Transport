<?php 
	include("header.php");
	$table=mysqli_query($conn,"select * from truck");
?>
<br/><br/><br/><br/>
<script>
  function showHint(str) 
  {
    if (str.length == 0) {
      document.getElementById("data").innerHTML = "";
      return;
    } 
    else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("data").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","treqsearch.php?truck=" + str, true);
      xmlhttp.send();
    }
  }
</script>
<div class='container mb-2 mt-1'>
    <div class="row">
    <div class="col-4"></div>   
        <div class="col-4">   
            <form class="d-flex" role="search">
                <input class="form-control me-2" onkeyup="showHint(this.value)" type="search" name="search" id="search" placeholder="Search by truck type" aria-label="Search">
              <!--  <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<table class="table table-striped" style="font-size: 12px;" id="data">
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
</table>