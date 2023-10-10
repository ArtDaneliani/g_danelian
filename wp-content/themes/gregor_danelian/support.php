<?php
/*Template Name: support*/
get_header('supp');
?>
<div class="page-bg_mob"></div>
	<section class="main" id="main">
		<div class="container">
			<h1> Поддержка сайтов</h1>
			<p class="">Технический аудит и сопровождение,<br>
наполнение и администрация</p>
          
            <a href="#contacts-sect" class="btn  anchor-link-js"><span><?php echo __('узнать стоимость', 'gersis') ?></span></a>
		</div>
	<!--баннер -->
	</section>  
	
<!--О нас-->

<section class="about" id="about-sect">
    <div class="container">
        <div class="title" style="line-height: 90px;top: -0.8em;position: relative;"><?php echo __('О нас', 'gersis') ?></div>
        <div class="about__inner">
            <div class="about__left">
                <div class="about__logo">
                    <div class="about_descript">
                        <p>
                            При создании сайтов мы обращаем внимание на то, 
                            как пользователь будет взаимодействовать с сайтом.<br>
                            Приоритет: удобная навигация, функциональность и продающая структура.<br>
                            <span>gersis <in>software</in></span> - команда разработчиков и маркетологов из Минска 
                            с большим опытом в реализации проектов различной сложности.
                        </p>
                    </div>
                 
                </div>
                <div class="about__subtitle">
                    <?php echo $about['subtitle_about'] ?>
                </div>
            </div>
            <div class="about__right" id="about__count">
                <div class="about__map about__support" style="margin:-7em 0px 0px 0px;width:463px;">
                    <img class="belarus" src="/wp-content/themes/gersis/img/supp/22.jpg" alt="">
                </div>
            </div>
        </div>
        <hr  class="line_1">
    </div>
</section>

<!--этапы разработки-->

<section class="step_dev_2 step_dev_supp" style="top: 0;">
        <h1 class="text_name">техническое Сопровождение</h1>
        <div class="block_text_descr2"><h2 class="text_description">Решение любых технических задач по сайту</h2>
        </div>
       <div class="container dev__stages">
           <div class="row dev_stages">
               <div class="col-lg-4 col-6 stages_grid">
                <a href="">
                   <div class="stages_item">
                       <img src="/wp-content/themes/gersis/img/supp/malware.png" alt="">
                       <img src="/wp-content/themes/gersis/img/supp/malware2.png" alt="">
                           <span>Очистка и защита от вирусов</span>
                   </div>
                </a>   
               </div>
               <div class="col-lg-4 col-6 stages_grid">
                <a href="">
                   <div class="stages_item">
                       <img src="/wp-content/themes/gersis/img/supp/refresh.png" alt="">
                       <img src="/wp-content/themes/gersis/img/supp/refresh2.png" alt="">
                       <span>Обновление CMS-системы и модулей</span>
                   </div>
                </a>   
               </div>
               <div class="col-lg-4 col-6 stages_grid">
                 <a href=""> 
                   <div class="stages_item">
                       <img src="/wp-content/themes/gersis/img/supp/web-hosting.png" alt="">
                       <img src="/wp-content/themes/gersis/img/supp/web-hosting2.png" alt="">
                      <span>Перенос сайта на новый хостинг</span>
                   </div>
                  </a> 
               </div>
               <div class="col-lg-4 col-6 stages_grid">
                  <a href="">                   
                   <div class="stages_item">
                       <img src="/wp-content/themes/gersis/img/supp/ssl.png" alt="">
                       <img src="/wp-content/themes/gersis/img/supp/ssl2.png" alt="">
                      <span>Установка SSL-сертфиката (https)</span>    
                   </div>
                  </a>
               </div>
               <div class="col-lg-4 col-6 stages_grid">
                  <a href="">
                   <div class="stages_item">
                       <img src="/wp-content/themes/gersis/img/supp/web.png" alt="">
                       <img src="/wp-content/themes/gersis/img/supp/web2.png" alt="">
                      <span>Технический аудит сайта</span>
                   </div>
                 </a>  
               </div>
               <div class="col-lg-4 col-6 stages_grid">
                  <a href="">
                   <div class="stages_item">
                       <img src="/wp-content/themes/gersis/img/supp/dashboard.png" alt="">
                       <img src="/wp-content/themes/gersis/img/supp/dashboard2.png" alt="">
                       <span>Мониторинг работоспособности</span>
                   </div>
                  </a>
               </div>
               
                <div class="col-lg-12">
                    <div class="cms">
                        <img src="/wp-content/themes/gersis/img/supp/wordpress.png" alt="" style="width: 200px;">
                        <img src="/wp-content/themes/gersis/img/supp/bitrix.svg" alt="" style="width: 200px;">
                        <img src="/wp-content/themes/gersis/img/supp/modx.png" alt="" style="width: 150px;">
                    </div>
                </div>
           </div>
       </div>
