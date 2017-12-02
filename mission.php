<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Our Mission<br></h2>
		<ul>
		<?php
		 if(isset($_SESSION['u_uid'])) {
			 
			 echo $_SESSION['u_first'];
		 } else {
			 echo "Hello reader";
		 }
		?>
, Whispering Winds Park offers a glimpse into the unique landscape of Central Colorado. We strive to provide a memorable and enjoyable experienced to all of our visitors and hope to see you here in the future!</ul>



	</div>
</section>

<?php
	include_once 'footer.php';
?>