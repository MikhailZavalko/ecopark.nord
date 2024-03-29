<?php
if (!defined('ABSPATH')) {
	exit;
}
$template_url = get_template_directory_uri();

get_header(); ?>


<section class="top-section" id="home">

	<div class="slides">
		<div class="slide" style="background: url('<?php echo $template_url; ?>/img/slides/1.jpg') center no-repeat; background-size: cover;"></div>
		<div class="slide" style="background: url('<?php echo $template_url; ?>/img/slides/2.jpg') center no-repeat; background-size: cover;"></div>
		<div class="slide" style="background: url('<?php echo $template_url; ?>/img/slides/3.jpg') center no-repeat; background-size: cover;"></div>
		<div class="slide" style="background: url('<?php echo $template_url; ?>/img/slides/4.jpg') center no-repeat; background-size: cover;"></div>
	</div>

	<div class="top-content">
		<div class="div">

			<h1>Коттеджный посёлок <br><span>«Экопарк Северный»</span></h1>

			<a href="#take-information" class="top-button ripplelink open-form-button"><span>Узнать Подробнее</span></a>

			<div class="icon-line">

				<div class="icon-text">
					<div class="icon">
						<img src="<?php echo $template_url; ?>/img/top-icon-1.svg" class="img-responsive" alt="icon">
					</div>
					<div class="text">
						<p>2 километра до <br>ост. Полярная</p>
					</div>
				</div>

				<div class="icon-text">
					<div class="icon">
						<img src="<?php echo $template_url; ?>/img/top-icon-2.svg" class="img-responsive" alt="icon">
					</div>
					<div class="text">
						<p>Все <br>коммуникации</p>
					</div>
				</div>

				<div class="icon-text">
					<div class="icon">
						<img src="<?php echo $template_url; ?>/img/top-icon-5.svg" class="img-responsive" alt="icon">
					</div>
					<div class="text">
						<p>71 <br>участок</p>
					</div>
				</div>

			</div>

		</div>
	</div>

</section>



<section class="about-section">
	<div class="container">

		<div class="about-text">
			<div class="text">
				<h2>О проекте</h2>
				<a href="<?php echo $template_url; ?>/img/about-img.jpg" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/about-img_sm.jpg) center; background-size: cover;"></a>
				<ul>
					<li>Коттеджный поселок "Экопарк Северный" расположен в 2 км. за остановкой Полярная, на дороге ведущей в Виноградовку среди грушевых садов</li>
					<li>Северный - самый экологический район, это знают все жители Хабаровска</li>
					<li>Район активно развивается и застраивается коттеджами</li>
					<li>Всего в 2 км. от поселка начинается городская инфраструктура: школа №58, средняя школа «Успех», детские сады №133, 14, 22, гипермаркеты, торговые центры.</li>
				</ul>
			</div>
			<a href="<?php echo $template_url; ?>/img/about-img.jpg" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/about-img_sm.jpg) center; background-size: cover;"></a>
		</div>

		<div class="about-items">

			<div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php echo $template_url; ?>/img/about-icon-1.svg" alt="icon"></div>
				<div class="text">
					<h4>Электричество</h4>
					<p>Электрическая мощность на каждый дом 15 кВт</p>
				</div>
			</div>

			<div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php echo $template_url; ?>/img/about-icon-2.svg" alt="icon"></div>
				<div class="text">
					<h4>Водопровод</h4>
					<p>Единая централизованная <br>скважина с системой очистки</p>
				</div>
			</div>

			<!-- <div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php// echo $template_url; ?>/img/about-icon-8.svg" alt="icon"></div>
				<div class="text">
					<h4>Безопасность</h4>
					<p>Огороженная территория</p>
				</div>
			</div> -->

			<div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php echo $template_url; ?>/img/about-icon-7.svg" alt="icon"></div>
				<div class="text">
					<h4>Участок</h4>
					<p>В собственности от 6 до 10 соток</p>
				</div>
			</div>

			<div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php echo $template_url; ?>/img/about-icon-3.svg" alt="icon"></div>
				<div class="text">
					<h4>Канализация</h4>
					<p>Септик / Шамбо объемом 10 <sup>м3</sup></p>
				</div>
			</div>

			<div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php echo $template_url; ?>/img/about-icon-6.svg" alt="icon"></div>
				<div class="text">
					<h4>Отопление</h4>
					<p>Автономное - электрические радиаторы / водяной тёплый пол</p>
				</div>
			</div>

			<div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php echo $template_url; ?>/img/about-icon-4.svg" alt="icon"></div>
				<div class="text">
					<h4>Скорость</h4>
					<p>Строительство каменного <br>дома за 4 месяца<sup><small>*</small></sup><br><small>* со дня производства домокомплекта</small></p>
				</div>
			</div>

			<div class="about-item">
				<div class="icon"><img class="img-responsive" src="<?php echo $template_url; ?>/img/about-icon-9.svg" alt="icon"></div>
				<div class="text">
					<h4>Строим круглый год</h4>
					<p></p>
				</div>
			</div>

		</div>

	</div>
