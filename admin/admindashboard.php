<?php

include_once "../include/conn.php";

// Query to get the count of users
$stmt = $pdo->query("SELECT COUNT(*) as user_count FROM users");
$userCount = $stmt->fetchColumn(); // Fetch the count of users

// Check if the query was successful
if ($userCount !== false) {
    // Display the number of users
    $userCountHTML = "<p>$userCount<br/><span>Number of Users</span></p>";
} else {
    // Display an error message if the query fails
    $userCountHTML = "<p>Error fetching user count</p>";
}
?>

<!Doctype HTML>
	<html>
	<head>
		<title>Admin - Dashboard</title>
		<link rel="stylesheet" href="adminpanel.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php include_once 'sidenav.php'; ?>
	</head>
	<body>
		

	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
	</div>
		
		<div class="col-div-6">
            <div class="profile">
                <img src="avatar.png" class="pro-img" />
                <p>Adminstrator <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                <div class="profile-div">
                <p><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></p>
                </div>
            </div>
	</div>
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>
		
		<div class="col-div-3">
        <div class="box">
            <?php echo $userCountHTML; ?>
            <i class="fa fa-users box-icon"></i>
        </div>
    </div>
		<div class="col-div-3">
			<div class="box">
				<p>44<br/><span>Products</span></p>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>99<br/><span>Orders</span></p>
				<i class="fa fa-shopping-bag box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>20<br/><span>REPORT</span></p>
                <i class="fa fa-chart-bar box-icon"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<br/><br/>
		<div class="col-div-8">
			<div class="box-8">
			<div class="content-box">
				<p>Top Selling Products <span>Sell All</span></p>
				<br/>
				<table>
	  <tr>
	    <th>ITEM</th>
	    <th>BRAND</th>
	    <th>SELLS</th>
	  </tr>
	  <tr>
	    <td>NVIDIA GeForce RTX 4090	</td>
	    <td>GPU</td>
	    <td>20</td>
	  </tr>
	  <tr>
	    <td>NVIDIA GeForce RTX 2060 </td>
	    <td>GPU</td>
	    <td>15</td>
	  </tr>
	  <tr>
	    <td>ryzen 7 5800x</td>
	    <td>CPU</td>
	    <td>10</td>
	  </tr>
	  <tr>
	    <td>8x2 16gb rgb tforce delta 3200mhz</td>
	    <td>RAM</td>
	    <td>5</td>
	  </tr>
	  
	  
	</table>
			</div>
		</div>
		</div>

		<div class="col-div-4">
			<div class="box-4">
			<div class="content-box">
				<p>Total Sale <span>Sell All</span></p>

				<div class="circle-wrap">
	    <div class="circle">
	      <div class="mask full">
	        <div class="fill"></div>
	      </div>
	      <div class="mask half">
	        <div class="fill"></div>
	      </div>
	      <div class="inside-circle"> 50% </div>
	    </div>
	  </div>
			</div>
		</div>
		</div>
			
		<div class="clearfix"></div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
	<script src="adminpanel.js"></script>

	</body>
	</html>