<!DOCTYPE HTML>
<html>
  <head>
  <title>My online shop</title>
  <link rel="stylesheet" href="./styles/style.css" media="all">
  </head>
  <body>
   <!-- Main container starts here-->
   <div class="main_wrapper">
     <!-- Main header starts here-->
     <div class="header_wrapper">
       <!--<div class="row">
          <div class="column">
            <img id= "logo" src="images/logo.jpg" height="100px" width="500px">
          </div>
       <div class="column">
         <img id="banner" src="images/ad_banner.gif" height="100px" width="550px">
       </div>
       </div>
     </div>
   </div>
   -->

   <!--Navigation bar starts here-->
<div class="menubar">
    <ul id="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">All products</a></li>
      <li><a href="#">My account</a></li>
      <li><a href="#">Sign Up</a></li>
      <li><a href="#">Shopping Cart</a></li>
      <li><a href="#">Contact Us</a></li>
      <div id="form">
        <form action="result.php" method="get" enctype="multipart/form-data">
            <input type="text" name="user_query" placeholder="Search a product">
            <input type="submit" name="search" value="search">
        </form>
      </div>

    </ul>

 </div>
   <!--Navigation bar ends here-->

   <!--Content wrapper starts here-->
   <div class="content_wrapper">

   </div>
   <!--Content wrapper ends here-->

   <div id="sidebar">
        <div id="sidebar_title">Categories</div>
        <ul id="cats">
          <li><a href="#">Laptops</a></li>
          <li><a href="#">Mobiles</a></li>
          <li><a href="#">Clothes</a></li>
          <li><a href="#">Brands</a></li>
          <li><a href="#">Furnitures</a></li>
          <li><a href="#">Home Decor</a></li>

        </ul>



   </div>
   <div id="content_area">This is content area
   </div>

   <div id="footer">This is footer

   </div>
  </body>
</html>
