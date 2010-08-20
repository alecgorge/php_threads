<?php

$array = thread_get('mySharedVar');

#echo "THREAD: Print_r'ing the var\n"
print_r($array);
//sleep(5);
for($x = 0; $x < 2000; $x++) {
	echo "x";
	usleep(50);
}
echo "THREAD: Done!\n";
