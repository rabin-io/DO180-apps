<?php

 print "Hello, World! php version is " . PHP_VERSION . "\n";
 print "You are connected from " . $_SERVER['REMOTE_ADDR'] . "\n";

 echo "<pre>"
	 print_r($_SERVER);
 echo "</pre>"
