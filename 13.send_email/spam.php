<?php

$numbers = array(0,1,2,3,4,5,6,7,8,9);

$letters = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
$letters = explode(" ", $letters);

foreach ($letters as $l1) {
	foreach ($letters as $l2) {
		foreach ($numbers as $n1) {
			foreach ($numbers as $n2) {
				foreach ($numbers as $n3) {
					foreach ($numbers as $n4) {
						$address = $l1 . $l2 . $n1 . $n2 . $n3 . $n4 . "@nyu.edu";
						print($address);
						print("<br />");
					}
				}
			}

		}
	}
}

?>