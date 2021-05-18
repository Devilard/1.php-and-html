<?php
require_once("index.php");



	$link = "index2.php";

	$b = substr($a, 0, 180);
	$b = rtrim($b, "!,.-");

	$b = substr($b, 0, strrpos($b, ' '));
	
	echo "<br/>";
	

	$res = preg_split('/\s+/', $b);
	
	echo "<br>";

	$patfirst = '/'.$res[count($res)-2].'/';
	$patsecond = '/'.$res[count($res)-1].'/';

	$partarr = array();
	$partarr[0] = $patfirst;
	$partarr[1] = $patsecond;

	$repfirst = "<a href='".$link.'\''.'>'. $res[count($res)-2]."</a>";
	$repsecond = "<a href='".$link.'\''.'>'. $res[count($res)-1]."</a>";
	$reparr = array();
	$reparr[0] = $repfirst;
	$reparr[1] = $repsecond;

	
		echo preg_replace($partarr, $reparr, $b)."<a href='".$link.'>'.'...'.'</a>';
	
	

	

	
?>