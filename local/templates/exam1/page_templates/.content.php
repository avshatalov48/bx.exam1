<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$TEMPLATE["inner.php"] = ["name" => GetMessage("TEMPLATE_PASSIVE_INNER"), "sort" => 1];