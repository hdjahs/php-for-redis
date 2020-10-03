<?php
define('BASE',realpath('./'));
define('CORE',BASE.'/core');
define('APP',BASE.'/app');
define('MODULE','app');
define('DEBUG',true);

error_reporting(E_ALL);

ini_set('display_errors', '1');

if(DEBUG){
	ini_set('display_error','On');
}else{
	ini_set('display_error','Off');
}

include CORE.'/common/function.php';

include CORE.'/base.php';

spl_autoload_register('\core\base::load'); 

\core\base::run();