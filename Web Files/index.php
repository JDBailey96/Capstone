
<!-- Index.php page file --> 

<!Doctype html> 
<html>


<!-- css files link -->
<style>
<?php include 'nav.css'; ?>
<?php include 'slideshow.css';?>
</style> 

<!-- header bar -->
<header> 
	<ul>
<li><a href=""> Home</a></li>  
<li><a href="/downloads.php">Downloads</a></li> 
<li><a href="https://github.com/JDBailey96/Capstone" target="_blank" >GitHub</a></li>
<li><a href="https://baileycapstone.wordpress.com/" target="_blank">Blog</a></li> 
<li><a href="/phpmyadmin">PHPMyAdmin</a></li>  
</header>

<!-- Body welcome message -->

<body> 
<p> </p> 
	<?php

	echo "Welcome to My Capstone Project!";
	//echo <a target="_blank" href="https://baileycapstone.wordpress.com/">testing link</a>
	

	?>


<!--
Code for a slideshow on the index page

Goes unusued as I am unsure as to what I want to do with it, also it is not really necessary for the project, just eye candy


-->


<!-- Slideshow -->

<!--
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="1.png" style="width:100%">
  <div class="text">Caption Text</div> 

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2.jpg" style="width:100%">
< <div class="text">Caption Two</div> 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="3.jpg" style="width:100%">
  <div class="text">Caption Three</div> 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
-->


</body>
</html> 

