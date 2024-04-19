<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Nivek PC</title>
</head>
<body>
    
    <section id="header">
        <a href="index.html"><img src="logo.png" class="logo" alt="" width="200px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a class = "active" href="shop.html">Shop</a></li>
                <li><a href="Service.html">Service</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="account.html">Account</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa fa-outdent"></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/p2.png" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/p2.png" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="product/p1.png" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="product/p3.png" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="product/p2.png" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details" class="section-p1">
            <h6>Home / Ram</h6>
                <h4>Kingston FURY Beast RGB 16GB (2x8GB) DDR4</h4>
                <h2>Php 300.00</h2>
                <select>
                    <option>Select Ram</option>
                    <option>8gb 3200mhz DDR4</option>
                    <option>16gb 3200mhz DDR4</option>
                    <option>8gb 2400mhz DDR4</option>
                    <option>16gb 2400mhz DDR4</option>
                    <option>8gb 4800mhz DDR5</option>
                </select>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span class="hello">The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per
                sq. yd. fabric constructed from 100% cotton, this classic fit preshrunk
                jersey knit provides unmatched comfort with each wear. Featuring a taped neck
                and shoulder, and a seamless double-needle collar, and available in a range
                of colors, it offers it all in the ultimate head-turning package.</span>
        </div>
        </section>

    <section id="product1" class="section-p1">
            <h2>Featured Products</h2>
            <p>For a Better Gaming Experience</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="images/p2.png" alt="">
                    <div class="des">
                        <span>Kingston</span>
                        <h5>Kingston FURY Beast RGB 16GB (2x8GB) DDR4</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Php 300.00</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-plus cart"></i></a>
                </div>
    
                <div class="pro">
                    <img src="images/p2.png" alt="">
                    <div class="des">
                        <span>Kingston</span>
                        <h5>Kingston FURY Beast RGB 16GB (2x8GB) DDR4</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Php 300.00</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-plus cart"></i></a>
                </div>
    
                <div class="pro">
                    <img src="images/p1.jpg" alt="">
                    <div class="des">
                        <span>Kingston</span>
                        <h5>Kingston FURY Beast RGB 16GB (2x8GB) DDR4</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Php 300.00</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-plus cart"></i></a>
                </div>
    
                <div class="pro">
                    <img src="images/p2.png" alt="">
                    <div class="des">
                        <span>Kingston</span>
                        <h5>Kingston FURY Beast RGB 16GB (2x8GB) DDR4</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Php 300.00</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-plus cart"></i></a>
                </div>
            </div>
    </section>

    <section id="newsletter" class="section-p1 section-m2">
        <div class="newstext">
            <h4>Sign Up For Updates</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div> 
    </section> 

    <footer class="section-p2">
        <div class="col">
            <img class="logo" src="logo.png" alt="" width="200px">
            <h4>Contact</h4>
            <p><strong>Address: </strong> 826 Don Soriano Ave. Balayhangin Calauan Laguna, Calauan, Philippines</p>
            <p><strong>Phone:</strong> 0945 973 1833</p>
            <p><strong>Hours:</strong> Monday to Saturday 9:00 am to 6:00 pm</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
                <a href="#">About us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a> I
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Payments</h4>
            <p>Secured Payment Gateways </p>
            <img src="images/pay.png" alt="">
        </div>

        <div class="copyright">
            <p class="copyright-text">© 2024, Nivek PC Repairs</p>
        </div>
    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick= function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick= function() {
            MainImg.src = smallimg [1].src;
        }
        smallimg [2].onclick=function() {
            MainImg.src = smallimg [2].src;
        }
        smallimg[3].onclick= function() {
            MainImg.src=smallimg[3].src;
        }
    </script>

    <script src="script.js"></SCript>
</body>
</html>