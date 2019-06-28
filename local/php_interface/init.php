<?php
/**
 * @const "Путь к корневой директории"
 */
define("ROOT_DIR", $_SERVER["DOCUMENT_ROOT"]);

/**
 * Автозагрузка (Composer)
 */
if (file_exists(ROOT_DIR . "/local/vendor/autoload.php")) {
    require_once(ROOT_DIR . "/local/vendor/autoload.php");
}

/**
 * Константы
 */
if (file_exists(ROOT_DIR . '/local/php_interface/consts.php')) {
    require_once(ROOT_DIR . '/local/php_interface/consts.php');
}