</section>



<div class="map-general-section" id="general-plan">
	<div class="container">
		<h3 class="type-head">Генплан коттеджного поселка "Экопарк Северный"</h3>
		<?php echo do_shortcode('[map]'); ?>
		<!-- <img class="img-responsive" src="<?php// echo $template_url; ?>/img/general-plan.png" alt="general plan"> -->
		<div class="button-container">
			<a href="#take-booking" class="top-button ripplelink open-form-button"><span>Забронировать участок</span></a>
		</div>
		<h3 class="type-head">Выбирайте коттедж своей мечты!</h3>
		<p>Колоссальный опыт строительства позволил нам создать совершенные дома, в которых хочется жить.</p>
		<p>Здесь все продумано до мелочей: 2 санузла, французские окна на втором этаже, визуально увеличивающие пространство, просторные кухня и гостиная.</p>
		<p>А главное, все это по стоимости обычной двухкомнатной квартиры в нашем городе. Преимущества жизни в своем доме очевидны.</p>
	</div>
</div>














<section class="houses-section" id="our-homes">
	<div class="container">

		<div class="tabs houses four-tab-buttons">

			<div class="tab-contents">


				<div class="tab-content active" data-tab="small">

					<div class="name-image">
						<h3>Одноэтажный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/sm.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-1_4th_roof"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/2.jpg?v=1.7" data-fancybox="house-1_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/3.jpg?v=1.7" data-fancybox="house-1_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/4.jpg?v=1.7" data-fancybox="house-1_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/5.jpg?v=1.7" data-fancybox="house-1_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/scheme.jpg?v=1.7" data-fancybox="house-1_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/1_4th_roof/scheme.jpg?v=1.7"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный дом 82,33 м<sup><small>2</small></sup><br> с четырехскатной кровлей</h2>
						<h4>Наполнение дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; Ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля: стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо без ограждения</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
							<li>Заезд на земельный участок (труба 6м диаметром 325мм)</li>
						</ul>
						<h2>Стоимость: 6.09 <small>млн. ₽</small></h2>
					</div>

				</div>


				<div class="tab-content" data-tab="medium">

					<div class="name-image">
						<h3>Одноэтажный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/sm.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-2_4th_roof"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/2.jpg?v=1.7" data-fancybox="house-2_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/3.jpg?v=1.7" data-fancybox="house-2_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/4.jpg?v=1.7" data-fancybox="house-2_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/scheme.jpg?v=1.7" data-fancybox="house-2_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/2_4th_roof/scheme.jpg?v=1.7"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный дом 98,55 м<sup><small>2</small></sup><br> с четырехскатной кровлей</h2>
						<h4>Наполнение дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; Ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля: стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо без ограждения</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
							<li>Заезд на земельный участок (труба 6м диаметром 325мм)</li>
						</ul>
						<h2>Стоимость: 6.72 <small>млн. ₽</small></h2>
					</div>

				</div>

				<div class="tab-content" data-tab="big">

					<div class="name-image">
						<h3>Одноэтажный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/sm.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-3_4th_roof"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/2.jpg?v=1.7" data-fancybox="house-3_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/3.jpg?v=1.7" data-fancybox="house-3_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/4.jpg?v=1.7" data-fancybox="house-3_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/5.jpg?v=1.7" data-fancybox="house-3_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/scheme.jpg?v=1.7" data-fancybox="house-3_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/3_4th_roof/scheme.jpg?v=1.7"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный дом 122,16 м<sup><small>2</small></sup><br> с четырехскатной кровлей</h2>
						<h4>Наполнение дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; Ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля: стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо без ограждения</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
							<li>Заезд на земельный участок (труба 6м диаметром 325мм)</li>
						</ul>
						<h2>Стоимость: 7.30 <small>млн. ₽</small></h2>
					</div>

				</div>

				<div class="tab-content" data-tab="large">

					<div class="name-image">
						<h3>Одноэтажный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/1.jpg?v=1.2" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/sm.jpg?v=1.2) center; background-size: cover;" data-fancybox="house-4_4th_roof"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/2.jpg?v=1.2" data-fancybox="house-4_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/2.jpg?v=1.2"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/3.jpg?v=1.2" data-fancybox="house-4_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/3.jpg?v=1.2"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/4.jpg?v=1.2" data-fancybox="house-4_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/4.jpg?v=1.2"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/scheme.jpg?v=1.2" data-fancybox="house-4_4th_roof" data-thumb="<?php echo $template_url; ?>/img/houses/single_lvl/4_4th_roof/scheme.jpg?v=1.2"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный дом 150 м<sup><small>2</small></sup><br> с четырехскатной кровлей</h2>
						<h4>Наполнение дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; Ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля: стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо без ограждения</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
							<li>Заезд на земельный участок (труба 6м диаметром 325мм)</li>
						</ul>
						<h2>Стоимость: 7.97 <small>млн. ₽</small></h2>
					</div>

				</div>

			</div>

			<div class="tab-btns">
				<button class="tab-btn active" data-tab="small">82м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="medium">98м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="big">122м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="large">150м<sup><small>2</small></sup></button>
			</div>

		</div>

	</div>

