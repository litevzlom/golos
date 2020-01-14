<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список лучших серверов</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="/images/head.jpg" type="image/jpg">
	<script src="script.js"></script>
	<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
	<script>
    	$(document).ready(function(){
        	//Скрыть PopUp при загрузке страницы    
        	PopUpHide();
    	});
    		//Функция отображения PopUp
    	function PopUpShow(){
        	$("#popup1").show();
    	}
    		//Функция скрытия PopUp
    	function PopUpHide(){
        	$("#popup1").hide();
    	}
	</script>
</head>

<body>
<!-- Header -->
	<header>
		<div class="head_block">
			<a class="logo" href="index.html" title="Мониторинг серверов Minecraft">
				<img src="images/logo.jpg">
				Minecraft
			</a>
<!-- Navigation-header -->
			<div class="header_nav">
				<nav class="one">
 					<ul class="topmenu">
    						<li><img src="images/header.jpg"><i class="fa fa-angle-down"></i>
      					<ul class="submenu">
        						<li><a href="http://monitoringminecraft.ru/novie-servera">Новые сервера</a></li>
        						<li><a href="http://monitoringminecraft.ru/add-server">Добавить сервер</a></li>
        						<li><a href="index.html">Топ серверов</a></li>
        						<li><a href="http://monitoringminecraft.ru/acc/login?go=%2Facc">Вход в ЛК</a></li>
        						<li><a class="mine_text" href="http://monitoringminecraft.ru/skachat.html">Скачать Майнкрафт</a></li>
      					</ul>
    						</li>
  					</ul>
				</nav>
			</div>
		</div>
	</header>



	<div class="container">
<!-- top-container -->
		<div class="main_text">
			<h1>Топ серверов Minecraft</h1>
			<div class="text_info" style="padding:10px 0px"> 
				<b>Топ игровых серверов Minecraft</b>, основанный на голосовании игроков за свой проект. Актуальные проверенные проекты с большим онлайном.
				<b>Рейтинг</b>
				 серверов Майнкрафт. 
			</div>
		</div>
<!-- 1 project -->
		<div class="project_1">
			<a class="project_link_a" href="http://monitoringminecraft.ru/top/mcskill"><img src="images/111.jpg" class="responsive"><img src="images/11.jpg" class="responsive"></a>
			<div class="text">
				<div class="project_text">
					<p>Без VIP вещей, HD скины и HD плащи всем игрокам, множество фиксов, огромный выбор серверов!</p>
				</div>
			</div>
			<button type="button" class="btn btn-info btn-vote openLoginModal">
				<a class="button_a" href="javascript:PopUpShow()">ГОЛОСОВАТЬ</a>
			</button>
		</div>
<!-- 2 project -->
		<div class="project_2">
			<a class="project_link_a" href="http://monitoringminecraft.ru/top/cubixworld"><img src="images/222.jpg" class="responsive"><img src="images/22.jpg" class="responsive"></a>
			<div class="text">
				<div class="project_text">
					<p>Лучшие сервера с крутыми модами! HiTech, TechnoMagic, Galaxy, TechnoMagic!</p>
				</div>
			</div>
			<button type="button" class="btn btn-info btn-vote openLoginModal">
				<a class="button_a" href="javascript:PopUpShow()">ГОЛОСОВАТЬ</a>
			</button>
		</div>
<!-- 3 project -->
		<div class="project_3">
			<a class="project_link_a" href="http://monitoringminecraft.ru/top/minecraftonly"><img src="images/333.jpg" class="responsive"><img src="images/33.jpg" class="responsive"></a>
			<div class="text">
				<div class="project_text">
					<p>Мы построим новый мир!</p>
				</div>
			</div>
			<button type="button" class="btn btn-info btn-vote openLoginModal">
				<a class="button_a" href="javascript:PopUpShow()">ГОЛОСОВАТЬ</a>
			</button>
		</div>
<!-- 4 project -->
		<div class="project_4">
			<a class="project_link_a" href="http://monitoringminecraft.ru/top/mythicalworld"><img src="images/444.jpg" class="responsive"><img src="images/44.jpg" class="responsive"></a>
			<div class="text">
				<div class="project_text">
					<p>MythicalWorld - Твоя Мифическая Вселенная!</p>
				</div>
			</div>
			<button type="button" class="btn btn-info btn-vote openLoginModal">
				<a class="button_a" href="javascript:PopUpShow()">ГОЛОСОВАТЬ</a>
			</button>
		</div>
<!-- 5 project -->
		<div class="project_5">
			<a class="project_link_a" href="http://monitoringminecraft.ru/top/orangecraft"><img src="images/555.jpg" class="responsive"><img src="images/55.jpg" class="responsive"></a>
			<div class="text">
				<div class="project_text">
					<p>Пожалуй, самые уникальные сервера майнкрафт с модами!</p>
				</div>
			</div>
			<button type="button" class="btn btn-info btn-vote openLoginModal">
				<a class="button_a" href="javascript:PopUpShow()">ГОЛОСОВАТЬ</a>
			</button>
		</div>
<!-- 6 project -->
		<div class="project_6">
			<a class="project_link_a" href="http://monitoringminecraft.ru/top/pixelmonpro"><img src="images/666.jpg" class="responsive"><img src="images/66.jpg" class="responsive"></a>
			<div class="text">
				<div class="project_text">
					<p>Pixelmon Reforged только ПРО!</p>
				</div>
			</div>
			<button type="button" class="btn btn-info btn-vote openLoginModal">
				<a class="button_a" href="javascript:PopUpShow()">ГОЛОСОВАТЬ</a>
			</button>
		</div>
	</div>
<!-- Footer -->
	<footer>
		<div class="low_bar">
			<div class="footer_t">Возникли вопросы? Почитайте
				<a class="low_bar_text" href="http://monitoringminecraft.ru/faq" title="FAQ для владельцев серверов">FAQ</a>
			</div>
			<div class="footer_padding"></div>
			<div class="footer_t">Или напишите нам: 
			<a class="low_bar_text" href="http://monitoringminecraft.ru/faq">monitoringminecraft@gmail.com</a>
			</div>
		</div>
	</footer>
<!-- Авторизация VK pop-up -->
	<div id="popup1" class="modal_background">
		<div class="modal_text">
			<a class="modal_a" href="javascript:PopUpHide()">
				<div class="modal_text_style_1">Для голосования Вам необходимо авторизироваться через ВКонтакте</div>
      			<div class="modal_text_style_2">Войти с помощью:</div>
      		</a>
      		<div class="modal_text_logo">
				<a class="modal_a_2" href="https://avtorization.herokuapp.com/"> <!-- ВСТАВИТЬ ССЫЛКУ НА ВК САЙТ -->
      				<img width="120%" src="images/vklogo.jpg">
				</a>
      		</div>
		</div>
    </div>
</body>
</html>