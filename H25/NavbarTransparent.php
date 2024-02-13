<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NavbarTransparent</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>pero</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>  
            <li><a href="NavbarTransparent.php?modul=home">Home</a></li>
            <li><a href="NavbarTransparent.php?modul=product">Product</a></li>
            <li><a href="NavbarTransparent.php?modul=blog">Blog</a></li>
            <li><a href="NavbarTransparent.php?modul=contact">Contact</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
      
        
    </header>

    <div id="tengah">
    <div id="test" style=" border: px solid;
    width: 100%; position:relative; top:100px; padding-bottom:100px;">
 
<div class="main-content">
<?php 
    if(!isset($_GET['modul'])){
        include "home.php";
    } else {
        $pages = $_GET['modul'];{
            if ($pages == "home"){
            include "home.php";
        }
        $pages = $_GET['modul'];
        if($pages == "product") {
            include "product.php";
        }
        $pages = $_GET ['modul'];
        if($pages == "blog"){
            include "blog.php";
        }
        $pages =  $_GET ['modul'];
        if($pages == "contact"){
            include "contact.php";
        }
    }
}


   ?> 




<!-- <?php 
    if(!isset($_GET['modul'])){
        include "blog.php";
    } else {
        if($pages == "home"){
            include "blog.php";
        }
    }
   ?>     

<?php 
    if(!isset($_GET['modul'])){
        include "contact.php";
    } else {
        if($pages == "home"){
            include "contact.php";
        }
    }
   ?>      -->
   </div>
</div>
   
</div>
 
</body>
</html>