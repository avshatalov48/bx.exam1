<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;
?>
</div>
</div>
<!-- /content -->

<!-- side -->
<div class="side">

    <!-- side menu -->
    <? if (!$bIsMain): ?>
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "left",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "COMPONENT_TEMPLATE" => "left"
            ),
            false
        ); ?>
    <? endif; ?>
    <!-- /side menu -->

    <!-- side anonse -->
    <div class="side-block side-anonse">
        <div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
        <div class="item">
            <p>Клиенты предпочитают все больше эко-материалов.</p>
        </div>
    </div>
    <!-- /side anonse -->

    <!-- side wrap -->
    <div class="side-wrap">
        <div class="item-wrap">
            <!-- side action -->
            <div class="side-block side-action">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action-bg.jpg" alt="" class="bg">
                <div class="photo-block">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action.jpg" alt="">
                </div>
                <div class="text-block">
                    <div class="title">Акция!</div>
                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                    </p>
                </div>
                <a href="" class="btn-more">подробнее</a>
            </div>
            <!-- /side action -->
        </div>

        <!-- footer rew slider box -->
        <div class="item-wrap">
            <div class="rew-footer-carousel">
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магзине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магазине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / footer rew slider box -->
    </div>
    <!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->

<!-- footer -->
<footer class="footer">
    <div class="inner-wrap">
        <nav class="main-menu">
            <div class="item">
                <div class="title-block">О магазине</div>
                <? $APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "bottom",    // Тип меню для первого уровня
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                ); ?>
            </div>
            <div class="item">
                <div class="title-block">Каталог товаров</div>
                <ul>
                    <li><a href="">Кухни</a>
                    </li>
                    <li><a href="">Гарнитуры</a>
                    </li>
                    <li><a href="">Спальни и матрасы</a>
                    </li>
                    <li><a href="">Столы и стулья</a>
                    </li>
                    <li><a href="">Раскладные диваны</a>
                    </li>
                    <li><a href="">Кресла</a>
                    </li>
                    <li><a href="">Кровати и кушетки</a>
                    </li>
                    <li><a href="">Тумобчки и прихожие</a>
                    </li>
                    <li><a href="">Аксессуары</a>
                    </li>
                    <li><a href="">Каталоги мебели</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contacts-block">
            <div class="title-block"><?= Loc::getMessage("FOOTER_CONTACTS_INFORMATION"); ?></div>
            <div class="loc-block">
                <div class="address">ул. Летняя, стр.12, офис 512</div>
                <div class="phone">
                    <?
                    $APPLICATION->IncludeFile(
                        SITE_DIR . "include/phone.php",
                        Array(),
                        Array("MODE" => "html")
                    );
                    ?>
                </div>
            </div>
            <div class="main-soc-block">
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc01.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc02.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc03.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc04.png" alt="">
                </a>
            </div>
            <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>

</html>