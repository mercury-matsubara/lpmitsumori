<!DOCTYPE html PUBLIC "-//W3C/DTD HTML 4.01">
<!-- saved from url(0013)about:internet -->
<!-- 
*------------------------------------------------------------------------------------------------------------*
*                                                                                                            *
*                                                                                                            *
*                                          ver 1.0.0  2014/05/09                                             *
*                                                                                                            *
*                                                                                                            *
*------------------------------------------------------------------------------------------------------------*
 -->

<html>
<?php
	session_start();
	require_once ("f_Button.php");
	require_once ("f_DB.php");
	require_once ("f_Form.php");
	require_once ("f_SQL.php");
	require_once("f_Construct.php");
	startJump($_GET);
	$form_ini = parse_ini_file('./ini/form.ini', true);
	
	
	
	$filename = $_SESSION['filename'];
	$tablenum = $form_ini[$filename]['use_maintable_num'];
	$code_value = "";
	$path = "";
	$result = array();
	$isout = false;
	$title = "";
	
	if(isset($_GET['code']))
	{
		$list_tablenum = $_GET['tablenum'];
		$code_value = $_GET['code'];
		$title = $form_ini[$list_tablenum]['table_title']."参照";
	}
	else
	{
		$isout = true;
	}
	if(isset($_GET['path']))
	{
		$path = $_GET['path'];
	}
?>
<head>
<title><?php echo $title ; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<link rel="stylesheet" type="text/css" href="./list_css.css">
<script src='./inputcheck.js'></script>
<script src='./generate_date.js'></script>
<script src='./pulldown.js'></script>
<script src='./jquery-1.8.3.min.js'></script>
<script src='./jquery.corner.js'></script>
<script src='./jquery.flatshadow.js'></script>
<script src='./button_size.js'></script>
<script language="JavaScript"><!--
	window.name = "Modal";																						//　submitボタンで更に子画面開かないように
	
	
	$(window).resize(function()
	{
		var w = $(window).width ();
		var h = $(window).height ();
		$('object').css({
			width : (w - 20),
			height : (h - 100)
		});
		$('table#link').css({
			width : (w - 20)
		});
		$('div.center').css({
			width : (w)
		});
	});

	$(function()
	{
		$(".button").corner();
		$(".free").corner();
		$("a.title").flatshadow({
			fade: true
		});
		var w = $(window).width ();
		var h = $(window).height ();
		$('object').css({
			width : (w - 20),
			height : (h - 100)
		});
		$('table#link').css({
			width : (w - 20)
		});
		$('div.center').css({
			width : (w)
		});
		set_button_size();
	});

	function closewindow()
	{
		close();
	}
// --></script>
</head>
<body>
<?php
	echo "<div class='center'><br>";
	echo "<a class = 'title'>".$title."</a><br><br>";
	if($isout == false)
	{
		$result = pdf_select($code_value,$list_tablenum,$tablenum);
		echo $result[0];
		if($path == '')
		{
			$path = $result[1];
		}
		if($path != '')
		{
			echo '<object data="'.$path.'"></object>';
		}
	}
	echo"</div>";
?>
</body>
</html>
