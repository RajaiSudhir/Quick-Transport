<?php 
	include("header.php");
    $table=mysqli_query($conn,"select * from contact order by id desc");
?>
<br/>
<br/><br/>
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
      xmlhttp.open("GET","fetchcontactus.php?name=" + str, true);
      xmlhttp.send();
    }
  }
</script>

<div class='container mb-2 mt-1'>
    <div class="row">
    <div class="col-4"></div>   
        <div class="col-4">   
            <form class="d-flex" role="search">
                <input class="form-control me-2" onkeyup="showHint(this.value)" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
              <!--  <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<table class="table table-striped" style="font-size: 14px;" id="data">
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
</table>