</section>








<section class="houses-section">
	<div class="container">

		<div class="tabs houses reverse four-tab-buttons">

			<div class="tab-contents">

				<div class="tab-content active" data-tab="small">
					<div class="text">
						<h2>Каменный надежный дом 83,3 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Мансардного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - мансардная утепленная с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 5.35 <small>млн. ₽</small></h2>
					</div>

					<div class="name-image">
						<h3>Мансардный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/attic_1/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/attic_1/sm/1.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-attic_1"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_1/2.jpg?v=1.7" data-fancybox="house-attic_1" data-thumb="<?php echo $template_url; ?>/img/houses/attic_1/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_1/3.jpg?v=1.7" data-fancybox="house-attic_1" data-thumb="<?php echo $template_url; ?>/img/houses/attic_1/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_1/4.jpg?v=1.7" data-fancybox="house-attic_1" data-thumb="<?php echo $template_url; ?>/img/houses/attic_1/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_1/5.jpg?v=1.7" data-fancybox="house-attic_1" data-thumb="<?php echo $template_url; ?>/img/houses/attic_1/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_1/scheme.jpg?v=1.7" data-fancybox="house-attic_1" data-thumb="<?php echo $template_url; ?>/img/houses/attic_1/scheme.jpg?v=1.7"></a>
						</div>
					</div>

				</div>

				<div class="tab-content" data-tab="medium">

					<div class="text">
						<h2>Каменный надежный дом 117 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Мансардного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - мансардная утепленная с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 6.09 <small>млн. ₽</small></h2>
					</div>

					<div class="name-image">
						<h3>Мансардный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/attic_2/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/attic_2/sm/1.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-attic_2"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_2/2.jpg?v=1.7" data-fancybox="house-attic_2" data-thumb="<?php echo $template_url; ?>/img/houses/attic_2/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_2/3.jpg?v=1.7" data-fancybox="house-attic_2" data-thumb="<?php echo $template_url; ?>/img/houses/attic_2/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_2/4.jpg?v=1.7" data-fancybox="house-attic_2" data-thumb="<?php echo $template_url; ?>/img/houses/attic_2/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_2/5.jpg?v=1.7" data-fancybox="house-attic_2" data-thumb="<?php echo $template_url; ?>/img/houses/attic_2/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_2/scheme.jpg?v=1.7" data-fancybox="house-attic_2" data-thumb="<?php echo $template_url; ?>/img/houses/attic_2/scheme.jpg?v=1.7"></a>
						</div>
					</div>

				</div>




				<div class="tab-content" data-tab="big">

					<div class="text">
						<h2>Каменный надежный дом 147 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Мансардного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - мансардная утепленная с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 6.94 <small>млн. ₽</small></h2>
					</div>

					<div class="name-image">
						<h3>Мансардный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/attic_3/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/attic_3/sm/1.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-attic_3"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_3/2.jpg?v=1.7" data-fancybox="house-attic_3" data-thumb="<?php echo $template_url; ?>/img/houses/attic_3/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_3/3.jpg?v=1.7" data-fancybox="house-attic_3" data-thumb="<?php echo $template_url; ?>/img/houses/attic_3/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_3/4.jpg?v=1.7" data-fancybox="house-attic_3" data-thumb="<?php echo $template_url; ?>/img/houses/attic_3/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_3/scheme.jpg?v=1.7" data-fancybox="house-attic_3" data-thumb="<?php echo $template_url; ?>/img/houses/attic_3/scheme.jpg?v=1.7"></a>
						</div>
					</div>

				</div>



				<div class="tab-content" data-tab="large">

					<div class="text">
						<h2>Каменный надежный дом 187 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Мансардного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - мансардная утепленная с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 8.20 <small>млн. ₽</small></h2>
					</div>

					<div class="name-image">
						<h3>Мансардный дом</h3>
						<a href="<?php echo $template_url; ?>/img/houses/attic_4/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/attic_4/sm/1.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-attic_4"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_4/2.jpg?v=1.7" data-fancybox="house-attic_4" data-thumb="<?php echo $template_url; ?>/img/houses/attic_4/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_4/3.jpg?v=1.7" data-fancybox="house-attic_4" data-thumb="<?php echo $template_url; ?>/img/houses/attic_4/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_4/4.jpg?v=1.7" data-fancybox="house-attic_4" data-thumb="<?php echo $template_url; ?>/img/houses/attic_4/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_4/5.jpg?v=1.7" data-fancybox="house-attic_4" data-thumb="<?php echo $template_url; ?>/img/houses/attic_4/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/attic_4/scheme.jpg?v=1.7" data-fancybox="house-attic_4" data-thumb="<?php echo $template_url; ?>/img/houses/attic_4/scheme.jpg?v=1.7"></a>
						</div>
					</div>

				</div>






			</div>

			<div class="tab-btns">
				<button class="tab-btn active" data-tab="small">90м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="medium">120м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="big">147м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="large">187м<sup><small>2</small></sup></button>
			</div>

		</div>


	</div>

