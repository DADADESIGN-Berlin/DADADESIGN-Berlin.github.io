<?php
// Page.php
?>
<!DOCTYPE html>
<html>
<head>
<title>DADADESIGN | PHPMiniFrame | <?php echo ucfirst($_GET['view']) ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="Christian Schoepp">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="This is a PHP minimal framework for TYPO3 Prototyping.">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="Css/reset.css" rel="stylesheet">
<link href="Css/style.css" rel="stylesheet">

</head>
<body>

<?php
include 'Partials/Navigation.php';
?>

<?php
switch($_GET['view']){

	case 'startseite':
		include 'Templates/Startseite.php';
		break;

	case 'about':
		include 'Templates/About.php';
		break;

	case 'kontakt':
		include 'Templates/Kontakt.php';
		break;

}
?>

<?php
include 'Partials/Footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="Js/main.js"></script>

</body>
</html>