</section>

<!--администрирование-->

<section class="cases" id="cases-sect" style="top: 2em;">
    <div class="container-fluid cases-test">
       <img class="img-fluid" src="/wp-content/themes/gersis/img/401.png" alt="">
    </div>  
    <div class="container-fluid cases-test1" style="padding: 10px 0px;margin: -5px auto;">
        <div class="container cases_cont">
                <h2 class="text_name"><?php echo __('Администрирование', 'gersis') ?></h2>
            <div class="block_text_descr">
                <h2 class="text_description">пусть пока будет. пусть пока будет.
                        пусть пока будет. пусть пока будет. пусть пока будет.</h2>
            </div>
        </div>
        <div class="container admin__content">
            <div class="row">
                <div class="col-lg-4">
                    <img src="/wp-content/themes/gersis/img/supp/admin.png" alt="" style="height: auto;">
                </div>
                <div class="col-lg-4">
                    <div class="adm_list">
                        <div class="d20 d20_mob_1" style="top: 1.8rem;left: -12px;"></div>
                        <div class="d20 d20_mob_1" style="top: 6.8rem;left: -12px;"></div>
                        <ul style="position: absolute;top: 0;">
                            <li>Подготовка контента,
                                добавление на сайт 
                                (включая написание текстов 
                                и обработку фото)</li>
                            <li>
                                Юзабилити и SEO аудит сайта
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="adm_list">
                        <div class="d20 d20_mob_1" style="top: 1.8rem;left: -12px;"></div>
                        <div class="d20 d20_mob_1" style="top: 6.2rem;left: -12px;"></div>
                        <div class="d20 d20_mob_1" style="top: 10rem;left: -12px;"></div>
                        <ul style="position: absolute;top: 0;">
                            <li>Установка и настройка
                                счетчиков аналитики</li>
                            <li>
                                Регистарция сайта
                                в поисковых системах,
                                настройка индексации
                            </li>
                            <li>
                                Регистарция 
                                в тематических каталогах
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid cases-test2">
        <img class="img-fluid" src="/wp-content/themes/gersis/img/400.png" alt="">  
    </div>    
</section>

<!--Стоимость-->
<section class="prices">
    <div class="container prices_cont">
        <h1 class="text_name"><?php echo __('Стоимость', 'gersis') ?></h1>
    </div>
    <div class="container price_list">
        <div class="row">
            <div class="col-lg-4">
                <ul class="work_list">
                    <li>Мониторинг сайта</li>
                    <li>Подготовка контента, добавление на сайт</li>
                    <li>Аудит сайта, работа программиста</li>
                    <li>Ежемесячный отчет</li>
                </ul>
            </div>
        </div>

            <div class="col-lg-8 offset-3 packages">
                <div class="row">
                    <div class="col-md-4">
                            <div class="package_s">
                                <div class="pack_wrapp">
                                    <p>пакет S</p>
                                    <div id="triangle"></div>
                                </div>
                                <div class="container check_box">
                                <ul class="">
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/line.png" alt=""></li>
                                </ul>
                                </div>
                                <div id="rectangle">
                                    <p>00 BYN в неделю</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                      
                            <div class="package_l">
                                <div class="pack_wrapp">
                                    <p>пакет L</p>
                                    <div id="triangle"></div>
                                </div>
                                <div class="container check_box">
                                <ul class="">
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                </ul>
                                </div>
                                <div id="rectangle">
                                    <p>00 BYN в неделю</p>
                                </div>
                            </div>
                       
                    </div>
                    <div class="col-md-4">
                    
                            <div class="package_m">
                                <div class="pack_wrapp">
                                    <p>пакет M</p>
                                    <div id="triangle"></div>
                                </div>
                                <div class="container check_box">
                                <ul class="">
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                    <li><img src="/wp-content/themes/gersis/img/supp/check.png" alt=""></li>
                                </ul>
                                </div>
                                <div id="rectangle">
                                    <p>00 BYN в неделю</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>    
            <div class="col-lg-8 offset-3 hour_price">
                <p>1 час работы специалиста вне пакета - 36 BYN</p>
            </div>
        
        <div class="service_order" style="display: flex; justify-content: center;">
            <a href="#" class="modal-trigger" data-modal="modal-name">
            <button type="button" class="btn2 b24-web-form-popup-btn-6">Заказать услугу</button>
            </a>
        </div>
    </div>
    </div>
