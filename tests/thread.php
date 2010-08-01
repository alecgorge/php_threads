<?php

$array = thread_get('mySharedVar');

#echo "THREAD: Print_r'ing the var\n"
print_r($array);

echo "THREAD: Done!\n";
