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
    <?php mgAddMeta('<script src="' . PATH_SITE_TEMPLATE . '/js/owl.carousel.js"></script>'); ?>
    <?php mgAddMeta('<script src="' . PATH_SITE_TEMPLATE . '/js/script.js"></script>'); ?>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'ru,uk,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body <?php backgroundSite(); ?>>
<main class="w-100 landing-public-mode">
<div id="block35" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
	<div class="container-mobile-768">
					<div class="phone-num">
					<span class="phone-ic"></span> 
				     <div class="phone-mobile-class">
				     	 <div class="btn-messeng">
				     	 <a class="viber-item" href="viber://chat?number=380961717205"><img src="<?php echo SITE; ?>/uploads/ed3d55061da72e796ef8c7cd7cda22af.png"></a>
 	 				     <a class="whotapp-item" href="https://wa.me/380961717205/?text=urlencodedtext"><img src="<?php echo SITE ?>/uploads/66b7b2f42d509e636c5560ae51bb130e.png"></a>
				     	 </div>
				     	<a href="tel:<?php echo MG::getSetting('shopPhone') ?>"><?php echo MG::getSetting('shopPhone') ?></a>
				     	<?php if (class_exists('BackRing')): ?>
                        [back-ring]
                        <?php endif; ?>
				     </div>
				 </div>
	 <div class="mobile-logo-top">
	 	<a href="<?php echo SITE; ?>">
            <?php echo mgLogo(); ?>
        </a>
	 </div>
	 	 <div class="social-ic">
				<a class="face-btn-ic" href="https://www.facebook.com/kdmauto"></a>
				<a class="insta-btn-ic" href="https://www.instagram.com/kdm_auto_kia_hyundai_lpg/"></a>
				<a class="youtube-btn-ic" href="https://www.youtube.com/seekracer"></a>
	</div>

	<div class="tittle-header-mobile768">Авто из Южной Кореи</div>
	<button class="mob768 b24-web-form-popup-btn-11">Узнать детали</button>
</div>


 
<div class="container-header-bg">

	<div class="container-wrap">
		<div class="col-header-1">
			<div class="mobile-logo">
			    <a href="<?php echo SITE; ?>">
                    <?php echo mgLogo(); ?>
                </a>
			</div>
			<div class="social-ic">
				<a class="face-btn-ic" href="https://www.facebook.com/kdmauto"></a>
				<a class="insta-btn-ic" href="https://www.instagram.com/kdm_auto_kia_hyundai_lpg/"></a>
				<a class="youtube-btn-ic" href="https://www.youtube.com/seekracer"></a>
			</div>
			<div class="phone-col">
				<div class="phone-num">
					<span class="phone-ic"></span> 
				     <div class="phone-mobile-class">
				     	 <div class="btn-messeng">
				     	 <a class="viber-item" href="viber://chat?number=380961717205"><img src="<?php echo SITE; ?>/uploads/ed3d55061da72e796ef8c7cd7cda22af.png"></a>
 	 				     <a class="whotapp-item" href="https://wa.me/380961717205/?text=urlencodedtext"><img src="<?php echo SITE; ?>/uploads/66b7b2f42d509e636c5560ae51bb130e.png"></a>
				     	 </div>
				     	<a href="tel:<?php echo MG::getSetting('shopPhone') ?>"><?php echo MG::getSetting('shopPhone') ?></a>
				     	<?php if (class_exists('BackRing')): ?>
                        [back-ring]
                        <?php endif; ?>
				     </div>
				 </div>
			</div>
		</div>
		<div class="col-header-2">
			<div class="logo">
				<a href="<?php echo SITE; ?>">
                    <?php echo mgLogo(); ?>
                </a>
			</div>
			<div class="menu-header">
              <?php layout('topmenu'); ?>
			</div>
		</div>
	</div>
<?php if(isIndex()): ?> 
 <div class="container-bcg-mobil"> 
	<div class="container-wrap">
		<div class="tittle-header">
			<h1>Авто из Южной Кореи</h1>
		</div>
		<div class="tittle-header-eng">
			Auto from South Korea
		</div>
		<div class="description-tittle">
			<div class="desc-col-1">Узнай что есть в наличии - </div>
			<div class="btn-tittle"><button class="b24-web-form-popup-btn-11">Узнать детали</button></div>
		</div>
	</div>
	</div>
</div>

<div class="video-block-bg">
	<div class="video-block-container">
		<iframe width="100%" height="315" src="https://www.youtube.com/embed/6dOriEZlw-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	</div>
</div>
</section>
</div>
<div id="block37" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
    <div class="container-work-bg">

    <div class="container-wrap">

     <div class="tittle-work">Как мы работаем ?</div>

      <div class="row-work-col">


        <!-- 1 -->
         

            <div class="work-col class-col-1">
            <div class="work-num">01</div>
            <div class="work-desk">
            Виды<br>
            сотрудничеств
            </div>
            <ul>
                <li>Авто в пути</li>
                <li>Авто в наличии в Корее</li>
                <li>Авто в наличии в Украине</li>
                <li>Индивидуальный подбор на аукционе</li> 
            </ul>
         </div>

        <div class="work-col class-col-2">
            <div class="work-num">02</div>
            <div class="work-desk">
               Подбор<br>
               автомобиля
             </div>
             <ul>
                <li>Варианты из наличия</li>
                <li>Поиск авто на аукционе по вашим требованиям</li>
             </ul>
        </div>

                <div class="work-col class-col-4">
                <div class="mobile-work-first" style="display: none;">
                   <div class="work-num">04</div>
                    <div class="work-desk">
                    Покупка
                          </div>
                         <ul>
                <li>Участие в аукционных торгах</li>
                <li>Доставка выкупленного авто на нашу площадку в Корее</li>
             </ul>
                  </div>
            <div class="work-num">03</div>
            <div class="work-desk">
               Проверка<br>
               авто
             </div>
            <ul>
                <li>Проверка ЛКП</li>
                <li>Фото и видео отчет с рецензией</li>
                <li>Осмотр основных агрегатов и кузовных элементов</li>
             </ul>
           </div>
      

            <div class="work-col class-col-3">
                    <div class="mobile-work-first" style="display: none;">
                            <div class="work-num">03</div>
            <div class="work-desk">
               Проверка<br>
               авто
             </div>
             <ul>
                <li>Проверка ЛКП</li>
                <li>Фото и видео отчет с рецензией</li>
                <li>Осмотр основных агрегатов и кузовных элементов</li>
             </ul>
                  </div>
            <div class="work-num">04</div>
            <div class="work-desk">
               Покупка <br>
             </div>
             <ul>
                <li>Участие в аукционных торгах</li>
                <li>Доставка выкупленного авто на нашу площадку в Корее</li>
             </ul>
        </div>


        <!-- 3 -->


                    <div class="work-col class-col-5">
            <div class="work-num">05</div>
            <div class="work-desk">
                Подготовка<br>
                к отправке
             </div>
            <ul>
                <li>Мойка авто</li>
                <li>Отправка в порт на погрузку</li>
                <li>Установка аксессуаров по заказу</li>
                <li>Дополнительный фото-видео отчет</li>
            </ul>
        </div>

        <div class="work-col class-col-6">
            <div class="work-num">06</div>
            <div class="work-desk">
               Получение<br> авто
             </div>
             <div class="bnt-work">
                <p>Передача автомобиля владельцу с полным пакетом документов для постановки на учет</p>
             </div></div>



      </div>

    </div>
</div>


<div class="container-consul-bg">

            <div class="consult-col-1">
                <div class="cont-tittle-cons">
                <div class="tittle-consult">Нужна<br>консультация ?</div>
                <div class="desk-consult">заполните форму для связи</div>
                </div>
            </div>
