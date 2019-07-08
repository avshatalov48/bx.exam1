<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Актуальный опрос");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.current", 
	".default", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CHANNEL_SID" => "TESTGROUP",
		"VOTE_ALL_RESULTS" => "N",
		"VOTE_ID" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>