</section>
















<section class="houses-section">
	<div class="container">

		<div class="tabs houses four-tab-buttons">

			<div class="tab-contents">

				<div class="tab-content active" data-tab="small">

					<div class="name-image">
						<h3>Народный дом "Классика"</h3>
						<a href="<?php echo $template_url; ?>/img/houses/classic_1/1.jpg" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/classic_1/sm.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-classic_1"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_1/2.jpg" data-fancybox="house-classic_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_1/2.jpg"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_1/3.jpg" data-fancybox="house-classic_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_1/3.jpg"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_1/4.jpg" data-fancybox="house-classic_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_1/4.jpg"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_1/5.jpg" data-fancybox="house-classic_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_1/5.jpg"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_1/scheme.jpg" data-fancybox="house-classic_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_1/scheme.jpg"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный надежный дом 90,04 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Народного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 5.75 <small>млн. ₽</small></h2>
					</div>

				</div>

				<div class="tab-content" data-tab="medium">

					<div class="name-image">
						<h3>Народный дом "Классика"</h3>
						<a href="<?php echo $template_url; ?>/img/houses/classic_2/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/classic_2/sm.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-classic_2"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_2/2.jpg?v=1.7" data-fancybox="house-classic_2" data-thumb="<?php echo $template_url; ?>/img/houses/classic_2/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_2/3.jpg?v=1.7" data-fancybox="house-classic_2" data-thumb="<?php echo $template_url; ?>/img/houses/classic_2/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_2/4.jpg?v=1.7" data-fancybox="house-classic_2" data-thumb="<?php echo $template_url; ?>/img/houses/classic_2/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_2/5.jpg?v=1.7" data-fancybox="house-classic_2" data-thumb="<?php echo $template_url; ?>/img/houses/classic_2/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_2/scheme.jpg?v=1.7" data-fancybox="house-classic_2" data-thumb="<?php echo $template_url; ?>/img/houses/classic_2/scheme.jpg?v=1.7"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный надежный дом 120,54 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Народного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 6.65 <small>млн. ₽</small></h2>
					</div>

				</div>

				<div class="tab-content" data-tab="big">

					<div class="name-image">
						<h3>Народный дом "Классика"</h3>
						<a href="<?php echo $template_url; ?>/img/houses/classic_3/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/classic_3/sm.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-classic_3"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_3/2.jpg?v=1.7" data-fancybox="house-classic_3" data-thumb="<?php echo $template_url; ?>/img/houses/classic_3/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_3/3.jpg?v=1.7" data-fancybox="house-classic_3" data-thumb="<?php echo $template_url; ?>/img/houses/classic_3/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_3/4.jpg?v=1.7" data-fancybox="house-classic_3" data-thumb="<?php echo $template_url; ?>/img/houses/classic_3/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_3/5.jpg?v=1.7" data-fancybox="house-classic_3" data-thumb="<?php echo $template_url; ?>/img/houses/classic_3/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_3/scheme.jpg?v=1.7" data-fancybox="house-classic_3" data-thumb="<?php echo $template_url; ?>/img/houses/classic_3/scheme.jpg?v=1.7"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный надежный дом 150,19 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Народного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 7.56 <small>млн. ₽</small></h2>
					</div>

				</div>

				<div class="tab-content" data-tab="large">

					<div class="name-image">
						<h3>Народный дом "Классика"</h3>
						<a href="<?php echo $template_url; ?>/img/houses/classic_4/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/classic_4/sm.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-classic_4"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_4/2.jpg?v=1.7" data-fancybox="house-classic_4" data-thumb="<?php echo $template_url; ?>/img/houses/classic_4/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_4/3.jpg?v=1.7" data-fancybox="house-classic_4" data-thumb="<?php echo $template_url; ?>/img/houses/classic_4/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_4/4.jpg?v=1.7" data-fancybox="house-classic_4" data-thumb="<?php echo $template_url; ?>/img/houses/classic_4/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_4/5.jpg?v=1.7" data-fancybox="house-classic_4" data-thumb="<?php echo $template_url; ?>/img/houses/classic_4/5.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_4/scheme.jpg" data-fancybox="house-classic_4" data-thumb="<?php echo $template_url; ?>/img/houses/classic_4/scheme.jpg?v=1.7"></a>
						</div>
					</div>

					<div class="text">
						<h2>Каменный надежный дом 193,94 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Народного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина глубиной 40м + насос, обвязка</li>
							<li>Септик 1,5 куб/сутки - либо шамбо 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 8 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
						</ul>
						<h2>Стоимость: 8.99 <small>млн. ₽</small></h2>
					</div>

				</div>

			</div>

			<div class="tab-btns">
				<button class="tab-btn active" data-tab="small">90м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="medium">120м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="big">150м<sup><small>2</small></sup></button>
				<button class="tab-btn" data-tab="large">200м<sup><small>2</small></sup></button>
			</div>

		</div>

	</div>