</div></section>
</div>
<div id="block39" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
    <div class="container-yotube-bg">
    <div class="container-wrap"> 
        <div class="container-tittle">
        <a class="marker-youtube" href="https://www.youtube.com/channel/UCSv8lG9EX7TOuMo8n6gFyyQ/videos">youtube.com/seekracer</a>

        <div class="tittle-youtube">
            Наш ютуб канал
        </div>
        <div class="deskription-youtube">( Обзоры авто из наличия и выполненные заказы )</div>
        </div>
        <div class="row-yotube">
            <div class="youtube-col">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/4XL-Tv-A0XM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                </iframe>
            </div>
            <div class="youtube-col">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/sMLbrogkkFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
                        <div class="youtube-col">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/pOZnMLk6800" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>  
            </div>
                        <div class="youtube-col">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/6dOriEZlw-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>  
            </div>
        </div>

        <div class="youtube-ling-btn"> <a href="https://www.youtube.com/channel/UCSv8lG9EX7TOuMo8n6gFyyQ/videos">Смотреть больше видео</a></div>

     </div>
</div></section></div>
<div id="block41" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
    <div class="car-bg">
        <div class="container-wrap"> 

            <div class="tittle-blockar">Варианты для заказов и цены</div>
            <div class="col-car">
                <img alt="KDM auto Hyundai Sonata LF" src="https://picua.org/images/2019/01/26/696c7559492074957e49c701975b26c0.jpg">
                <div class="car-tittle">
                    Hyundai Sonata LF
                </div>
                <div class="car-desk">
                    <span class="car-price">15500$</span>
                    <span class="car-yers">2016.г</span>
                    <span class="car-km">101 тыс. км</span>
                </div>
            </div>
            <div class="col-car">
                <img alt="KDM auto Kia K5 Optima" src="https://picua.org/images/2019/01/26/335cbdad9425f0c6b8c65431fc60d17c.jpg">
                <div class="car-tittle">
                    Kia K5 Optima
                </div>
                <div class="car-desk">
                    <span class="car-price">13700$</span>
                    <span class="car-yers">2015.г</span>
                    <span class="car-km">60 тыс. км</span>
                </div>
            </div>
            <div class="col-car">
                <img alt="KDM auto Hyundai Sonata LF" src="https://picua.org/images/2019/01/26/1a9c9e1b0b456130ae489e36f39d44d5.jpg">
                <div class="car-tittle">
                    Hyundai Sonata LF
                </div>
                <div class="car-desk">
                    <span class="car-price">$15 000</span>
                    <span class="car-yers">2016.г</span>
                    <span class="car-km">60 тыс. км</span>
                </div>
            </div>
            <div class="col-car">
                <img alt="KDM auto Hyundai Sonata lf" src="https://picua.org/images/2019/01/26/77a3ff7269e2baa92af78f95098aec7e.jpg">
                <div class="car-tittle">
                    Hyundai Sonata lf 
                </div>
                <div class="car-desk">
                    <span class="car-price">$15 000</span>
                    <span class="car-yers">2015.г</span>
                    <span class="car-km">60 тыс. км</span>
                </div>
            </div>
            <div class="col-car">
                <img alt="KDM auto Hyundai Sonata LF" src="https://picua.org/images/2019/01/26/c5baa636b0618bb73069961a2974dd0f.jpg">
                <div class="car-tittle">
                    Hyundai Sonata LF
                </div>
                <div class="car-desk">
                    <span class="car-price">15500$</span>
                    <span class="car-yers">2016.г</span>
                    <span class="car-km">113 тыс. км</span>
                </div>
            </div>
            <div class="col-car">
                <img alt="KDM auto Kia K5 Optima" src="https://picua.org/images/2019/01/26/e8360c638accb698bb15f3c6307a9ef5.jpg">
                <div class="car-tittle">
                    Kia K5 Optima
                </div>
                <div class="car-desk">
                    <span class="car-price">$13 000</span>
                    <span class="car-yers">2016.г</span>
                    <span class="car-km">129 тыс. км</span>
                </div>
            </div>
        </div>
 </div>


 <div class="container-wrap detail-repair"> 

            <div class="tittle-blockar">Оригинальные запчасти для автомобилей!</div>
             <div class="zap-desk">( Цены и наличие уточняйте! )</div>
            <div class="col-car repair-kia">
                <img alt="KDM auto запчасти из кореи" src="<?php echo SITE; ?>/uploads/6f9dc1a0c7ab93794b2d2bdf34771353.jpg">
            </div>
            <div class="col-car repair-kia">
                <img alt="KDM auto запчасти из кореи" src="<?php echo SITE; ?>/uploads/5dbe237c11a5bd9eec0450903a7e97a0.jpg">
            </div>
            <div class="col-car repair-kia">
                <img alt="KDM auto запчасти из кореи" src="<?php echo SITE; ?>/uploads/4aff81f5f5171a289d1fc047d0c9e502.jpg">
            </div>
            <div class="col-car repair-kia">
                <img alt="KDM auto запчасти из кореи" src="<?php echo SITE; ?>/uploads/d68565da84b5d6e0fa8c30c010282b90.jpg">
            </div>
            <div class="col-car repair-kia">
                <img alt="KDM auto запчасти из кореи" src="<?php echo SITE; ?>/uploads/03bdfaea014a86966ba9bbf2726d2f12.jpg">
            </div>
            <div class="col-car repair-kia">
                <img alt="KDM auto запчасти из кореи" src="<?php echo SITE; ?>/uploads/e6b321d8e5283bb33582685b4e6999d0.jpg">
            </div>
        </div>
 
 <div class="bg-form-wh">
     <div class="container-wrap"> 
        <div class="form-wh-tittle">
            Получить консультацию с просчетом цены ?
        </div>
        <div class="form-wh-desk">
            пожалуста заполните форму 
        </div>
        <button class="btn-wh b24-web-form-popup-btn-11">заказ звонка</button>
     </div>
 </div></section></div>
 <div id="block43" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
    <div class="onas-container">
    
    <div class="onas-bg">
        
    </div>

     <div class="col-left-onas">
        <div class="tittle-onas">
            О нас KDM Auto
        </div>
        <div class="des-pc">
                        <p> 
         Мы работаем с 2016 года на территории Украины. Основная наша деятельность – это пригон, помощь в выборе, выкуп с аукционов, доставка Автомобилей из Южной Кореи и США. Экспортируем не только из Кореи и США в Украину, а и в Грузию, Азербайджан, Кыргызстан, Казахстан, Польша и других стран ближайшего зарубежья.
         </p> 
    <p>  
Купить автомобиль из Кореи в Украине Вы сможете именно у KDM Auto. Богатый опыт, большое количество положительных отзывов, подтверждают работу наших профессионалов в выборе автомобиля из Кореи. Мы специализируемся на выборе газовых автомобилей из Кореи без ДТП и косметических работ. Это позволяет достоверно определят их справное состояние и количество реального пробега, а также является огромным плюсом для покупателя в их экономичности, экологичности и обслуживания. Покупка автомобилей из Кореи происходит на Аукционах. Все автомобиле допущенные к торгам проходят тщательную проверку для отражения их стоимости в торгах.
  </p> 
  <p>   
Какие автомобили можно приобрести из Кореи? Корейское законодательство разрешает экспортировать автомобили не младше трех лет, поэтому мы специализируемся исключительно на б/у газовых, дизельных и бензиновых автомобилях из Кореи и не только. Также пригоним под заказ автомобили из авто аукционов Сша. Автомобили могут быть как битые, с повреждениями, так и целые, не крашеные. Основные марки на Корейских аукционах (Lotte Rental,Encar,Glovis,AJ), которые занимают пространство — это автомобили Корейского производства Kia, Hyundai, SsangYong, Renault-Samsung,Chevrolet на заводском ГБО или дизельном топливе. Газовые автомобили вообще являются уникальностью, и техническим чудом в сфере автомобилестроения, ведь очень мало автопроизводителей Европы, Азии и США смогут похвастаться абсолютно газовым двигателем с системой впрыска Lpi. Которая в свою очередь считается пятым поколением ГБО на пропан – бутане, и очень простая в эксплуатации. Есть уже масса отзывов про авто на газу из Кореи.  Они являются наиболее выгодными в цене. Еще можно отметить электромобили из Кореи, которые только начинают набирать популярность на дорогах Украины. Это Hyundai Ioniq Electric, Kia Soul, Renault-Samsung sm5.
</p> 
 <p>    
  Но мы не забываем и о Аudi, Мitsubishi, Toyota, Volkswagen,Ford, Range Rover,Mazda,Honda,Bmw,Mercedes-benz,Nissan и другие марки автопроизводителей, которые направлены на рынок Сша и доступны на страховых автоаукционах таких как Copart, IaaI,Manheim и другие. Также очень огромный выбор электромобилей доступен в услуге авто из Сша. Популярные модели которые можно привезти из страховых аукционов америки это электрокары Kia Soul EV,Hyundai Ionic Electric,Chevrolet Bolt Electric,Chevrolet Volt,BMW I3 Rex.Nissan Leaf,Tesla model 3,Tesla model X,Tesla model S. 
  </p> 
   <p>  
