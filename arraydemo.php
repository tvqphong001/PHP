<?php
	//require 'index.php';
	$a = array();
		$a[0] = 1;
		$a[1] = 2;
		$a[2] = 3;
		
	echo $a[1];	
	$b = array(1);
	echo "<br>";
	echo $b[0];
	$c = array("a"=>2, "b"=>4);
	echo "<br>";
	$countA = count($a);
	$countB = count($b);
	$countC = count($c);
	echo "<br>";
	//print_r($a);
	echo "Mảng A có : ".$countA.". Mảng B có: ".$countB.". Mảng C có: ".$countC;
 	
	echo "<br>";
	$web = array(
	    'PHP', 'ASP.NET', 'Ruby on Rail', 'CSS', 'HTML', 'Java'
	);
	 
	for($i = 0;$i < count($web); $i++)
	{
		echo $web[$i];
	}
	foreach( $web as $lang ) {
	    echo "$lang <br>";
}

?>