</section>







<section class="houses-section">
	<div class="container">

		<div class="tabs houses reverse">

			<div class="tab-contents">

				<div class="tab-content active" data-tab="small">
					<div class="text">
						<h2>Каменный надежный дом 160 м<sup><small>2</small></sup></h2>
						<h4>Наполнение Народного дома:</h4>
						<ul>
							<li>Фундамент буронабивной от 3 до 4м глубиной</li>
							<li>Фасад - окраска фасадной краской + декоративные элементы фахверк</li>
							<li>Трехслойные стеновые панели с утеплением: внешний фасад - бетон 5 см + утеплитель 15см + бетон 6 см</li>
							<li>Перекрытия: ребристые ж/б плиты с утеплением на 1 этаже + бетон; межэтажное ребристое бетонное перекрытие, ребристые ж/б плиты перекрытия с утеплением на кровле</li>
							<li>Кровля - стропильная система, четырехскатная холодная кровля с водосточной системой и подшивкой софитами</li>
							<li>Лестница межэтажная деревянная с состариванием и шлифованием</li>
							<li>Окна ПВХ, входная утепленная дверь</li>
							<li>Стояки хол. воды и канализации, подключение к сетям</li>
							<li>Внутренняя отделка: без отделки, заделка межпанельных швов, перегородки с/у 1-го этажа из отсевоблока</li>
							<li>Крыльцо, балконы с ограждением – ковка</li>
							<li>Вентиляция: пластиковый короб в с/у и кухне, выход на кровлю</li>
						</ul>
						<h4>Инженерные Сети:</h4>
						<ul>
							<li>Скважина</li>
							<li>Шамбо - 10 кубов</li>
							<li>Отопление - электрические радиаторы</li>
							<li>Электроэнергия - 15 кВт, ввод в дом, установка счетчика день/ночь</li>
						</ul>
						<h4>Благоустройство:</h4>
						<ul>
							<li>Земельный участок в собственности 10 соток</li>
							<li>Дорога внутриквартальная</li>
							<li>Освещение поселка</li>
							<li>Закрытая огороженная территория (общий забор)</li>
						</ul>
						<h2>Стоимость: 7.98 <small>млн. ₽</small></h2>
					</div>

					<div class="name-image">
						<h3>Дом "Классика с гаражом"</h3>
						<a href="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/1.jpg?v=1.7" class="image fancybox" style="background: url(<?php echo $template_url; ?>/img/houses/classic_w_garage_1/sm/1.jpg?v=1.7) center; background-size: cover;" data-fancybox="house-classic_w_garage_1"></a>
						<div class="d-none">
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/2.jpg?v=1.7" data-fancybox="house-classic_w_garage_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/2.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/3.jpg?v=1.7" data-fancybox="house-classic_w_garage_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/3.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/4.jpg?v=1.7" data-fancybox="house-classic_w_garage_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/4.jpg?v=1.7"></a>
							<a class="image fancybox" href="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/5.jpg?v=1.7" data-fancybox="house-classic_w_garage_1" data-thumb="<?php echo $template_url; ?>/img/houses/classic_w_garage_1/5.jpg?v=1.7"></a>
						</div>
					</div>

				</div>

			</div>

			<!-- <div class="tab-btns">
				<button class="tab-btn active" data-tab="small">160м<sup><small>2</small></sup></button>
			</div> -->

		</div>


	</div>

