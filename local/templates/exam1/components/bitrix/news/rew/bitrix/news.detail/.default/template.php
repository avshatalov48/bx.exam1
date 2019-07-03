<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="review-block">
    <div class="review-text">
        <? if ($arResult["DETAIL_TEXT"]): ?>
            <div class="review-text-cont">
                <?= $arResult["DETAIL_TEXT"]; ?>
            </div>
        <? endif; ?>

        <div class="review-autor">
            <? //<Имя> ?>
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
                <?= $arResult["NAME"] ?>,
            <? endif; ?>
            <? //<Дата> ?>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
                <? echo $arResult["DISPLAY_ACTIVE_FROM"] ?> г.,
            <? endif ?>
            <? //<Должность> ?>
            <? if ($arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]): ?>
                <?= ucfirst($arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]); ?>,
            <? endif ?>
            <? //<Название компании> ?>
            <? if ($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]): ?>
                <?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]; ?>.
            <? endif ?>
        </div>
    </div>

    <? if ($arParams["DISPLAY_PICTURE"] != "N"): ?>
        <div style="clear: both;" class="review-img-wrap">
            <? if (is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                        src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                />
            <? else: ?>
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/rew/no_photo.jpg" alt="img">
            <? endif ?>
        </div>
    <? endif ?>
</div>

<? //<Документы> ?>
<? if ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["DISPLAY_VALUE"]): ?>
    <div class="exam-review-doc">
        <p>Документы:</p>
        <? //<Если файл один - другая структура массива> ?>
        <?
            if ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"]["ID"]) {
                $arFile = $arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"];
                $arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"] = [];
                $arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"][] = $arFile;
            }
        ?>
        <? foreach ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"] as $iFileId => $arFile): ?>
            <div class="exam-review-item-doc">
                <img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
                <a href="<?= $arFile["SRC"] ?>" target="_blank">
                    <?= $arFile["ORIGINAL_NAME"] ?>
                </a>
            </div>
        <? endforeach; ?>
    </div>
<? endif ?>