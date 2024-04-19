<!DOCTYPE HTML>
<html>
<head>
	<title>Admin - Dashboard</title>
	<link rel="stylesheet" href="manage_product.css">		
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

		

	
		<form action="" class="search-bar">
			<input type="search" name="search" pattern=".*\S.*" required>
			<button class="search-btn" type="submit">
				<span>Search</span>
			</button>
		</form>
		
	<h2 class="product-heading">Product List</h2> 

	<div class="table-container">
		<table>
			<thead>
			<tr>
				<th>#</th>
				<th>Image</th>
				<th>Product</th>
				<th>Product ID</th>
				<th>Price</th>
				<th>Brand</th>
				<th>Category</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>1</td>
				<td><img src="/product_images/product1.jpg" alt="Product Image" class="product-img"></td>
				<td>PNY NVIDIA® GeForce RTX 3060 </td>
				<td>PRD001</td>
				<td>₱ 18,200</td>
				<td>NVIDIA</td>
				<td>Graphics Card</td>
				<td>Active</td>
				<td>
				
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td><img src="/product_images/product2.jpg" alt="Product Image" class="product-img"></td>
				<td>AMD Ryzen 5 5600G</td>
				<td>PRD002</td>
				<td>₱ 6,702</td>
				<td>Amd Ryzen</td>
				<td>Desktop Processor</td>
				<td>Active</td>
				<td>
				
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td><img src="/product_images/product3.jpg" alt="Product Image" class="product-img"></td>
				<td>Silver Stone ST60F-ES230 600W</td>
				<td>PRD002</td>
				<td>₱ 2,000</td>
				<td>SilverStone</td>
				<td>PSU</td>
				<td>Active</td>
				<td>
				
					<button class="action-button">
						Edit
					</button>
				
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td><img src="/product_images/product4.webp" alt="Product Image" class="product-img"></td>
				<td>Team Elite TForce Delta 16gb 2x8 3200mhz</td>
				<td>PRD002</td>
				<td>₱ 3,000</td>
				<td>TForce</td>
				<td>RAM</td>
				<td>Active</td>
				<td>
					
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td><img src="/product_images/product5.png" alt="Product Image" class="product-img"></td>
				<td>Gigabyte GTX1660 Super 6G </td>
				<td>PRD002</td>
				<td>₱ 12,250</td>
				<td>Gigabyte</td>
				<td>Graphics Card</td>
				<td>Active</td>
				<td>
				
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>6</td>
				<td><img src="/product_images/product6.png" alt="Product Image" class="product-img"></td>
				<td>Inplay Meteor 03 White</td>
				<td>PRD002</td>
				<td>₱ 1,020</td>
				<td>Inplay</td>
				<td>PC</td>
				<td>Active</td>
				<td>
					
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>7</td>
				<td><img src="/product_images/product7.jpg" alt="Product Image" class="product-img"></td>
				<td>NZXT F120 RGB Duo Fans</td>
				<td>PRD002</td>
				<td>₱ 1,350</td>
				<td>NZXT</td>
				<td>Cooling fans</td>
				<td>Active</td>
				<td>
					
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>8</td>
				<td><img src="/product_images/product8.png" alt="Product Image" class="product-img"></td>
				<td>ASUS TUF B450M-PRO Gaming II AM4 Micro ATX Motherboard</td>
				<td>PRD002</td>
				<td>₱ 7,232</td>
				<td>ASUS</td>
				<td>Motherboard</td>
				<td>Active</td>
				<td>
					
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>9</td>
				<td><img src="/product_images/product9.png" alt="Product Image" class="product-img"></td>
				<td>1tb seagate barracuda </td>
				<td>PRD002</td>
				<td>₱ 1,950</td>
				<td>Barracuda</td>
				<td>SSD</td>
				<td>Active</td>
				<td>
					
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			<tr>
				<td>10</td>
				<td><img src="/product_images/product10.webp" alt="Product Image" class="product-img"></td>
				<td>Deepcool digital ak500s</td>
				<td>PRD002</td>
				<td>₱ 2,350</td>
				<td>DeepCool</td>
				<td>CPU Air Cooler</td>
				<td>Active</td>
				<td>
					
					<button class="action-button">
						Edit
					</button>
					
					<button class="action-button">
						Delete
					</button>
				</td>
			</tr>
			</tbody>
		</table>
	</div>


	<div class="pagination:container">
		<div class="pagination:number arrow">
		  <svg width="18" height="18">
			<use xlink:href="#left" />
		  </svg>
		  <span class="arrow:text">Previous</span> 
		</div>
		
		<div class="pagination:number">
		  1
		</div>
		<div class="pagination:number">
		  2
		</div>
		
		<div class="pagination:number pagination:active">
		  3
		</div>
		
		<div class="pagination:number">
		  4
		</div>
		
		<div class="pagination:number">
		  100
		</div>
		
		<div class="pagination:number arrow">
		  <svg width="18" height="18">
			<use xlink:href="#right" />
		  </svg>
		</div>
	  </div>
	  
	  <svg class="hide">
		<symbol id="left" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></symbol>
		<symbol id="right" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></symbol>
	  </svg>



	  <?php include_once 'sidenav.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="mp.js"></script>
<script src="adminpanel.js"></script>

</body>
</html>
