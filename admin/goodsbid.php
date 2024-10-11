<?php 
	include("header.php");
    $table=mysqli_query($conn,"select * from bidnow");
?>
<br/>
<br/><br/><br/>
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
      xmlhttp.open("GET","gbidsearch.php?truckcap=" + str, true);
      xmlhttp.send();
    }
  }

  </script>
  <script>

    function remove(){
      var r=confirm("Are you sure to delete your bid?");
      if(r==true)
        return true;
      else
        return false;

    }

  
</script>

<div class='container mb-3 mt-1'>
    <div class="row">
    <div class="col-4"></div>   
        <div class="col-4">   
            <form class="d-flex" role="search">
                <input class="form-control me-2" onkeyup="showHint(this.value)" type="search" name="search" id="search" placeholder="Search by capacity" aria-label="Search">
              <!--  <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<p><b>Note*: The red coloured bid says that the original goods has been deleted by the user and the bid has now become invalid.</b></p><br/>
<table class="table" style="font-size: 14px;" id="data">
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
    while($row=mysqli_fetch_array($table))
    {
        echo"<tr>";
        $goodstab=mysqli_query($conn,"select * from goods where gid=$row[gid]");
        if(mysqli_num_rows($goodstab)>0)
        {  
          echo "<td class='text-success'>$row[bid]</td>";
          echo "<td class='text-success'>$row[price]</td>"; 
          echo "<td class='text-success'>$row[truckno]</td>";
          echo "<td class='text-success'>$row[truckcap]</td>";
          echo "<td class='text-success'>$row[email]</td>";
          echo "<td class='text-success'>$row[biddermail]</td>";
        }
        else
        { 
          echo "<td class='text-light bg-danger'>$row[bid]</td>";
          echo "<td class='text-light bg-danger'>$row[price]</td>"; 
          echo "<td class='text-light bg-danger'>$row[truckno]</td>";
          echo "<td class='text-light bg-danger'>$row[truckcap]</td>";
          echo "<td class='text-light bg-danger'>$row[email]</td>";
          echo "<td class='text-light bg-danger'>$row[biddermail]</td>";
        }
        echo "<td class='text-center'><a href='mailto:$row[biddermail]' class='btn btn-primary'>Contact Now</a> <a href='gbiddelete.php?id=$row[0]' onclick='return remove()' class='btn btn-primary'>Delete Bid</a></td>";
        echo "</tr>";
    }
 ?>
</table>