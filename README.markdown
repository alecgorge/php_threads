NOTICE
======

THIS HAS BEEN SUPERCEDED BY http://github.com/alecgorge/php_threading















This is highly experimental.
Run this only in CLI mode!
t
Example

master.php
<?php

$array = array(
0 => 'thread',
1 => 'hello',
2 => 'world');

thread_set('mySharedVar', $array);

thread_include('thread.php');

sleep(3);

echo 'Done';


?>

thread.php
<?php

$array = thread_get('mySharedVar');

print_r($array);

sleep(5);

echo 'Done';

?>

Do not load the extension with dl(). The thread-functions are working like normal SAPI calls
and creating a new context by calling php_startup_request(). Extensions loaded by dl() seems to be
bound to the calling request.

The example-code is working on WinXP (PHP-5.2.6 and 5.3) and Linux (Ubuntu 7.10/ PHP-5.2.6 GCC 4.1). 
OS X 10 is getting evaluated currently but it seems to be unstable.
