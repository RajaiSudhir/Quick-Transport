<tr>
             
     <th scope="col">User ID</th>
     <th scope="col">Name</th>
     <th scope="col">Address</th>
     <th scope="col">Contact No</th>
     <th scope="col">Company Name</th>
     <th scope="col">Status</th>
</tr>
<?php 
    include("header.php");
    $table=mysqli_query($conn,"select * from register where fname like '$name%' or lname like '$name%'");
    while($row=mysqli_fetch_array($table))
		  {
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td class='pl-0'>
                <div class='d-flex align-items-center'>
                  <a href='profile.php?id=$row[0]' class='name'>$row[3] $row[4]</a>
                </div></td>";
              echo "<td>
                $row[1]
                <small class='d-block'>Far far away, behind the word mountains</small>
              </td>";
              echo "<td>$row[8]</td>";
              echo "<td>$row[5]</td>";
				  if ($row['lockstatus']=="Lock") 
				  	  $ls="Unlock";
				  else if($row['lockstatus']=="Unlock")
					  @$ls="Lock";
              echo "<td> <a href=unlock.php?id=$row[0]&lock=$ls> $ls</a></td>";
			 echo "</tr>";
		  }
 ?>