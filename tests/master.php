<?php

if (!extension_loaded('threads'))
    dl('threads.so');

$array = array(
0 => 'thread',
1 => 'hello',
2 => 'world');

thread_set('mySharedVar', $array);

echo "MASTER: Starting new thread\n";


//thread_start('thread');
thread_include(dirname(__FILE__) . '/thread.php');

echo "MASTER: Done!\n";

function thread() {
    echo "In Threads! \n";
}
