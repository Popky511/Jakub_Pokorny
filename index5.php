<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
    Debugger::enable();
    Debugger::$strictMode = true;
    dump ("Ahoj");
    dump(15);
    ?>