</section>

<!--Обратная связь-->
    <section class="portfolio_sect_bottom ">
    <h1 class="text_name2">остались вопросы?</h1>
    <div style="margin: 0 auto; width: 100%; margin-top: 1em;"><h2 class="text_description2">менеджер перезвонит вам в течении 10 минут</h2></div>
    <div style="display: flex; justify-content: center;min-height: 150px;">
        <a href="#" class="modal-trigger" data-modal="modal-name">
            <button class="btn2 b24-web-form-popup-btn-6">Заказать звонок</button>
        </a>
        </div>
</section>

    <div class="portfolio_sect1">
        <div class="container">
        <h1 class="text_name2">остались вопросы?</h1>
        <div style="margin: 0 auto; width: 215px; margin-top: 1em;"><h2 class="text_description2">менеджер перезвонит вам в течении 10 минут</h2></div>
        <div style="display: flex; justify-content: center;">
            <a href="#" class="modal-trigger" data-modal="modal-name">
            <button type="button" class="btn2 b24-web-form-popup-btn-6">Заказать звонок</button>
            </a>
        </div>
        </div>
    </div>

<!--контакты-->

	<section class="contacts" id="contacts-sect">
		<div class="container">
			<div class="title"><?php echo __('Контакты', 'gersis') ?></div>
			<form> 
				<div class="field ">
					<div class="input-wrapp">
						<input class="input" type="text" placeholder="Имя" required name="fname">
					<!--	<label class="label"><?php echo __('Имя', 'gersis') ?>*</label>      -->
					</div>
					<div class="input-wrapp">
                         <div class="panel panel-default">
                            <div class="panel-body">
                               <div class="btn-group" style="height: 62px;max-height: 60px;">
                                 <button type="button" class="btn btn-serv dropdown-toggle"  data-toggle="dropdown" id="uslugi">
                                   <span data-bind="label">Услуга</span>&nbsp;<span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu" id="dropdownmenujs"  role="menu">
                                   <li><a href="#">Услуга</a></li>
                                   <li><a href="#">Одностраничный сайт - лендинг</a></li>
                                   <li><a href="#">Многостраничный (корпоративный) сайт</a></li>
                                   <li><a href="#">Интернет-магазин</a></li>
                                   <li><a href="#">Аудит сайта</a></li>
                                 </ul>
                               </div>
                             </div>
                          </div>
						<input class="input" type="hidden" placeholder="Услуга" required name="usluga" value="Услуга" id="usluga"> 
					</div>
				</div>
				<div class="field ">
					<div class="input-wrapp">
						<input class="input"  type="email" placeholder="E-mail" required name="email">
					<!--	<label class="label"><?php echo __('Email', 'gersis') ?>*</label>    -->
					</div>
					<div class="input-wrapp">
						<input class="input" type="text"placeholder="Компания"  name="company">
					<!--	<label class="label"><?php echo __('Компания', 'gersis') ?>*</label>   -->
					</div>
				</div>
				<textarea maxlength="5000"  placeholder="<?php echo __('Расскажите о своем проекте...', 'gersis') ?>"
					class="input" name="msg"></textarea>
				<div class="file-wrapp">
					<div class="input-file__icon">

					</div>
					<input type="file" name="files" id="file-1" class="inputfile"
						data-multiple-caption="{count} <?php echo __('файлов выбрано', 'gersis') ?>"/>
					<label for="file-1">
						<span><?php echo __('Приложить файл', 'gersis') ?></span>
					</label>
				</div>
				<?php wp_nonce_field() ?>
				<button class="form-btn" onclick="yaCounter57476164.reachGoal('sendinfo'); return true;" data-text="<?php echo __('Отправить', 'gersis') ?>" type="submit"/>
				<span><?php echo __('Отправить', 'gersis') ?></span></button>
			</form>
		</div>
	</section>
    <?php
		$lang = pll_current_language();
		switch ($lang) {
			case 'ge': {
				$option = 'option_ge';
				break;
			}
			case 'en': {
				$option = 'option_en'; 
				break;
			}
			default: {
				$option = 'option';
				break;
			}
		}


		$addresses = get_field('addresses', $option);
		switch ($lang) {
			case 'ge': {
				$office = $addresses['tbilisi'];
				break;
			}
			case 'en': {
				$office = $addresses['dover'];
				break;
			}
			default: {
				$office = $addresses['minsk'];
				break;
			}
		}
	?>
<?php
	get_footer();
?>






	