Для того чтобы купить автомобиль в Кореи и получить его в Украине, необходимо заключить с нами договор. Это подразумевает то что стоимость, заявленные характеристики автомобиля будут подобраны согласно условий и критерий, которые Вы нам укажите. Это является залогом вашего доверия, так как все происходит в рамках договора. Следующим этапом будет подбор автомобиля и доставка его на территорию Украины. С автомобилем будет предоставлен полный пакет документов для постановки его на учет. Аналогично происходит и с покупкой авто из США.
Компания KDM Аuto экспортировала в Украину боле 100 единиц газовых седанов и дизельных паркетников. Мы очень рады что все наши клиенты получают отличные автомобили и смогут с комфортом передвигаться на территории Украины. Пригон и новых автомобилей под заказ из США и Кореи тоже доступен с компанией KDM Auto.
</p>
    </div>
   <div class="desk-phone">
       <p>
        KDM auto - является импортёром автомобилей из Южной Кореи.За прошедший год каждый доставленный нами автомобиль обрёл довольного хозяина, а это более 100 автомобилей.Мы не делаем громких заявлений, мы просто делаем свою работу.
       </p>
   </div>

     </div>
 </div></section></div>
 <div id="block45" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
    <div class="container-wrap"> 
  <div class="feadback-tittle">Отзывы о Нас <a target="blank" href="https://www.facebook.com/kdmauto">www.facebook.com/kdmauto</a></div>

  <div class="row-feadback">
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-1"></div>
         <div class="name-f-col">
          <div class="name-feadback">Roma Boyar</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>Отзыв о КДМ Auto (Игорь): Купил sonata lf. Всё, что оговаривалось перед покупкой было выполнено со стороны Игоря. Всегда на связи, всегда поможет и подскажет по машине даже после того как машина выкуплена и принята мною. Специально не писал мгновенный отзыв - хотел чтобы был объективным. Катаюсь месяц - она того стоит!!!
Поменял все жидкости и фильтра,видел днище - машина как новая вообще. Не стучит, не гримит, комфорт и усправляемость на высоте. заправляюсь газ Окко (Socar)
        </p>
         <div class="post-block">
            <div class="ic-like">14</div>
            <div class="coment-feadback">Комментарии: 1</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-2"></div>
         <div class="name-f-col">
          <div class="name-feadback">Діма Федорчук</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>
Отзыв о KDM Auto, менеджер Евгений (0976056995)
Сегодня забрал автомобиль и сразу поставили на учет за 1 час, растаможка заняла 5 дней
Купил авто 3 сентября, отравили 5 сентября Ro-ro, приехал 4 ноября.
Женя отвечал на все вопросы и был всегда на связи, машина пришла вовремя по срокам и в оговоренную цену.
Очень ответственный человек. Всем рекомендую!
Соната огонь, комплектация Premium + приятный бонус накладка на баллон, спойлер и видеорегистратор был штатный
        </p>
         <div class="post-block">
            <div class="ic-like">14</div>
            <div class="coment-feadback">Комментарии: 4</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-3"></div>
         <div class="name-f-col">
          <div class="name-feadback">Сергей Жмакин</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>Машина 5+ <br>
Игорю 5+++!!!<br>
Очень рекомендую сотрудничать с Игорем! <br>
Все сделал на отлично <br>
Во всех моментах как договорились - так и было. Все понятно и прозрачно.
        </p>
         <div class="post-block">
            <div class="ic-like">7</div>
            <div class="coment-feadback">Комментарии: 2</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-4"></div>
         <div class="name-f-col">
          <div class="name-feadback">Максим Коваленко</div>
         <div class="desk-tittle-feadback">оценил <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>К5 в использовании 2 месяца по Киеву, полет нормальный, я бы даже сказал отличный.
Накупил расходников в первую же неделю, а оказалось, что они все заменены) У меня был культурный шок)
По расходу сложно сказать
        </p>
         <div class="post-block">
            <div class="ic-like">10</div>
            <div class="coment-feadback">Комментарии: 6</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-5"></div>
         <div class="name-f-col">
          <div class="name-feadback">Александр сербин</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>очень благодарен за проделанную работу Игорю.Авто пришло в комплекте(+допы). Самый актуальный вопрос - оговоренная сумма при получении авто НЕ ИЗМЕНИЛАСЬ. рекомендую.
        </p>
         <div class="post-block">
            <div class="ic-like">4</div>
            <div class="coment-feadback">Комментарии: 1</div>
         </div>
      </div>
        <div class="feadback-col container-bg-face">
             <a href="https://www.facebook.com/pg/kdmauto/reviews">Больше отзывов</a>
      </div>
  </div>
</div>
<div class="container" id="calc" style="padding:50px 20px;">
        <div class="row">
            <div class="col-md-12 feadback-tittle" title="" style="margin-bottom:10px">
                Калькулятор
            </div>
</div>
<div class="row" style="border: 1px solid #1780c3; border-radius: 10px; align-items: center;
    text-align: center; padding:20px">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="cost">Стоимость авто в Корее</label>
                        <input type="text" class="form-control" id="cost" placeholder="Стоимость в $">
                    </div>
                    <div class="form-group">
                        <label for="dvig">Тип двигателя</label>
                        <select class="form-control" id="dvig">
                            <option value="0">Выберите тип двигателя</option>
                            <option value="b">Бензин/газ</option>
                            <option value="d">Дизель</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="v-dvig">Обьем двигателя куб.</label>
                        <input class="form-control" id="v-dvig" placeholder="1600">
                    </div>
                    <div class="form-group">
                        <label for="year">Год выпуска</label>
                        <input type="text" name="year" id="year" class="form-control" placeholder="2020">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <button class="btn-wh calc" style="margin-bottom:20px">Расчитать</button>
                <div class="res"></div>
            </div>
        </div>
    </div>
</section></div>
<div id="block45" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
    <div class="container-wrap"> 
  <div class="feadback-tittle">Отзывы о Нас <a target="blank" href="https://www.facebook.com/kdmauto">www.facebook.com/kdmauto</a></div>

  <div class="row-feadback">
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-1"></div>
         <div class="name-f-col">
          <div class="name-feadback">Roma Boyar</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>Отзыв о КДМ Auto (Игорь): Купил sonata lf. Всё, что оговаривалось перед покупкой было выполнено со стороны Игоря. Всегда на связи, всегда поможет и подскажет по машине даже после того как машина выкуплена и принята мною. Специально не писал мгновенный отзыв - хотел чтобы был объективным. Катаюсь месяц - она того стоит!!!
Поменял все жидкости и фильтра,видел днище - машина как новая вообще. Не стучит, не гримит, комфорт и усправляемость на высоте. заправляюсь газ Окко (Socar)
        </p>
         <div class="post-block">
            <div class="ic-like">14</div>
            <div class="coment-feadback">Комментарии: 1</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-2"></div>
         <div class="name-f-col">
          <div class="name-feadback">Діма Федорчук</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>
Отзыв о KDM Auto, менеджер Евгений (0976056995)
Сегодня забрал автомобиль и сразу поставили на учет за 1 час, растаможка заняла 5 дней
Купил авто 3 сентября, отравили 5 сентября Ro-ro, приехал 4 ноября.
Женя отвечал на все вопросы и был всегда на связи, машина пришла вовремя по срокам и в оговоренную цену.
Очень ответственный человек. Всем рекомендую!
Соната огонь, комплектация Premium + приятный бонус накладка на баллон, спойлер и видеорегистратор был штатный
        </p>
         <div class="post-block">
            <div class="ic-like">14</div>
            <div class="coment-feadback">Комментарии: 4</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-3"></div>
         <div class="name-f-col">
          <div class="name-feadback">Сергей Жмакин</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>Машина 5+ <br>
