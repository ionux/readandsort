<?php

(count($argv) != 2 || !file_exists($argv[1]))
    ? exit("\n\nUsage: wget -O - -q <remote php script> | php -- <input filename>\n\n")
    : system("cat " . $argv[1] . " | sort -V") . "\n";