</section>












<!-- <div class="progress-section" id="progress-section">
	<div class="container">
		<h2 class="type-head">Ход строительства</h2>
		<div class="gallery">

			<a href="<?php// echo $template_url; ?>/img/process/1.JPG?v=1.2" class="image fancybox" style="background: url(<?php// echo $template_url; ?>/img/process/sm/1.jpg?v=1.2) center; background-size: cover;" data-fancybox="progress" data-thumb="<?php// echo $template_url; ?>/img/process/sm/1.jpg?v=1.2"></a>

			<a href="<?php// echo $template_url; ?>/img/process/2.JPG?v=1.2" class="image fancybox" style="background: url(<?php// echo $template_url; ?>/img/process/sm/2.jpg?v=1.2) center; background-size: cover;" data-fancybox="progress" data-thumb="<?php// echo $template_url; ?>/img/process/sm/2.jpg?v=1.2"></a>

			<a href="<?php// echo $template_url; ?>/img/process/3.JPG?v=1.2" class="image fancybox" style="background: url(<?php// echo $template_url; ?>/img/process/sm/3.jpg?v=1.2) center; background-size: cover;" data-fancybox="progress" data-thumb="<?php// echo $template_url; ?>/img/process/sm/3.jpg?v=1.2"></a>

			<a href="<?php// echo $template_url; ?>/img/process/4.JPG?v=1.2" class="image fancybox" style="background: url(<?php// echo $template_url; ?>/img/process/sm/4.jpg?v=1.2) center; background-size: cover;" data-fancybox="progress" data-thumb="<?php// echo $template_url; ?>/img/process/sm/4.jpg?v=1.2"></a>

			<a href="<?php// echo $template_url; ?>/img/process/5.JPG?v=1.2" class="image fancybox" style="background: url(<?php// echo $template_url; ?>/img/process/sm/5.jpg?v=1.2) center; background-size: cover;" data-fancybox="progress" data-thumb="<?php// echo $template_url; ?>/img/process/sm/5.jpg?v=1.2"></a>

			<a href="<?php// echo $template_url; ?>/img/process/6.JPG?v=1.2" class="image fancybox" style="background: url(<?php// echo $template_url; ?>/img/process/sm/6.jpg?v=1.2) center; background-size: cover;" data-fancybox="progress" data-thumb="<?php// echo $template_url; ?>/img/process/sm/6.jpg?v=1.2"></a>

		</div>
	</div>
