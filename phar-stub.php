#!/usr/bin/env php
<?php

$app = require "phar://phar.phar/bootstrap.php";
echo $app->run();

__HALT_COMPILER();
