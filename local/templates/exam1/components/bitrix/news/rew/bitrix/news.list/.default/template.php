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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="review-text">

            <div class="review-block-title">
                <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                    <span class="review-block-name">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                        <? echo $arItem["NAME"] ?>
                    </a>
                </span>
                <? endif; ?>
                <span class="review-block-description">
                    <? //<Дата> ?>
                    <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                        <? echo $arItem["DISPLAY_ACTIVE_FROM"] ?> г.,
                    <? endif ?>
                    <? //<Должность> ?>
                    <? if ($arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]): ?>
                        <?= ucfirst($arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]); ?>,
                    <? endif ?>
                    <? //<Название компании> ?>
                    <? if ($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]): ?>
                        <?= $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]; ?>
                    <? endif ?>
                </span>
            </div>

            <? //<Превью> ?>
            <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                <div class="review-text-cont">
                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                </div>
            <? endif; ?>
        </div>

        <? //<Фото> ?>
        <? if ($arParams["DISPLAY_PICTURE"] != "N"): ?>
            <div class="review-img-wrap">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                    <? if (is_array($arItem["DETAIL_PICTURE"])): ?>
                        <?php
                        $arImage = CFile::ResizeImageGet(
                            $arItem["DETAIL_PICTURE"]["ID"],
                            ["width" => 68, "height" => 50],
                            BX_RESIZE_IMAGE_EXACT,
                            true
                        );
                        ?>

                        <img src="<?= $arImage["src"] ?>"
                             width="<?= $arImage["width"] ?>"
                             height="<?= $arImage["height"] ?>"
                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                             title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                    <? else: ?>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/rew/no_photo.jpg" alt="img">
                    <? endif; ?>
                </a>
            </div>
        <? endif ?>
    </div>
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>