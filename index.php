<!DOCTYPE html>
<html>
    <head>
        <title>XYZ Restaurants Reward Page</title>
        <link rel="stylesheet" type="text/css" href="Styling.css">
    </head>
    <body>
    <div class="mainTitle">
        <div class="navbar">
            <img src="XYZCompanyLogo.png">
        </div> 
    </div>
        <div id = "menu">  
            <a href="HomepageLoggedOut.html">Home</a>
            <a href="ComingSoon.html">Restaurants</a>
            <a href="ComingSoon.html">About</a>
            <a href="ComingSoon.html">Contact</a>
	    <a href="login.php">Log in</a>
            <a href="form.html">Register</a>
		
        <br>
        <br>
    </div>
    <div class="openMenu" onclick="toggleMenu();">
    <img src="openmenu.png">    
    </div>
    <div class="footer">
        <h4>XYZ Company</h4>
        <h6>CS320 Class Project 2020</h6>
    </div>
  <script>
    function toggleMenu() {
          var x = document.getElementById("menu");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
    </script>
    </body>
</html>