</div> -->



<div class="map-section" id="map-section">
	<div class="container">
		<h2 class="type-head">Расположение</h2>
	</div>
	<div id="map" style="width:100%; height:450px"></div>
</div>



<section class="technology-section">
	<div class="container">
		<h2>Технология</h2>

		<div class="video-blocks">

			<div class="video-block">
				<h4>Этапы строительства дома</h4>
				<div class="video">
					<div class="video-item">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/LLzPBfVWISA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="video-item">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/SqhFdFxn66A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			
		</div>

		<div class="text">
			<p><span><b>Мы, Хабаровский завод домокомплектов «КПД 100» – сделали коттеджное строительство доступным!</b></span></p>
			<p>Всего за год – у нас заказали более 100 домов в Хабаровске и Владивостоке!</p>
			<p>«КПД 100» - первый на Дальнем востоке завод по производству теплых железобетонных домокомплектов.</p>
			<p>Наши домокомплект состоят из:</p>
			<ul>
				<li>монолитной несущей рамы (колонно-ригельная система)</li>
				<li>бетонных перекрытий (ребристые плиты перекрытия с утеплителем и без)</li>
				<li>трехслойных стен (бетон 5см / утеплитель 15 см / бетон 6 см)</li>
				<li>трехслойных утепленных угловых элементов</li>
			</ul>
		</div>

		<div class="technology-images">
			<a href="<?php echo $template_url; ?>/img/technology/1.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/1.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/2.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/2.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
		</div>

		<div class="technology-images">
			<a href="<?php echo $template_url; ?>/img/technology/3.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/3.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/4.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/4.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
		</div>

		<div class="text">
			<p>Нашими специалистами были изготовлены все формы, оборудованы пропарочные камеры. У нас работает формовочный цех и цех металлоконструкций. Мы создали и запустили собственную линию по производству домокомплектов!</p>
			<p>Сейчас около 60% готового дома выходит с нашего завода. В будущем мы доведём этот показатель до 90%.</p>
		</div>

		<div class="technology-images">
			<a href="<?php echo $template_url; ?>/img/technology/5.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/5.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/6.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/6.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/7.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/7.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
		</div>

		<div class="text">
			<p>Благодаря нашим специалистам и высокой производительности труда - мы производим 7 домокомплектов в месяц!</p>
		</div>

		<div class="technology-images">
			<a href="<?php echo $template_url; ?>/img/technology/8.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/8.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/9.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/9.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/10.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/10.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
		</div>

		<div class="technology-images">
			<a href="<?php echo $template_url; ?>/img/technology/11.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/11.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/12.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/12.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/13.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/13.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
		</div>

		<div class="text">
			<p>Собирается такой домокомплект на участке всего за 5-7 дней! Дом с фундаментом, кровлей, фасадом, окнами и дверьми мы строим всего за 3-4 месяца<sup><small>*</small></sup></p>
			<p><sup><small>*</small></sup>со дня производства домокомплекта</p>
		</div>

		<div class="technology-images">
			<a href="<?php echo $template_url; ?>/img/technology/14.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/14.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/15.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/15.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
		</div>

		<div class="technology-images">
			<a href="<?php echo $template_url; ?>/img/technology/16.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/16.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
			<a href="<?php echo $template_url; ?>/img/technology/17.jpg?v=1.2" class="technology-image image" data-fancybox="technology">
				<img src="<?php echo $template_url; ?>/img/technology/sm/17.jpg?v=1.2" alt="technology" class="img-responsive">
			</a>
		</div>

		<div class="text">
			<p>Наша технология позволяет по желанию клиента менять размер, расположение окон и дверей, менять высоту потолка.</p>
			<p><span><b>Но главное – купить наш дом с участком и сетями вы можете по цене обычной квартиры!</b></span></p>
		</div>

	</div>
