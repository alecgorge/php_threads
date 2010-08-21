<?php
error_reporting(E_ALL);

if (!extension_loaded('threads'))
    dl('php_threads.dll');

// thread_set('thread', array('x'));
// thread_set('thread2', array('y'));

echo "MASTER: Starting new thread\n";


//thread_start('thread');
thread_include(dirname(__FILE__) . '/thread.php');
thread_include(dirname(__FILE__) . '/thread2.php');

echo "\n\nMASTER: Done!\n\n";

function thread() {
    echo "||||In Threads! \n";
}
