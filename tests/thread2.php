<?php

$array = thread_get('mySharedVar');

#echo "THREAD: Print_r'ing the var\n"
print_r($array);
for($x = 0; $x < 2000; $x++) {
	echo "y";
	usleep(50);
}
echo "\nTHREAD: Done!\n";
