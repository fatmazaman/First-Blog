<?php 
include ('../Model/blog.php');
$result=selectdata();
?>
<html>
<body>
	<?php foreach ($result as $value) {
	 ?>
      <h3>Name:<?php echo $value['name']; ?></h3>
      <h4>Title:<?php echo $value['title']; ?></h4>
      <p>Blog:<?php echo $value['blog']; ?></p>
     
<?php
 } ?>
</body>
</html>