<?php 
	include("header.php");
	$table=mysqli_query($conn,"select * from register");
?>
<html>
	<head>
		<title>Users</title>
		<script>
	
		function chksingle()
		{
			//alert(this.value)
		
		$(document).on('click', 'frm', function() {
    var i = $(this).attr('chk0');
    alert(i);
		});		
		}
		</script>
		 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="tablecss/fonts/icomoon/style.css">

    <link rel="stylesheet" href="tablecss/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tablecss/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="tablecss/css/style.css">
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
          xmlhttp.open("GET","userssearch.php?name=" + str, true);
          xmlhttp.send();
        }
      }
    </script>

	</head>
	<body>
    <br />
		<form name="frm">

			  <div class="content">
    
    <div class="container">
      <div class='container mb-2 mt-1'>
        <div class="row">
        <div class="col-4"></div>   
            <div class="col-4">   
                <form class="d-flex" role="search">
                    <input class="form-control me-2" onkeyup="showHint(this.value)" type="search" name="search" id="search" placeholder="Search by name" aria-label="Search">
                  <!--  <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
            </div>
            <div class="col-4"></div>
        </div>
      </div>

      <div class="table-responsive">

        <table class="table table-striped custom-table" id="data">
          <thead>
            <tr>
             
              <th scope="col">User ID</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Contact No</th>
              <th scope="col">Company Name</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
		  <?php
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
            
          </tbody>
        </table>
      </div>
    </div>
  </div>

    <script src="tablecss/js/jquery-3.3.1.min.js"></script>
    <script src="tablecss/js/popper.min.js"></script>
    <script src="tablecss/js/bootstrap.min.js"></script>
    <script src="tablecss/js/main.js"></script>
		
		</form>
	</body>
</html>