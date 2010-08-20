<?php

if (!extension_loaded('threads'))
    dl('php_threads.dll');

$array = array(
0 => 'thread',
4 => 'hello',
2 => 'world');

thread_set('mySharedVar', $array);

echo "MASTER: Starting new thread\n";


thread_start('thread');
//var_dump(thread_include(dirname(__FILE__) . '/thread.php'));
//var_dump(thread_include(dirname(__FILE__) . '/thread2.php'));

sleep(1);
echo "MASTER: Done!\n";
exit();
function thread() {
    echo "||||In Threads! \n";
}
