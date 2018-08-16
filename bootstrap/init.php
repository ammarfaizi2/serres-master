<?php

if (! defined("INIT")) {
	define("INIT");

	require __DIR__."/../config/main.php";

	function internalAutoloader($class)
	{
		$class = str_replace("\\", "/", $class);

		if (file_exists($f = BASEPATH."/src/classes/".$class.".php")) {
			require $f;
		}
	}

	spl_autoload_register("internalAutoloader");
}
