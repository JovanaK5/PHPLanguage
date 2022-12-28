<!DOCTYPE html>
<html>
<head>
	
	<title> PHP and HTML</title>
</head>
<body>

	<h1> PHP in HTML</h1>

	<!-- SAMPLE 1 -->
	<p>Sample 1:Text printed from PHP</p>

	<!-- SAMPLE 2 -->
	<p>Sample 2:Text printed from PHP</p>

	<!-- SAMPLE 3 -->
	<p style="color: blueviolet;">Sample 3:Blue text printed from PHP</p>

	<p <?=' style="color: blueviolet;"'?>>Sample 3:Blue text printed from PHP</p>

	<!-- SAMPLE 4 -->
	<?="<p>" ?>

	Sample 4:Text printed from PHP

	<?= "</p>"?>


</body>
</html>