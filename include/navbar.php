<?php
session_start(); // Start the session
?>

<style>
    /* Add active styling to the navigation link */
#navbar li.active a {
    color: hsl(93, 54%, 54%);
    font-weight: bold; /* Optionally, make the font bold */
}

#navbar li.active a::after,
#navbar li a:hover::after {
    content: "";
    width: 30%;
    height: 2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left: 20px; 
}

/* Styling for Account-related links */
#navbar li#manage-account {
    margin-right: 20px; /* Adjust spacing between menu items */
}

#navbar li#manage-account a,
#navbar li a[href="logout.php"] {
    text-decoration: none;
    color: #000000; /* Change link color as needed */
    position: relative;
}

#navbar li#manage-account a:hover,
#navbar li a[href="logout.php"]:hover {
    color: #088178; /* Change hover color as needed */
}

#navbar li#manage-account a::after,
#navbar li a[href="logout.php"]::after {
    content: "";
    width: 30%;
    height: 2px;
    background: #088178; /* Change hover color as needed */
    position: absolute;
    bottom: -4px;
    left: 20px; 
}

#navbar li a[href="logout.php"] {
    color: #ffffff; /* Change the color to white */
}

/* Dropdown Button */
.dropbtn {
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #331926;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}



</style>
    
<section id="header">
    <a href="index.php"><img src="logo.png" class="logo" alt="" width="200px"></a>
    <div>
    <ul id="navbar">
    <li <?php if(basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == '') echo 'class="active"'; ?>><a href="index.php">Home</a></li>
    <li <?php if(basename($_SERVER['PHP_SELF']) == 'shop.php') echo 'class="active"'; ?>><a href="shop.php">Shop</a></li>
    <li <?php if(basename($_SERVER['PHP_SELF']) == 'Service.php') echo 'class="active"'; ?>><a href="Service.php">Service</a></li>
    <li <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>><a href="about.php">About</a></li>
    <li <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>

    <?php
    // Check if user is logged in
    if(isset($_SESSION['email'])) {
        // Display different links for logged-in users
        echo '<li class="dropdown">';
        echo '<a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown(\'dropdown-content\')">Account</a>';
        echo '<div id="dropdown-content" class="dropdown-content">';
        echo '<a href="manage_account.php">Manage Account</a>';
        echo '<a href="logout.php" onclick="return confirm(\'Are you sure you want to log out?\')">Logout</a>';
        echo '</div>';
        echo '</li>';
    } else {
        // Display different link for non-logged-in users
        $activeClass = (basename($_SERVER['PHP_SELF']) == 'account.php') ? 'class="active"' : '';
        echo '<li ' . $activeClass . '><a href="account.php">Account</a></li>';
    }
?>

    <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
    <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
</ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fa fa-outdent"></i>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function toggleDropdown(id) {
    $("#" + id).toggle();
}
</script>