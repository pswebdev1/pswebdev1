<?php
include("/membri/jamal1234/incs/connect.php");
/*$filename = '/membri/jamal1234/stylesheet.css';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}*/
?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Masjid Almelo</title>
<link rel="icon" href="/images/moskee.png">

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/fontAwesomeCSS/all.css" >
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/opmaak.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/summernote.min.js"></script>
<script defer src="/fontAwesomeJS/all.js"></script>
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>-->
</head>
<body>
<!--<div class="top-balk"></div>-->
<div class="top-balk"></div>
<div class="image"> <img src="/images/mozaiek.jpg" width="100%"></div>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="centerbalk">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><b>Masjid Almelo</b></a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" id="myDIV">
					<ul class="nav navbar-nav" >
						<?
							$page = mysqli_query($con,"SELECT * FROM pages WHERE bovenliggendID = 0	");
							while($page2 = mysqli_fetch_assoc($page)){
								?>
									<li><a <? if($_GET["page"] == $page2["page_title"]){?> class="active"<?}?>  href="/<? echo $page2["page_title"]?>"><B><? echo $page2["page_title"]?> </b></a></li>
								<?
							}
						?>
					</ul>
					
				</div><!-- /.navbar-collapse -->
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<?
		if(strtolower($_GET["page"]) == "home" || strtolower($_GET["page"]) == "" ){
	?>
	<div class="centerBalk">
		<?
			include("/membri/jamal1234/pages/home.php");
		?>
	</div>
		<? }
		include("/membri/jamal1234/pages/pages.php");
	?>

<div class="container-fluid textkleur">
	<div class="footer">
		<div class="row" style="width: 100%;">
			
			<center>
			<div class="col-md-4">
				<h1>Adres</h1>
				<hr>
				<br>
				<table>
					<tr><td style="color:white;">Masjid Almelo</td></tr>
					<tr><td style="color:white;">Veldkampsweg 16</td></tr>
					<tr><td style="color:white;">7605 AR Almelo</td></tr>
				</table>
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d813.2568299724802!2d6.657514574291057!3d52.351973386073375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8062f7aab461d%3A0x97dddff9f7dff144!2sMasjid%20Almelo!5e0!3m2!1snl!2snl!4v1570620686053!5m2!1snl!2snl" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="col-md-4">
				<h1>Donaties</h1>
				<hr>
			</div>
			<div class="col-md-4">
				<h1><i class="fab fa-youtube" style="color: #EA4335;"></i> Youtube</h1>
				<hr>
			</div>
			
			</center>
		</div>
	</div>
</div>
<div class="copyright">
© Copyright Masjid Almelo 2019 - 2020 | Alle rechten voorbehouden.
</div>
</body>
</html>
