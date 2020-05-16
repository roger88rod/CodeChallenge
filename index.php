<?php
for ($i=1; $i <=100 ; $i++) { 
	if ($i%3===0 && $i%5===0) {
		echo nl2br ("DiningEdge\n");
	}
	switch ($i)  {
		case ($i%3 ==0):
			echo nl2br ("Dining\n");
		break;
		case  ($i%5==0):
			echo nl2br ("Edge\n");
		break;
	default:
		print "$i \n";
		break;
	}
}
?>
