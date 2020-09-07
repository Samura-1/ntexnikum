<?php
require_once '../parts/header.php';
require_once '../database/connection.php';
$str = $connection->query("SELECT * FROM administration ORDER BY id");
$str = $str->FetchAll(PDO::FETCH_ASSOC);
?>
<section id="structure">
	<div class="container">
		<h1 class="text-center titel">СТРУКТУРА И ОРГАНЫ УПРАВЛЕНИЯ ОБРАЗОВАТЕЛЬНОЙ ОРГАНИЗАЦИЕЙ</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="../Assets/img/moreimg/struktura.jpg" alt="" class="structure-img">
			</div>
		</div>
	</div>
	<div class="container">
		<h1 class="text-center titel">Администрация техникума</h1>
		<div class="row">
			<?php foreach ($str as $strs): ?>
			<div class="col-md-4">
				<div class="item-structur">
					<img src="<?= $strs['img']?>" alt="">
					<h1><?= $strs['name']?></h1>
					<p><strong><?= $strs['tel']?></strong></p>
					<p><strong><?= $strs['pred']?></strong>
				    <?= $strs['dignity1']?>
					<?= $strs['dignity2']?>
					<?= $strs['dignity3']?>
					<strong><?= $strs['desrip']?></strong>
					<?= $strs['dignity4']?>
				    </p>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="line"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="item-structur">
					<h1>Заведующий<br>Прозоров Валерий Иванович:телефон: 8(84562)2-80-91</h1>
					<ul>
						<li>Ветеринария</li>
						<li>Технология продукции общественного питания</li>
						<li>Экономика и бухгалтерский учет (по отраслям)</li>
						<li>Автомеханик</li>
						<li>Мастер сельскохозяйственного производства</li>
						<li>Хозяйка(ин) усадьбы</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="item-structur">
					<h1>Заведующий<br>Подгорный Роман Васильевич телефон: 8(84562)2-80-91</h1>
					<ul>
						<li>Зоотехния</li>
						<li>Механизация сельского хозяйства</li>
						<li>Прикладная информатика (по отраслям)</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="item-structur">
					<h1>Заочное отделение заведующий<br>Опалько Вера Владимировна телефон: 8(84562)2-80-91</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="line"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="titel">Перечень структурных подразделений Учреждения:</h1>
				<ul>
					<li>Учебная часть</li>
					<li>Отдел кадров</li>
					<li>Бухгалтерия</li>
					<li>Административно – хозяйственная часть</li>
					<li>Учебно-производственная мастерская</li>
					<li>Учебно-производственное хозяйство</li>
					<li>Ветеринарная клиника</li>
					<li>Столовая</li>
					<li>Медицинский кабинет</li>
					<li>Архив</li>
					<li>Клуб</li>
					<li>Отделения (дневное и заочное)</li>
					<li>Общежитие</li>
					<li>Музей</li>
					<li>Библиотека</li>
				</ul>
			</div>
			<div class="col-md-6 align-self-center">
				<h1 class="titel text-center">Ссылки</h1>
				<div class="links text-center">
				<a href="https://yadi.sk/d/yN0XvS8-ZV5gBA" target="_blank" class="desk">Ссылка на Положения о структурных подразделениях</a>
				<a href="https://yadi.sk/i/R-Ds-USO3aqCoX" target="_blank" class="desk">Программа развития ОУ на 2018-2019 уч.год</a>
				<a href="https://yadi.sk/i/N1FquJN0sYeSQg" class="desk" target="_blank">План работы Совета Учреждения </a>					
				</div>
			</div>
		</div>
	</div>
</section>
<?
require_once '../parts/footer.php';
?>