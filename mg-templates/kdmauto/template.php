<?php
/**
 * Файл template.php является каркасом шаблона, содержит основную верстку шаблона.
 *
 *
 *   Получить подробную информацию о доступных данных в массиве $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <?php viewData($data); ?>
 *   </code>
 *
 *   Также доступны вставки, для вывода верстки из папки layout
 *   <code>
 *      <?php layout('cart'); ?>      // корзина
 *      <?php layout('auth'); ?>      // личный кабинет
 *      <?php layout('widget'); ?>    // виджиеы и коды счетчиков
 *      <?php layout('compare'); ?>   // информер товаров для сравнения
 *      <?php layout('content'); ?>   // содержание открытой страницы
 *      <?php layout('leftmenu'); ?>  // левое меню с категориями
 *      <?php layout('topmenu'); ?>   // верхнее горизонтаьное меню
 *      <?php layout('contacts'); ?>  // контакты в шапке
 *      <?php layout('search'); ?>    // форма для поиска
 *      <?php layout('content'); ?>   // вывод контента сгенерированного движком
 *   </code>
 * @author Авдеев Марк <mark-avdeev@mail.ru>
 * @package moguta.cms
 * @subpackage Views
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php mgMeta(); ?>
    <meta name="viewport" content="width=device-width">
    <?php mgAddMeta('<link href="' . PATH_SITE_TEMPLATE . '/css/owl.carousel.css" rel="stylesheet" type="text/css" />'); ?>
    <?php mgAddMeta('<link href="' . PATH_SITE_TEMPLATE . '/css/mobile.css" rel="stylesheet" type="text/css" />'); ?>
    <?php mgAddMeta('<link href="' . PATH_SITE_TEMPLATE . '/css/kdmauto.css" rel="stylesheet" type="text/css" />'); ?>
    <?php mgAddMeta('<script src="' . PATH_SITE_TEMPLATE . '/js/owl.carousel.js"></script>'); ?>    
    <?php mgAddMeta('<script src="' . PATH_SITE_TEMPLATE . '/js/jquery.cookie.js"></script>'); ?>
            <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-open-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=cyrillic">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-roboto" data-protected="true" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=cyrillic,cyrillic-ext,latin-ext">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-roboto-slab" data-protected="true" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&subset=cyrillic,cyrillic-ext,latin-ext">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-ek-mukta" data-protected="true" href="https://fonts.googleapis.com/css?family=Ek+Mukta:400,600,700">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-montserrat" data-protected="true" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,900&subset=cyrillic">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-alegreya-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,900&subset=cyrillic-ext,latin-ext">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-cormorant-infant" data-protected="true" href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,400i,600,600i,700,700i&subset=cyrillic-ext,latin-ext">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-pt-sans-caption" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=cyrillic-ext,latin-ext">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-pt-sans-narrow" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans:400,700&subset=cyrillic-ext,latin-ext">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-pt-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic-ext,latin-ext">
    <link rel="preload" as="style" onload="this.removeAttribute('onload');this.rel='stylesheet'" data-font="g-font-lobster" data-protected="true" href="https://fonts.googleapis.com/css?family=Lobster&subset=cyrillic-ext,latin-ext">
    <script type="text/javascript">
        let googleTranslateConfig = {
            lang: "ru",
        };

        function TranslateInit() {

            let code = TranslateGetCode();
            // Находим флаг с выбранным языком для перевода и добавляем к нему активный класс
            $('[data-google-lang="' + code + '"]').addClass('language__img_active');

            if (code == googleTranslateConfig.lang) {
                // Если язык по умолчанию, совпадает с языком на который переводим
                // То очищаем куки
                TranslateClearCookie();
            }

            // Инициализируем виджет с языком по умолчанию
            new google.translate.TranslateElement({
                pageLanguage: googleTranslateConfig.lang,
            });

            // Вешаем событие  клик на флаги
            $('[data-google-lang]').click(function () {
                TranslateSetCookie($(this).attr("data-google-lang"))
                // Перезагружаем страницу
                window.location.reload();
            });
        }

        function TranslateGetCode() {
            // Если куки нет, то передаем дефолтный язык
            let lang = ($.cookie('googtrans') != undefined && $.cookie('googtrans') != "null") ? $.cookie('googtrans') : googleTranslateConfig.lang;
            return lang.substr(-2);
        }

        function TranslateClearCookie() {
            $.cookie('googtrans', null);
            $.cookie("googtrans", null, {
                domain: "." + document.domain,
            });
        }

        function TranslateSetCookie(code) {
            // Записываем куки /язык_который_переводим/язык_на_который_переводим
            $.cookie('googtrans', "/auto/" + code);
            $.cookie("googtrans", "/auto/" + code, {
                domain: "." + document.domain,
            });
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <?php mgAddMeta('<script src="' . PATH_SITE_TEMPLATE . '/js/script.js"></script>'); ?>
<script type="text/javascript">
// function googleTranslateElementInit() {
//   new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'ru,uk,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
// }
</script>
</head>
<body <?php backgroundSite(); ?>>
<div class="wrapper <?php echo isIndex() ? 'main-page' : '';
echo isCatalog() && !isSearch() ? 'catalog-page' : ''; ?>">
    <!--Шапка сайта-->
    <div class="header">
        <div class="top-bar">
            <span class="menu-toggle"></span>

            <div class="centered">
                <!--/Social icon-->
                <?php layout('socialicon'); ?>
                <!--Вывод авторизации-->
                <div class="top-auth-block">
                    <div class="language">
                        <a class="language__img" href="javascript:void(0)" title="Українська!" data-google-lang="uk"><span class="headerLanguage__text">UA</span></a>
                        <span>&nbsp;|&nbsp;</span>
                        <a class="language__img" href="javascript:void(0)" title="Російська" data-google-lang="ru"><span class="headerLanguage__text">RU</span></a>
                    </div>
                    <?php layout('auth'); ?>
                </div>
                <!--/Вывод авторизации-->
                <div class="contacts">
                    <!--Вывод реквизитов сайта-->
                    <?php layout('contacts'); ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="bottom-bar">
            <div class="centered">
                <div class="header-left">
                    <!--Вывод логотипа сайта-->
                    <div class="logo-block">
                        <a href="<?php echo SITE ?>">
                            <?php echo mgLogo(); ?>
                        </a>
                      <!--<a class="add_fav" rel="sidebar" href="" onclick="return bookmark(this);" style="text-transform: uppercase;font-size: 16px;font-weight: 600;">Добавить в закладки</a>-->
                      <!--[add-favorite]-->
                    </div>
                    <div class="top-menu-block">
                        <!--Вывод верхнего меню-->
                        <?php layout('topmenu'); ?>
                        <!--/Вывод верхнего меню-->

                        <!--Вывод реквизитов сайта для мобильной версии-->
                        <?php layout('contacts_mobile'); ?>
                        <!--/Вывод реквизитов сайта для мобильной версии-->
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <!--Вывод корзины -->
               	 <?php //layout('cart'); ?>
                <!--/Вывод корзины-->
                
                <div class="clear"></div>
            </div>
        </div>
        <div class="container-wrap">
            <?php 
            $sql = "SELECT * FROM `".PREFIX."page` WHERE title='header'";
            $res = DB::query($sql);
            while ($row = DB::fetchRow($res)) {
                print_r($row[5]);
            }
            ?>
        </div>
    </div>
    <!--/Шапка сайта-->

    <!--Вывод горизонтального меню, если оно подключено в настройках-->
    <?php horizontMenu(); ?>
    <!--/Вывод горизонтального меню, если оно подключено в настройках-->

    <div>
        <!--Центральная часть сайта-->
        <div>

            <!--/Если горизонтальное меню не выводится и это не каталог, то вывести левое меню-->
            <?php if (horizontMenuDisable() && !isCatalog() || isSearch()): ?>
                <!--<div class="left-block">
                    <div class="menu-block">
                        <span class="mobile-toggle"></span>

                        <h2 class="cat-title">
                            <a href="<?php echo SITE ?>/catalog">Каталог товаров</a>
                        </h2>
                        <!-- Вывод левого меню-->
                        <?php //layout('leftmenu'); ?>
                        <!--/Вывод левого меню-->
                        <!-- Блок новостей на главной-->
						<?php if (isIndex()): ?>
                           
                      <!--[blog-category id=1]
                      [mg-poll id='1,2,3']-->
                                        
						<?php endif; ?>
                                               
                        <!--/Блок новостей
                    </div>
                </div>-->
            <?php endif; ?>

            <?php if (!isCatalog() || isSearch()) : ?>
                <div class="container-work-bg right-block <?php if (isIndex()): ?>index-page<?php endif; ?>">
                    <!--Вывод аякс поиска-->
                    <?php //layout('search'); ?>
                    <!--/Вывод аякс поиска-->
                    <?php if (isIndex()): ?>
                        <?php if (class_exists('SliderAction')): ?>
                            [slider-action]
                        <?php endif; ?>

                        <?php if (class_exists('trigger')): ?>
                            <div class="container-wrap">
                                [trigger-guarantee id="1"]
                            </div>
                        <?php endif; ?>
                        <div class="container-consul-bg">
                        <div class="consult-col-1">
                            <div class="cont-tittle-cons">
                            <div class="tittle-consult">Нужна<br>консультация ?</div>
                            <div class="desk-consult">заполните форму для связи</div>
                            </div>
                        </div>
                        <div class="consult-col-2">
                            <div class="form-b24-bg">
                                <div class="form-b24-call">
                                    <div id="b24block-form-1">
                                        <?php if($data['dislpayForm']){ ?>
                                        <form action="" method="post" class="crm-webform-form-container" id="bxform">
                                            <ul class="form-list">
                                                <li><input type="text" name="fio" value="<?php echo !empty($_POST['fio'])?$_POST['fio']:'' ?>"></li>               
                                                <li><input type="text" name="email" value="<?php echo !empty($_POST['email'])?$_POST['email']:'' ?>"></li>
                                              <?php  if(MG::getSetting('useCaptcha')=="true"){ ?>
                                            <li>Введите текст с картинки:</li>
                                            <li><img src = "captcha.html" width="140" height="36"></li>
                                            <li><input type="text" name="capcha" class="captcha"></li>
                                            <?php }?>
                                            </ul>
                                            <input type="submit" name="send" class="default-btn" value="Отправить">
                                        </form>
                                        <div class="clear">&nbsp;</div>
                                    <?php } else { ?>
                                      <div class='successSend'> <?php echo $data['message']?> </div>
                                    <?php }; ?>
                                    </div>
                               </div>
                           </div>
                        </div>
                        </div>
                        <div class="main-block">
                            <?php layout('content'); ?>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endif; ?>

            <div class="center-inner <?php echo (!isIndex() || catalogToIndex()) ? 'inner-page' : '';
            echo isSearch() ? 'no-filters' : ''; ?>">
                <?php if (isCatalog() && !isSearch()) : ?>
                    <!--<div class="side-menu">
                       
                        <?php if (horizontMenuDisable()) : ?>
                            <div class="menu-block">
                                <span class="mobile-toggle"></span>

                                <h2 class="cat-title"><a href="<?php echo SITE ?>/catalog">Каталог товаров</a></h2>
                                <!-- Вывод левого меню-->
                                      
                                <?php //layout('leftmenu'); ?>
                                <!--/Вывод левого меню-->
                            <!--</div>
                        <?php endif; ?>
                        <div class="filter-block ">
                            <a class="show-hide-filters" href="javascript:void(0);">Показать/скрыть фильтры</a>
                            <?php //filterCatalog(); ?>
                        </div>
                    </div>-->
                <?php endif; ?>
                <?php if (!isIndex()): ?>
                    <div class="main-block">
                        <?php if (isCatalog() && !isSearch()) : ?>
                            <!--Вывод аякс поиска-->
                            <?php layout('search'); ?>
                            <!--/Вывод аякс поиска-->
                        <?php endif; ?>
                        <?php layout('content'); ?>
                    </div>
                <?php endif; ?>

                <?php if (class_exists('ScrollTop')): ?>
                    [scroll-top]
                <?php endif; ?>
                <div class="clear"></div>
            </div>
        </div>

        <!--/Центральная часть сайта-->
        <div class="clear"></div>
    </div>

    <!--Индикатор сравнения товаров-->
    <?php layout('compare'); ?>
    <!--/Индикатор сравнения товаров-->
 
</div>
<!--Подвал сайта-->
<div class="footer">
    <div class="footer-top">
        <div class="centered">
            <div class="col">
                <h2>Сайт</h2>
                <?php echo MG::get('pages')->getFooterPagesUl(); ?>
            </div>
            <div class="col">
                <h2>Продукция</h2>
                <ul>
                    <?php echo MG::get('category')->getCategoryListUl(0, 'public', false); ?>
                </ul>
            </div>
            <div class="col">
                <h2>Мы принимаем оплату</h2>
                <img src="<?php echo PATH_SITE_TEMPLATE ?>/images/payments.png"
                     title="Мы принимаем оплату"
                     alt="Мы принимаем оплату"/>
            </div>
            <div class="col">
                <!--<h2>Мы в соцсетях</h2>
                <ul class="social-media">
                    <li><a href="https://plus.google.com/b/107179448064035521417/+EcostylePpUaVinnitsa" class="gplus-icon" title="Google+"><span></span></a></li>
                    <li><a href="https://www.facebook.com/EcoStyleVinnitsa/" class="fb-icon" title="Facebook"><span></span></a></li>
                </ul>-->
                <div class="widget">
                    <!--Коды счетчиков-->
                    <?php layout('widget'); ?>
                    <!--/Коды счетчиков-->
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--/Подвал сайта-->
</body>
</html>