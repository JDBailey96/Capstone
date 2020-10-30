
<!doctype html>  
<html> 

<!-- css files -->
<style>
<?php include 'nav.css'; ?>
<?php include 'slideshow.css';?>
<?php include 'down.css';?>
</style> 

<!-- External Links Bar -->
<header> 
<ul> 
<li><a href="./ "> Home </a></li> 
<li><a href="/downloads.php">Downloads</a></li>  
<li><a href="https://github.com/JDBailey96/Capstone" target="_blank">GitHub</a></li>
<li><a href="https://baileycapstone.wordpress.com/" target="_blank">Blog</a></li> 
<li><a href="/phpmyadmin">PHPMyAdmin</a></li> 
</header> 



<!-- Data Dictionary Table -->
<title> File Downloads</title>  
</head> 


<h1> Downloads</h1> 
<h2> Data Dictionary</h2>

<?php
echo '
<table> 
<tr> 
<th>Name</th> 
<th>Version</th> 
<th>Upload Date</th> 
</tr> 

<tr> 
<td><a href="/Capstone_Dictionary.xlsx" download> Data Dictionary </td> 
<td> 1.0</td> 
<td> 10/13/2020</td> 
</tr> 
<!--
<tr> 
<td><a href="/test.txt" download> Data Dictionary </td> 
<td> 2.0</td> 
<td> 9/14/2020</td> 
</tr> 
-->

</table> 
	' ?>

<!-- EER Model Table -->
	<h2> EER Model</h2>

	<?php
	echo'
<table> 
	<tr> 
<th>Name</th> 
<th>Version</th> 
<th>Upload Date</th> 
</tr>
<tr> 
<td><a href="/Capstone-EER.jpg" download> EER Model</td> 
<td> 1.0</td> 
<td>9/30/2020</td> 
</tr> 

<tr> 
<td><a href="/Capstone_EER.dia" download> EER Model</td> 
<td>2.0</td> 
<td> 10/13/20200</td> 
</tr> 
</table> 

<!-- Upload Files -->
<form action="upload.php" method="post" enctype="multipart/form-data">
<p> Upload A File
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
'
?>

<!--</body> -->
</html> 