</section>



<section class="certificates-section">
	<div class="container">
		<h2>Сертификаты</h2>

		<div class="certificates-slider">

			<a href="<?php echo $template_url; ?>/img/certificates/1.jpg" class="certificate zoom-img" data-fancybox="certificates">
				<img src="<?php echo $template_url; ?>/img/certificates/1_sm.jpg" alt="certificate" class="img-responsive">
			</a>

			<a href="<?php echo $template_url; ?>/img/certificates/2.jpg" class="certificate zoom-img" data-fancybox="certificates">
				<img src="<?php echo $template_url; ?>/img/certificates/2_sm.jpg" alt="certificate" class="img-responsive">
			</a>

			<a href="<?php echo $template_url; ?>/img/certificates/3.jpg" class="certificate zoom-img" data-fancybox="certificates">
				<img src="<?php echo $template_url; ?>/img/certificates/3_sm.jpg" alt="certificate" class="img-responsive">
			</a>

			<a href="<?php echo $template_url; ?>/img/certificates/4.jpg" class="certificate zoom-img" data-fancybox="certificates">
				<img src="<?php echo $template_url; ?>/img/certificates/4_sm.jpg" alt="certificate" class="img-responsive">
			</a>

			<a href="<?php echo $template_url; ?>/img/certificates/5.jpg" class="certificate zoom-img" data-fancybox="certificates">
				<img src="<?php echo $template_url; ?>/img/certificates/5_sm.jpg" alt="certificate" class="img-responsive">
			</a>

			<a href="<?php echo $template_url; ?>/img/certificates/6.jpg" class="certificate zoom-img" data-fancybox="certificates">
				<img src="<?php echo $template_url; ?>/img/certificates/6_sm.jpg" alt="certificate" class="img-responsive">
			</a>

		</div>

	</div>
</section>



<a href="#take-information" class="sticky-button open-form-button">
	<div class="circle-phone">
		<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0.864895 8.86842C2.80412 5.0745 5.67817 1.80212 8.42689 0.915413C9.05539 0.712669 9.7639 0.623007 10.3323 0.959222C12.5655 2.28022 17.6088 7.79563 19.0253 11.7192C19.2985 12.4758 19.2588 13.329 18.7978 13.9882C16.9842 16.5815 12.5598 16.8892 11.8876 19.211C11.4565 20.7002 20.3492 33.2349 26.9182 35.9267C28.0508 36.3908 29.3503 36.0486 30.0584 35.0502C31.4105 33.144 31.9838 30.5843 34.3778 29.2002C34.9181 28.8878 35.5416 28.8599 36.1005 29.1378C38.3629 30.2625 44.196 33.9368 46.5703 37.3279C47.158 38.1673 47.2314 39.2468 46.8049 40.1784C45.8376 42.291 43.7893 45.0211 40.8356 46.8208C40.2852 47.1562 39.6545 47.3417 39.01 47.3321C33.679 47.253 22.0779 43.4579 13.4006 34.7793C5.07941 25.852 -0.470642 11.4813 0.864895 8.86842Z" fill="#6DB925" /></svg>
	</div>
	<div class="circle first"></div>
	<div class="circle second"></div>
</a>



<?php get_footer(); ?>