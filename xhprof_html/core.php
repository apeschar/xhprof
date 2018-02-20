<?php

$GLOBALS['XHPROF_LIB_ROOT'] = __DIR__ . '/xhprof_lib';

require_once $GLOBALS['XHPROF_LIB_ROOT'] . '/display/xhprof.php';

ini_set('max_execution_time', 100);

$config = require __DIR__ . '/config.php';

$xhprof_runs_impl = new XHProfRuns_Default($config['output_dir']);