Игорю 5+++!!!<br>
Очень рекомендую сотрудничать с Игорем! <br>
Все сделал на отлично <br>
Во всех моментах как договорились - так и было. Все понятно и прозрачно.
        </p>
         <div class="post-block">
            <div class="ic-like">7</div>
            <div class="coment-feadback">Комментарии: 2</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-4"></div>
         <div class="name-f-col">
          <div class="name-feadback">Максим Коваленко</div>
         <div class="desk-tittle-feadback">оценил <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>К5 в использовании 2 месяца по Киеву, полет нормальный, я бы даже сказал отличный.
Накупил расходников в первую же неделю, а оказалось, что они все заменены) У меня был культурный шок)
По расходу сложно сказать
        </p>
         <div class="post-block">
            <div class="ic-like">10</div>
            <div class="coment-feadback">Комментарии: 6</div>
         </div>
      </div>
      <div class="feadback-col">
        <div class="header-feadback">
         <div class="foto-feadback face-5"></div>
         <div class="name-f-col">
          <div class="name-feadback">Александр сербин</div>
         <div class="desk-tittle-feadback">рекомендует <a href="https://www.facebook.com/kdmauto">Авто из Южной Кореи "KDM auto"</a></div>
         <div class="date-feadback">15 декабря в 08:59 </div>
         </div>
        </div>
        <p>очень благодарен за проделанную работу Игорю.Авто пришло в комплекте(+допы). Самый актуальный вопрос - оговоренная сумма при получении авто НЕ ИЗМЕНИЛАСЬ. рекомендую.
        </p>
         <div class="post-block">
            <div class="ic-like">4</div>
            <div class="coment-feadback">Комментарии: 1</div>
         </div>
      </div>
        <div class="feadback-col container-bg-face">
             <a href="https://www.facebook.com/pg/kdmauto/reviews">Больше отзывов</a>
      </div>
  </div>
</div>
<div class="container" id="calc" style="padding:50px 20px;">
        <div class="row">
            <div class="col-md-12 feadback-tittle" title="" style="margin-bottom:10px">
                Калькулятор
            </div>
</div>
<div class="row" style="border: 1px solid #1780c3; border-radius: 10px; align-items: center;
    text-align: center; padding:20px">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="cost">Стоимость авто в Корее</label>
                        <input type="text" class="form-control" id="cost" placeholder="Стоимость в $">
                    </div>
                    <div class="form-group">
                        <label for="dvig">Тип двигателя</label>
                        <select class="form-control" id="dvig">
                            <option value="0">Выберите тип двигателя</option>
                            <option value="b">Бензин/газ</option>
                            <option value="d">Дизель</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="v-dvig">Обьем двигателя куб.</label>
                        <input class="form-control" id="v-dvig" placeholder="1600">
                    </div>
                    <div class="form-group">
                        <label for="year">Год выпуска</label>
                        <input type="text" name="year" id="year" class="form-control" placeholder="2020">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <button class="btn-wh calc" style="margin-bottom:20px">Расчитать</button>
                <div class="res"></div>
            </div>
        </div>
    </div>
</section></div>
<script data-skip-moving="true">
      $('.calc').click(function (){let cost = $('#cost').val(),
                dvig = $('#dvig').val(),
                ob = $('#v-dvig').val(),
                god = $('#year').val();
            if (!dvig){$('#dvig').css('border-color', 'red');
                return;}if (!ob){$('#v-dvig').css('border-color', 'red');
                return;}if (!god){$('#year').css('border-color', 'red');
                return;}if (!cost){$('#cost').css('border-color', 'red');
                return;}koef = 0;
            if (dvig == 'b'){koef = 0.0542;}else{koef = 0.0813;}rast = (+cost+(+cost*0.022))*0.3;
            if (rast<1600){rast = 1600;}res = rast + ((+ob*koef)*(2020-(+god))) + 3800 + (+cost) + (+cost*0.03);
            $('.res').html('Предварительная стоимость Вашего авто c регистрацией в Украине: <b>' + new Intl.NumberFormat('ru-RU').format(res) + '$.</b> <br>Для более точного расчета свяжитесь с нами!')});
    </script>
<?php endif; ?>
<div id="block47" class="block-wrapper block-html">
<section class="landing-block g-pt-0 g-pb-0 g-pl-0 g-pr-0">
    <div class="footer-bg">
     <div class="footer-container">
        <div class="container-wrap">
            <div class="col-cont-footer">
                <div class="tittle-footer">
                    Как с нами <br>
                    связатся
                </div>
                <p>Представители по городам:</p>
                <div class="bloc-tel-footer">


<div><span>Николаев:</span> 0961717205 Игорь</div>

<div><span>Винница:</span> 0976056995 Евгений</div>

<div><span>Мариуполь:</span> 0989002107 Вадим</div>

<div><span>Харьков:</span> 0987387598 Владимир</div>
                </div>
                <div class="soc-footer">
                    <a class="face-item" href="https://www.facebook.com/kdmauto/"><img src="<?php echo SITE; ?>/uploads/841fe49cfedc731e522d3ea29fdaa94b.png"></a>
                    <a class="viber-item" href=""><img src="<?php echo SITE; ?>/uploads/ed3d55061da72e796ef8c7cd7cda22af.png"></a>
                    <a class="whotapp-item" href=""><img src="<?php echo SITE; ?>/uploads/66b7b2f42d509e636c5560ae51bb130e.png"></a>
                    <a class="youtube-item" href="https://www.youtube.com/channel/UCSv8lG9EX7TOuMo8n6gFyyQ/videos"><img src="<?php echo SITE; ?>/uploads/10618dc70aa6584ba1c6cc243506d823.png" alt="10618dc70aa6584ba1c6cc243506d823.png"></a>
                </div>
            </div>
            <div class="col-form-footer">
                <div class="tittle-form-footer">
                    У вас остались вопросы ?
                    <span>воспользуйтесь формой обратной связи</span>
                </div>

                 <div id="b24block-form-2"><iframe id="bx_form_iframe_7" name="bx_form_iframe_7" src="https://b24-bninf5.bitrix24.ua/pub/form.php?view=frame&amp;form_id=7&amp;widget_user_lang=ru&amp;sec=0e1jyp&amp;r=1590146958115#%7B%22domain%22%3A%22file%3A%2F%2F%22%2C%22from%22%3A%22file%3A%2F%2F%2FC%3A%2FUsers%2FEcostyle%2FDesktop%2Findex.html%22%2C%22options%22%3A%7B%7D%7D" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width: 100%; height: 200px; border: 0px; overflow: hidden; padding: 0; margin: 0;"></iframe></div>
            </div>
        </div> 
     </div>
 </div>

