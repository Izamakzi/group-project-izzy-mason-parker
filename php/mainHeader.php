<?php
    include 'sql/our_db/db.php';
?>

<html lang="en">
    <head>
        <title>Imp Trading</title>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
       <header>    
           <div class="topHeaderRow">
               <div class="nav">
                   <div class="dropdown">
                        <button class="dropbtn" style="font-family: 'Staatliches', cursive;"><span class="glyphicon glyphicon-user"></span> Profile
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content" style="font-family: 'Staatliches', cursive;">
                          <a href="userPost.php">My Posts</a>
                          <a href="wishlist.php">My Wishlist</a>
                          <a href="#">Logout</a>
                        </div>
                     </div>
               </div>
           </div>
           <div class="bottomHeader">
               <div><a href="home.php"><img src="images/imp.png" class="logo"></a></div>
               <div class="name"><h2>Imp Trading<br><p>Devilishly Good Prices</p></h2></div>
               <div class="submitForm">
                   <form class="navbar-form" >
                     <input type="text"  placeholder="Search">
                     <button class="input-group" type="submit" id="submit" style><span class="glyphicon glyphicon-search"></span></button>
                   </form> 
               </div>  
           </div>
 
        </header>