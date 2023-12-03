<?php
for ($i = 1; $i <= 5; $i++) {
    $pid = pcntl_fork();
    if (!$pid) {
        echo "this $i\n";
        usleep(1000000);
        exit($i);
    }
}
while(pcntl_waitpid(0, $status) != -1); // Protect against Zombie children
?>