</div></section></div>
</main>
<div class="wrapper <?php echo isIndex() ? 'main-page' : '';
echo isCatalog() && !isSearch() ? 'catalog-page' : ''; ?>">
    <!--Шапка сайта-->
    <div class="header">
        <div class="top-bar">
            <span class="menu-toggle"></span>

            <div class="centered">
                <!--Вывод авторизации-->
                <div class="top-auth-block">
                    <?php layout('auth'); ?>
                </div>
                <!--/Вывод авторизации-->

                <div class="top-menu-block">
                    <!--Вывод верхнего меню-->
                    <?php //layout('topmenu'); ?>
                    <!--/Вывод верхнего меню-->

                    <!--Вывод реквизитов сайта для мобильной версии-->
                    <?php layout('contacts_mobile'); ?>
                    <!--/Вывод реквизитов сайта для мобильной версии-->
                    <div class="clear"></div>
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
                    <!--/Вывод логотипа сайта-->
                    <?php layout('topmenu'); ?>
                    <!--Вывод реквизитов сайта-->
                    <?php //layout('contacts'); ?>
                    <!--/Вывод реквизитов сайта-->
                    <?php if (class_exists('BackRing')): ?>
                    [back-ring]
                    <?php endif; ?>
                    <div class="clear"></div>
                </div>

                <!--Вывод корзины -->
               	 <?php //layout('cart'); ?>
                <!--/Вывод корзины-->
                
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--/Шапка сайта-->

    <!--Вывод горизонтального меню, если оно подключено в настройках-->
    <?php horizontMenu(); ?>
    <!--/Вывод горизонтального меню, если оно подключено в настройках-->

    <div class="container">
        <!--Центральная часть сайта-->
        <div class="center show-menu">

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
                <div class="right-block <?php if (isIndex()): ?>index-page<?php endif; ?>">
                    <!--Вывод аякс поиска-->
                    <?php layout('search'); ?>
                    <!--/Вывод аякс поиска-->
                    <?php if (isIndex()): ?>
                        <?php if (class_exists('SliderAction')): ?>
                            [slider-action]
                        <?php endif; ?>

                        <?php if (class_exists('trigger')): ?>
                            [trigger-guarantee id="1"]
                        <?php endif; ?>
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
  <style type="text/css">.bloc-tel-footer div{
    color: #cacaca;
}
.col-cont-footer p{
  color: #fff;
}
div{color: #000;}
.container-wrap{
    padding: 0 10px;
    max-width: 1036px;
    margin: 0 auto;
    clear: both;
}

.col-header-1{
    text-align: right;
    position: relative;
}
.social-ic{
    display: inline-block;
}
.phone-col{
    display: inline-block;
}
.phone-mobile-class{
    display: inline-block;
}
.call-back{
        max-width: 113px;
    display: block;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    margin-left: auto;
    border-bottom: 1px solid #000;
    background-color: transparent;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    padding: 0;
}
.social-ic{
        right: 0;
    left: 0;
    position: absolute;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 17px;
    padding-right: 0;
    top: 0;
    max-width: 144px;
    margin: 0 auto;
    background: #ececec;
    text-align: center;
}

span.viber-ic{ 
  display: inline-block;
  width:24px;
  height: 24px;
  background-image: url('https://i.ibb.co/kycn9JW/bg-header.jpg'); 
}

span.whotapp-ic{
  display: inline-block;
  width:23px;
  height: 23px; 
  background-image: url(<?php echo SITE; ?>/uploads/b4cea3b5b19f34d00cbc1cfa48cc3f6e.png);
}
.phone-num{
    font-size: 17px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;

}
.phone-num a{
    color: #000;
}
.phone-num span.phone-ic{
  display: inline-block;
  width:23px;
  height: 23px;
  width: 38px;
  height: 73px;
  background-color: #ff3030; 
  background-repeat: no-repeat;
  background-position: 8px 28px;
  background-image:url(<?php echo SITE; ?>/uploads/e6ac32ca54056c70d35b9add87209862.png);
}
.logo{
    position: relative;
    float: left;
    width: 13%;
    top: -48px;
}
.mobile-logo{display: none;}
.menu-header{
    text-align: right;
    width: 84%;
    float:right;
}
.menu-header ul li{
    display: inline-block;
    text-align: right;
}
.menu-header ul li a{
    font-size: 17px;
    color: #000;
    padding: 0 12px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
}
.tittle-header h1{
    padding-top: 57px;
    font-size: 54px;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    line-height: 68px;
    position: relative;
     margin: 0;
}
.tittle-header h1:after{
    left: 0;
    content: '';
    position: absolute;
    width: 50%;
    height: 2px;
    background: #fff;
    bottom: -7px;
}
.tittle-header-eng{
    font-size: 46px;
    color: #fff;
    font-weight: 600;
    font-style: italic;
}
.font-tittle{
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 37px;
    line-height: 40px;
}
.btn-tittle button{
        font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 20px;
    background: #ff3030;
    color: #ffff;
    border: 0px;
    padding: 14px 35px;
}
.btn-tittle button:hover{
        background: #2196F3;
}
.desc-col-1{
    display: inline-block;
    color: #fff;
    font-size: 18px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
}
.btn-tittle{
    display: inline-block;
}
.description-tittle{
padding-top: 69px;
    padding-bottom: 188px;
}

.container-header-bg{
  background-repeat: no-repeat;
background-position: center;
     background-size: cover;
        background-image: url(https://picua.org/images/2019/01/26/3a2ddeabdcb27394fa562b28887b5e7a.jpg);
}



.bg-tittle-header{ 
    padding: 0px 12px;
    background-repeat: no-repeat;
     background-position: 0 0;
     background-size: cover;
  background-image: url(<?php echo SITE; ?>/uploads/9e5a987c81acebc16d745a8c201da4a1.jpg);
}

.container-work-bg .tittle-work{
    padding-top: 51px;
}

.tittle-work{
    color: #000;
    font-size: 41px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    position: relative;
}
.tittle-work:after{
 content: '';
 position: absolute;
width: 152px;
height: 5px;
background-color: #2767f8;
display: block;
left: 4px;
}

.row-work-col{padding-top: 41px;}
.row-work-col ul{margin: 0px;padding: 0px;}
.row-work-col ul li{list-style-type: none;color: #000;}
.work-num{
    color: #2767f8;
    font-size: 52px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 800;
    height: 66px;
    position: relative;
}
.work-desk{
    color: #2767f8;
    font-size: 29px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    line-height: 33px;
}
.row-work-col p{
    font-size: 16px;
    color: #000;
    line-height: 25px;
}

.bnt-work button{
        font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    display: block;
    background: red;
    font-size: 21px;
    color: #fff;
    padding: 19px 46px;
    border: 0px;
}
.bnt-work p{margin: 0px;}
.bnt-work button:hover{
    background: #ff4e4e;
}

.row-block-1,.row-block-2,.row-block-3{
    display: inline-block;
    width: 33.07%;
    vertical-align: top;
    position: relative;
}
.work-col{
        display: inline-block;
    height: 331px;
    width: 33%;
    vertical-align: text-bottom;
}
.class-col-1:after{
    top: 292px;
    left: 18px;
    background-position: -13px -19px;
    width: 14px;
    content: '';
   
    height: 33px;
    position: absolute;
    background-repeat: no-repeat;

}

.class-col-2:after{
   bottom: 190px;
    right: 66px;
    background-position: 1px 1px;
    width: 33px;
    content: '';
    
    height: 16px;
    position: absolute;
    background-repeat: no-repeat;

}
.class-col-4:after{
    top: 292px;
    left: 60px;
    background-position: 1px -15px;
    width: 14px;
    content: '';

    height: 33px;
    position: absolute;
    background-repeat: no-repeat;

}

.class-col-3:after{
   top: 96px;
    right: 10px;
    background-position: 1px 1px;
    width: 33px;
    content: '';
    height: 16px;
    position: absolute;
    background-repeat: no-repeat;

}
.class-col-6:after{
    top: 292px;
    left: 63px;
    background-position: -13px -19px;
    width: 14px;
    content: '';
    height: 33px;
    position: absolute;
    background-repeat: no-repeat;

}

.class-col-6 .work-num:after{
        top: 10px;
    left: 84px;
    width: 60px;
    content: '';
    background-image: url(<?php echo SITE; ?>/uploads/c8bfba354ae09602687989d222340214.png);
    height: 80px;
    position: absolute;
    background-repeat: no-repeat;
}


.container-work-bg{
  background-repeat: no-repeat;
background-position: center;
     background-size: cover;
        background-image: url(https://picua.org/images/2019/01/26/db4fea314adfd3a4613d023d31a7ddcd.jpg);
}

.row-block-2{
    padding-left: 40px;
}
.row-block-3{
padding-left: 40px; 
}

.container-consul-bg{background: #000;  }
.tittle-consult{
    line-height: 53px;
    font-size: 48px;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-weight: 800;
}
.desk-consult{
    font-size: 21px;
    color: #fff;
     font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    padding-bottom: 6px;
}

.desk-phone{display: none;}
.consult-col-1{
        display: inline-block;
    width: 50%;
        vertical-align: top;
}
.consult-col-2{
      display: inline-block;
    width: 49%;
         background-size: 980px 267px;
    background-repeat: no-repeat;
    background-position: right;
    background-image: url(https://picua.org/images/2019/01/26/84ba58933aec014c5ecf4e3bcc77afb7.jpg);
}
.form-b24-call{
        position: relative;
    top: 47px;
    right: -89px;
}

.container-consul-bg{
    background: #000;
    height: 220px;
}
.cont-tittle-cons{
        padding-top: 35px;
    max-width: 500px;
    margin: auto 0 0 auto;
}
.form-b24-bg {
    max-width: 448px;
    height: 220px;
    background: #00000091;
    position: relative;
    top: 0px;
    left: -42px;
}



.tittle-garant{
    color: #000;
    font-size: 41px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    position: relative;
    padding: 77px 0;
}
.tittle-garant:after{
 content: '';
 position: absolute;
width: 152px;
height: 5px;
background-color: #0fa4f9;
display: block;
left: 4px;

}
.garant-tittle-col{
    color: #000;
    font-family: 'Open Sans', sans-serif;
    font-weight: 800;
    position: relative;
    font-size: 26px;
    padding-left: 80px;
}
.garant-tittle-col:before{
    top: -26px;
    left: 0;
    position: absolute;
    background-color: #0fa4f9;
    background-position: center;
    background-repeat: no-repeat;
    width: 65px;
    height: 61px;
    content: '';
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAYCAYAAAAGXva8AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTQ1OTJDODcwQzRCMTFFOTgwM0VBQjJDQzNBNDRCM0QiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTQ1OTJDODgwQzRCMTFFOTgwM0VBQjJDQzNBNDRCM0QiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNDU5MkM4NTBDNEIxMUU5ODAzRUFCMkNDM0E0NEIzRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNDU5MkM4NjBDNEIxMUU5ODAzRUFCMkNDM0E0NEIzRCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnA/7Z8AAAEvSURBVHjatJYNDYMwEIUvywxgAQtYYBKwABKwgAUmgUlgEoqFSRgSuut2JRfGlbaUl7wEluW+9nj9Aa01kCv0oI/L1MhZ3T/bh16n05tBMxrEQM9f3hUAKnQNP93RDzimFzlDj+iCfs/RN/RsyIpG2LlaEuiM1eVStr1W5cnAhXOBtFq3dC3z+Z4pZ7o3w56n1wUteepSAF1QXkTtgIOAEnSriAQOBkrQViiwBkcBjUPSW1AyM8+UNmIl4Zu6tkUVO0Of9MbsxxxYoMdQaCiYA3Pa+HUM1Bc8bKxvLUF9gtRQMCRNztBsyDe9EnhajqsToFvgKKDRNfD/DR3Qdi3OUWcRW3NtwkN8EAK2XFfMiHt0x9p2RBUZxKvPCRez3Z2Jv9Q725uvFF1nxfZ/BBgAT/hmeZefilQAAAAASUVORK5CYII=');    
}
.garant-col-1, .garant-col-2,.garant-col-3,
.garant-col-4,.garant-col-5{
    width: 33%;
    display: inline-block;
    vertical-align: top;
    padding-bottom: 73px;
}
.btn-garant button{
        border: 0px;
    background: red;
    color: #fff;
    font-size: 18px;
    padding: 21px 32px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}
.btn-garant button:hover{
background: #ca6005;
}
.btn-garant{
        padding-top: 25px;
}

.marker-youtube{
        font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    font-size: 19px;
    background: red;
    padding: 1px 12px;
    color: #fff;
    border-bottom: 0px;
    text-decoration: none;
    cursor: pointer;
}
.marker-youtube:hover{
        text-decoration: none;
        color: #fff;
        background: #f3811f;
}
.container-tittle{
    background: #fff;
    text-align: center;
    padding-bottom: 28px;
    margin-bottom: 49px;
}
.tittle-youtube{
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    font-size: 41px;
    position: relative;
}
.deskription-youtube{
font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 21px;    
}
.youtube-col{
    padding: 1%;
    display: inline-block;
    width: 49%;
}
.tittle-youtube:after{
    content: '';
    position: absolute;
    right: 90px;
    background-image: url(https://picua.org/images/2019/01/26/533642ef8c1d140953f92e78e358ed49.png);
    height: 42px;
    width: 60px;
    top: 16px;
}
.container-yotube-bg{
    background-image: url(https://picua.org/images/2019/01/26/127896de453f69472a1214bcbda9d937.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.row-yotube{
    text-align: center;
    padding-bottom: 25px;
}

.youtube-ling-btn{
    text-align: center;
    padding-bottom: 8px;
}
.youtube-ling-btn a{
border: 2px solid #e32924;
    text-decoration: none;
    padding: 9px 18px;
    color: #e42b26;
    position: relative;
    font-size: 21px;
}
.youtube-ling-btn a:after{
    content: '';
    position: absolute;
    right: -18px;
    top: 10px;
    background-image: url(<?php echo SITE; ?>/uploads/10618dc70aa6584ba1c6cc243506d823.png" alt="10618dc70aa6584ba1c6cc243506d823.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    height: 31px;
    width: 30px;
}

.youtube-ling-btn a:hover{
    text-decoration: none;
    opacity: 0.8;
}

.col-car{
    display: inline-block;
    width: 33%;
    text-align: center;
    background: #fff;
     padding: 0 1%;
}
.col-car.repair-kia p{
font-size: 12px;
}
.col-car.repair-kia{
    vertical-align: top;
     margin-bottom: 10px;
}
.col-car img{width: 100%;max-width: 100%;}
.col-car:hover {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
  box-shadow: 3px 4px 8px 0px #545454;
}
.car-tittle{
    max-width: 100%;
    margin: 0 auto;
    background: #1780c3;
    color: #fff;
    font-size: 34px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
}
.tittle-blockar{
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    font-size: 38px;
    text-align: center;
    position: relative;
    padding: 57px 0 0px 0;
    margin-bottom: 45px;
}
.tittle-blockar:after{
    left: 0;
    content: '';
    position: absolute;
    width: 25%;
    display: inline-block;
    height: 8px;
    background-color: #1b9bec;
    margin: 0 auto;
    right: 0;
    bottom: -14px;

}
.car-desk{
    max-width: 307px;
    margin:0 auto;
    text-align: left;
    padding: 9px 0 23px 0;
}
.col-car.repair-kia .car-desk{
    background: #f3f3f3;
    max-width: 100%;
    margin: 0 auto;
    text-align: left;
    padding: 2px 9px;
}
.car-price{
    font-size: 23px;
    color: #0258a1;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
}

.bg-form-wh{
    max-width: 957px;
    margin: 0 auto;
    background-image: url(https://picua.org/images/2019/01/26/aff1029b5ae31f0fac83160ae678814e.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 29px 0 50px 0;
}

.form-wh-tittle{
        text-transform: uppercase;
    font-size: 25px;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
}
.form-wh-desk{
    font-size: 23px;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    color: #fff;
    padding-bottom: 37px;
}

.btn-wh{
    font-size: 21px;
    text-transform: uppercase;
    background: #1780c3;
    border: 0px;
    padding: 10px 24px;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    box-shadow: 2px 4px 14px 0 #0a0a0a;
}
.btn-wh:hover{
        background: #2ca7f5;
}
.onas-container{
        padding-top: 68px;
}
.onas-bg{
    display: inline-block;
    width: 40%;
    background-image: url(https://picua.org/images/2019/01/26/fb0a97043cec70060d7161b06cd0f599.jpg);
    background-repeat: no-repeat;
    background-position: left;
    height: 909px;
}
.col-left-onas{
        float: right;
    padding-left: 10px;
    display: inline-block;
    width: 58%;
    padding-top: 91px;
}
.col-left-onas p{
font-size: 12px;
    max-width: 773px;
}
.tittle-onas{
    font-size: 41px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    position: relative;
}
.tittle-onas:before{
    bottom: 0;
    content: '';
    border-bottom: 5px solid #1780c3;
    width: 150px;
    position: absolute;
    left: 0;
}
.ic-1{
    display: inline-block;
    height: 71px;
    width: 71px;
    background-image: url(../<?php echo SITE; ?>/uploads/onas-ic-1.png);
    background-repeat: no-repeat;
    background-position: center;
    background-color: #3261b7;
    margin-right: 18px;
}
.ic-2{
    display: inline-block;
    height: 71px;
    width: 71px;
    background-image: url(../<?php echo SITE; ?>/uploads/onas-ic-2.png);
    background-repeat: no-repeat;
    background-position: center;
    background-color: #3261b7;
    margin-right: 18px;
}
.ic-3{
    display: inline-block;
    height: 71px;
    width: 71px;
    background-image: url(../<?php echo SITE; ?>/uploads/onas-ic-3.png);
    background-repeat: no-repeat;
    background-position: center;
    background-color: #3261b7;
    margin-right: 18px;
}
.feadback-tittle{
    text-align: center;
    font-size: 41px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    color: #000;
}
.feadback-tittle a{
    font-size: 24px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    display: block;
    color: #053977;
}
.foto-feadback{
    display: inline-block;
    height: 44px;
    width: 44px;
    background-image: url(<?php echo SITE; ?>/uploads/564c2712c5b2bc5df97e08103a1a8402.png);
    background-repeat: no-repeat;
    background-position: center;
}
.foto-feadback.face-2{
    background-image: url(<?php echo SITE; ?>/uploads/dea18db1fc8ab53aedd5b7e0f706dc29.png);
}
.foto-feadback.face-3{
    background-image: url(<?php echo SITE; ?>/uploads/0779731cb2bbd554eec4d82bbd91b0c2.png);
}
.foto-feadback.face-4{
    background-image: url(<?php echo SITE; ?>/uploads/2820e9e4260cb1f673f5518e341162e6.png);
}
.foto-feadback.face-5{
    background-image: url(<?php echo SITE; ?>/uploads/cfb0c33b7ebec5060403d21bc922cb07.png);
}
.name-feadback{
    display: inline-block;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    color:#365899;
    font-size: 14px;
}
.desk-tittle-feadback{
    display: inline-block;
    color: #616770;
    font-size: 13px;
}
.desk-tittle-feadback a{
        color: #365899;
    cursor: pointer;
    text-decoration: none;
        font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}
.desk-tittle-feadback a:hover{
    text-decoration: underline;
}
.date-feadback{
    font-size: 12px;
      color: #616770;
      position: relative;
}
.date-feadback:after{
    background-position: center center;
    background-image: url(<?php echo SITE; ?>/uploads/8e3f88c3a8d84d9b492589c4e3e3f1d7.png);
    height: 18px;
    width: 25px;
    background-repeat: no-repeat;
    content: '';
    position: absolute;
}
.name-f-col{
    display: inline-block;
}
.feadback-col p{
    font-weight: normal;
    line-height: 1.38;
    font-size: 14px;
}
.ic-like{
    font-size: 12px;
     color: #616770;
     position: relative;
     padding-left: 22px;
     display: inline-block;
     width: 70%;
}
.ic-like:before{
    left: 0;
    content: '';
    position: absolute;
    height: 16px;
    width: 16px;
    background-image: url(<?php echo SITE; ?>/uploads/1b62bcbcf86d64d7cce28861a4db5e05.png);
    background-repeat: no-repeat;
    background-position: center;
}
.coment-feadback{
    display:inline-block;
    width: 29%;
    text-align: right;
    font-size: 12px;
    color: #616770;
}

.feadback-col{
      border-bottom: 1px solid #d4d4d4;
    width: 49%;
    display: inline-block;
    padding: 23px 0 0px 0;
    height: 297px;
    vertical-align: bottom;
}
.container-bg-face{
        position: relative;
    background-image: url(https://picua.org/images/2019/01/26/ab747e6118198e9a16392a7204e92c16.jpg);
    background-repeat: no-repeat;
    background-position: center;
    text-align: center;
    vertical-align: top;
    background-size: contain;
    top: -42px;
}

.container-bg-face a{
    position: relative;
    padding: 18px 21px;
    background-color: #4080ff;
    color: #fff;
    border: 0px;
    font-size: 18px;
    top: 102px;
    box-shadow: 0px 5px 8px rgba(0,0,0,0.5);
}
.container-bg-face a:hover{
    background-color: #567ac1;
    text-decoration: none;
     -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
  transition: 0.8s;
}

.footer-bg{
    background-image: url(https://picua.org/images/2019/01/26/7ad6116051f8d742534f5025b69e4257.jpg);
    background-repeat: no-repeat;
    background-position: center;
    color: #fff;
}
.footer-container{
    background-color: #000;
}
.footer-container {
    box-shadow: 0px 4px 11px 0 black;
    max-width: 1230px;
    background-color: #1b1b1b;
    margin: 0 auto;
    padding: 30px 0 30px 0;
}
.col-cont-footer{
    width: 35%;
    display: inline-block;
}
.col-form-footer{
    width: 64%;
    display: inline-block;
    vertical-align: top;
}
.tittle-footer{
color: #fff;
        line-height: 50px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    font-size: 41px;
}
.tittle-footer p{
color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    font-size: 14px;
}
.bloc-tel-footer{
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    position: relative;
    padding-left: 51px;
}
.bloc-tel-footer span{
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    padding-right: 5px;
}
.bloc-tel-footer:before{
    height: 70px;
    width: 36px;
    content: '';
    background-color: #4080ff;
    background-image: url(<?php echo SITE; ?>/uploads/20e374ff4e88a3268533bfbb5e53cc99.png);
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    left: 0px;
}
.soc-footer{
    padding-top: 21px;
}
.soc-footer a{
display: inline-block;
    width: 25px;
    margin: 1%;
}
.soc-footer a img{
    width: 100%;
    max-width: 100%;
}
.tittle-form-footer{
    color: #fff;
    font-size: 31px;
    text-transform: uppercase;
    text-align: right;
    max-width: 606px;
}
.tittle-form-footer span{
    display: block;
    font-size: 15px;
    text-transform: lowercase;
}


#bx_form_iframe_27{
    height: 422px!important;
}
#bx_form_iframe_25{
    height: 326px!important;
}
.footer-bg{
    padding: 72px 0;
}

.face-btn-ic{
    display: inline-block;
    background-image: url(<?php echo SITE; ?>/uploads/a86d96f7d6df6cb4d84d0cbc049d264a.png);
    width: 37px;
    height: 40px;
    background-repeat: no-repeat;
}

.insta-btn-ic{
    display: inline-block;
    background-image: url(<?php echo SITE; ?>/uploads/47e707440f749e054a39ff22dc455a0e.png);
    width: 37px;
    height: 40px;
    background-repeat: no-repeat;
}
.youtube-btn-ic{
    display: inline-block;
    background-image: url(<?php echo SITE; ?>/uploads/72702c1ab287f9974cfd69e7e60dd80e.png);
    width: 37px;
    height: 40px;
    background-repeat: no-repeat;
}


.face-btn-ic:hover, .insta-btn-ic:hover,.youtube-btn-ic:hover {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
.btn-messeng a{
        display: inline-block;
    width: 23px;
}
.btn-messeng a img{
    width: 100%;
    max-width: 100%;
}
.video-block-bg{
    width: 100%;
}
.video-block-container{
    max-width: 985px;
    margin: 0 auto;
    padding: 25px 0px ;
}
.zap-desk{
    text-align: center;
    padding-bottom: 12px;
    color: red;
}
@media only screen and (max-width : 1920px){
.container-mobile-768{display: none;}
.videos-mobile{display: none;}
}
@media only screen and (max-width : 1182px){
.onas-bg{ 
    background-position: -30px 0;
    width: 26%;
}
.col-left-onas{
        width: 71%;
}
}
@media only screen and (max-width : 1050px){
.tittle-consult {line-height: 38px; font-size: 39px;}
.cont-tittle-cons {max-width: 400px;}
}
@media only screen and (max-width : 1040px){
 .tittle-garant:after{
    margin: 0 auto;
    right: 0px;
    left: 0px;
}
.tittle-garant{
    text-align: center;
}
.tittle-work{text-align: center;}
.tittle-work:after{margin: 0 auto;right: 0px;left: 0px;}
.row-block-1, .row-block-2{
    display: inline-block;
    width: 49.7%;
    vertical-align: top;
    position: relative;
}
 .row-block-3 {
    width: 100%;
 }
.class-col-1:after{display: none;}
.class-col-2:after{display: none;}
.class-col-3:after{display: none;}
.class-col-4:after{display: none;}
.class-col-5:after{display: none;}
.class-col-6:after{display: none;}
.work-col.class-col-5, .work-col.class-col-6{
width: 49.7%;
display: inline-block;
}
.row-work-col {
    max-width: 800px;
    padding-top: 41px;
    margin: 0 auto;
    text-align: center;
}
.bnt-work button{margin: 0 auto;}
.garant-col-1, .garant-col-2, .garant-col-3, .garant-col-4, .garant-col-5 {
    width: 49.7%;
    display: inline-block;
    vertical-align: top;
    padding-bottom: 73px;
}
.garant-row{
    max-width: 696px;
    margin: 0 auto;
}
}
@media only screen and (max-width : 1022px){
.tittle-youtube:after{display: none;}
}
@media only screen and (max-width : 990px){
.col-car{
    width: 49.7%;
}

}
@media only screen and (max-width : 980px){
.youtube-col {
    padding: 1%;
    display: inline-block;
    width: 100%;
}
}
@media only screen and (max-width : 974px) {
.tittle-header {
    padding-top: 148px;
    font-size: 40px;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    line-height: 60px;
}
.description-tittle {
    padding-top: 59px;
    padding-bottom: 125px;
}

}
@media only screen and (max-width : 960px){
.feadback-col{   
 width: 100%;
 height:auto;   
 padding: 23px 0 21px 0;
 }
 .feadback-col.container-bg-face{
        padding-bottom: 25px;
    padding-top: 0px;
    border: 0px;
    position: relative;
    top: -45px;
    background-image: none;
 }
 .soc-footer {
    text-align: center;
    padding-top: 21px;
}

}
@media only screen and (max-width : 950px){
.col-cont-footer{
    display: block;
    width: 100%;
}
.col-form-footer{
    display: block;
    width: 100%;
}
.footer-container{
    max-width: 680px;
}
.tittle-form-footer {
    font-size: 31px;
    text-transform: uppercase;
    text-align: center;
    padding-top: 19px;
}
.col-cont-footer {
    display: block;
    width: 100%;
    max-width: 282px;
    margin: 0 auto;
}
.tittle-footer{
    text-align: center;
}
}
@media only screen and (max-width : 940px) {
.menu-header ul{padding: 0px;}
}
@media only screen and (max-width : 920px){
    .onas-bg{display: none;}
    .tittle-onas:before{
        margin: 0 auto;
        right: 0px;
    }
 .col-left-onas {
    float: none;
  padding: 10px;
    display: block;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    background: #fffffffa;
}
.col-left-onas p {
       text-align: left;
    margin: 0 auto;
    font-size: 14px;
    max-width: 100%;
}
  .onas-container{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
    width: 100%;
  }
}


@media only screen and (max-width : 890px) {
.logo img{max-width: 50px}
.logo {
    position: relative;
    float: left;
    width: 2%;
    top: -75px;
}
.menu-header {
    text-align: center;
    width: 100%;
    float: none;
}
.menu-header ul li a{font-size: 16px;}
}

@media only screen and (max-width : 870px){
   .des-pc{display: none;}
  .desk-phone{display: block;} 
  .desk-phone .col-left-onas p{
        text-align: left;
    margin: 0 auto;
    font-size: 18px;
    max-width: 100%;
    padding-top: 20px;
  } 
.consult-col-1{width: 100%;display: block;    text-align: center;}
.cont-tittle-cons {
    margin: 0 auto;
    max-width: 400px;
}
.consult-col-2{
    width: 100%;
}
.form-b24-call {
    position: relative;
    top: 0;
    right: 0;
}
.form-b24-bg {
    margin: 0 auto;
    max-width: 100%;
    height: 220px;
    background: #00000091;
    position: relative;
    top: 0px;
    left: 0;
}
.container-consul-bg {
    background: #000;
    height: auto;
}
.tittle-garant{padding-top: 20px;}
}


@media only screen and (max-width : 768px) {
.videos-mobile{display: block;}
.container-mobile-768{display: block;}
.container-header-bg{display: none;}    
    
.col-header-1 {
    text-align: center;
}
.mobile-logo{display: block;}
.phone-col{display: block;}
.social-ic{
    padding: 14px 0px;
    top: 0px;
}
.menu-header{display: none;}
.logo {
    display: none;
    position: relative;
    float: none;
    width: 100%;
    top: 0;
    text-align: center;
}
.tittle-header{
        max-width: 458px;
        line-height: 25px;
        margin: 0;
        font-size: 25px;
        margin: 0 auto;
        padding-top: 97px;
}
.tittle-header br{display: none;}
.font-tittle{
    font-size: 25px;
}
.bg-tittle-header{background-image: none;}
.desc-col-1{display: none;}
.description-tittle{text-align: center;}
.container-bcg-mobil{background: #424242ba;}



.container-mobile-768{text-align: center;    padding-bottom: 33px;}
.container-mobile-768 .phone-num{
    width: 202px;
    margin: 0 auto;
    position: relative;
    top: -2px;
}
.container-mobile-768 .social-ic{
    top: 93px;
    padding: 2px 0;
    width: 39px;
    margin: 0;
}
.container-mobile-768 .social-ic a{
    display: block;
}
.mobile-logo-top{
    padding-top: 47px;
    text-align: center;
   padding-bottom: 25px;
}
.tittle-header-mobile768{
        text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-weight: 800;
    font-size: 30px;
    margin: 0 auto;
    padding-bottom: 34px;
     max-width: 326px;
}
.container-mobile-768 button.mob768{
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 20px;
    background: #ff3030;
    color: #ffff;
    border: 0px;
    padding: 14px 35px;

}
}
@media only screen and (max-width : 718px){
.col-car {
    width: 100%;
    border-bottom: 5px solid #d6d6d6;
    margin-bottom: 10px;
}
.col-car img{
    max-width: 100%;
    width: 100%;
}
.tittle-blockar {
    max-width: 350px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    font-size: 29px;
    margin: 0 auto 38px auto;
}
.car-tittle{max-width: 100%;}
.bg-form-wh{display: none;}
}
@media only screen and (max-width : 672px){
.garant-col-1, .garant-col-2, .garant-col-3, .garant-col-4, .garant-col-5 {
    width: 100%;
    display: inline-block;
    vertical-align: top;
    padding-bottom: 73px;
}
.garant-row {
    max-width: 336px;
    margin: 0 auto;
}
}
@media only screen and (max-width : 642px){
.footer-bg {
    padding: 49px 0 0 0;
}
#bx_form_iframe_25{
    height: 447px!important;
}
}
@media only screen and (max-width : 636px){
    .work-col {
    display: inline-block;
    height: 238px;
    width: 100%;
    vertical-align: text-bottom;
    text-align: left;
}
    .col-left-onas p {
    margin: 0 auto;
    font-size: 15px;
    padding: 35px 0;
}
.row-block-1, .row-block-2{width: 100%;}
.work-col.class-col-5, .work-col.class-col-6{width: 100%;}
.row-work-col { max-width: 299px;}
.class-col-6 .work-num:after{left: 186px;}
.container-work-bg .tittle-work {
    padding-top: 51px;
    text-align: center;
}
.tittle-work:after {
    margin: 0 auto;;
    left: 0;
    right: 0;
}
.row-block-1,.row-block-2,.row-block-3 {
    padding-left: 0;
}
}
@media only screen and (max-width : 492px){
.feadback-col {
    border-bottom: 1px solid #d4d4d4;
    width: 100%;
    display: inline-block;
    padding: 23px 0 21px 0;
    height: auto;
}
.tittle-consult {
    font-size: 29px;
}
}
@media only screen and (max-width : 440px){
.tittle-youtube{font-size: 24px;}
}
@media only screen and (max-width : 384px){
.garant-tittle-col { font-size: 20px;}
}
@media only screen and (max-width : 340px){
.car-tittle {
    font-size: 21px;
}
.car-desk{text-align: center;}
.car-desk span{display: block;}
.col-car{
    border-bottom: 5px solid #d6d6d6;
    margin-bottom: 10px;
}
}</style>
</body>
</html>