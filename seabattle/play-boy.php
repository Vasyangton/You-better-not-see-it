<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-computeratible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Игра Морской бой</title>
<link href="fonts/SegoePrint/fonts.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div id="matrix" style="position: fixed; left:20px; top:50px;"></div>
<div class="wrap">
	<div class="battlefield">
		<div id="text_top" class="flex text-top">Расстановка кораблей</div>
		<div class="flex outer">
			<!-- playing field human -->
			<div class="field field-human">
				<div id="field_human" class="ships"></div>
			</div>
			<!-- /playing field human -->

			<!-- playing field computer -->
			<div class="field field-computer" hidden>
				<div id="field_computer" class="ships"></div>
			</div>
			<!-- /playing field computer -->

			<!-- instruction -->
			<div id="instruction" class="instruction">
				<div id="type_placement" class="type-placement-box">
				<!--	1. <span class="link" data-target="random">Случайным образом</span><br> -->
					 <span class="link" data-target="manually">Начать расстановку</span>
				</div>
				<div id="ships_collection" class="ships-collection" hidden>
					<p class="peypey">Перетащите мышкой корабли на игровое поле. Для установки корабля по вертикали, кликните по нему правой кнопкой мышки.</p>
				</div>
			</div>
			<!-- /instruction -->
		</div>
		<div class="service-row">
			<div id="service_text" class="service-text"></div>
			<button id="play" type="button" class="btn-play" hidden>Играть</button></button>
			<button id="newgame" type="button" class="btn-play btn-newgame" hidden>Продолжить</button>
		</div>
	</div>
</div>

<ul class="initial-ships" hidden>
	<li>
		<div id="fourdeck1" class="ship fourdeck"></div>
		<div id="tripledeck1" class="ship tripledeck tripledeck1"></div>
		<div id="tripledeck2" class="ship tripledeck tripledeck2"></div>
	</li>
	<li>
		<div id="doubledeck1" class="ship doubledeck"></div>
		<div id="doubledeck2" class="ship doubledeck doubledeck2"></div>
		<div id="doubledeck3" class="ship doubledeck doubledeck3"></div>
	</li>
	<li>
		<div id="singledeck1" class="ship singledeck"></div>
		<div id="singledeck2" class="ship singledeck singledeck2"></div>
		<div id="singledeck3" class="ship singledeck singledeck3"></div>
		<div id="singledeck4" class="ship singledeck singledeck4"></div>
	</li>
</ul>

<script src="js/function.js"></script>
</body>
</html>
