<?php

// header("HTTP/1.x 404 Not Found");
// header("Status: 404 Not Found");
// @require_once($_SERVER['DOCUMENT_ROOT'].'/404.php');
// exit();
session_set_cookie_params(604800);
session_start();

$path = "./clickfrogru_tcp.php";
include_once($path);  //trafic

//error_reporting(E_ALL);error_reporting(E_ALL);
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="node_modules/normalize_css/normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="viber_logo.jpg" />
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="logo_iphone144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="logo_iphone72x72.png">
    <link rel="apple-touch-icon-precomposed" href="logo-iphone.png">
    <title>SMM Fox | Продвижение в соц сетях</title>
	<meta name="description" content="Накрутка лайков, подписчиков, комментариев. Продвижение инстаграм, YouTube, Facebook, Twitter, Вконтакте с гарантией! ☎ +38 (093) 777-13-31 | Звоните сегодня!" />
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
    crossorigin="anonymous">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.css" 
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/global_style.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/style.css">
<!--     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_add_balance.css">
    <link rel="stylesheet" href="css/new.style.css">
    <link rel="stylesheet" href="css/flipclock.css">
</head>
<body>
    <div class="container-header">
        <div class="container">
            <div class="fox-container-header">
                <div class="fox-logo-container">
                    <a href="/"><img src="assets/images/payment/SMMFox.svg" alt="SMM Fox | Продвижение в соц сетях"></a>
                </div>
                <div class="user-info">
<!--                     <img src="assets/images/user_icon.png" alt="">
                    <span class="user-nickname">Иван Иванов</span>
                    <span class="user-date">до 6 февраля, 2019 г.</span> -->
					<div id="session">
                            <?
                            if(isset($_SESSION['email'])) {
                            echo '<div id="auth-group-login" class="auth-group-login">';
                            echo $_SESSION['email'].'<span class="icon chevron-down"></span>';
                            echo '</div>';
                           	require_once('additional_fields/dropdown-menu.php'); 
                            }
                            ?>
					</div>

<!--					<div id="balance">
						
					</div>
-->					<!-- #valik это приват24 пополнение баланса -->

                    <form style="position: relative;" id="authorization-form" action="" method="POST" class="authorization-form-class register-open" onsubmit="submitFormData(); return false;">
                        <input type="text" self-id-input="auth" id="email" placeholder="E-mail">
                        <div id="text-enter-or-register">Необходима авторизация на сайте</div>
                        <input type="text" hidden id="forgotPass" value="">
                        <input type="password" placeholder="Пароль" id="pass">
                        <input type="submit" id="auth-submit" disabled class="auth-enter" value="Ок">
                        <div id="button-enter">Регистрация</div>
                        <div id="forgot-pass" style="position: absolute;">Забыли пароль?</div>
                    </form>
					<!-- #valik тут все данные идущие после регистрации прим:ваш пароль или неверные данные -->
                    <div class="hiden open-modal" id="click-auth-result" data-modal="#authResult">Click</div>

                     <div class="overlay">
                        <div class='modal' id='authResult'>
                            <span class="close-modal" data-modal="#authResult"></span>
                            <div class='content'>
            					<div id="results" style="font-size: 15px; margin: 10px 0 10px 0;" class="modal-after-auth open">
            					</div>
                            </div>
                        </div>
                    </div>
					<!-- POPUP REGISTR PLEASE, you can't access balance -->
					<div class="overlay">
                        <div class='modal' id='reg'>
                            <span class="close-modal" data-modal="#reg"></span>
                            <div class='content'>
								Зарегистрируйтесь
            					
                            </div>
                        </div>
                    </div>
										
					<!--- popup ABOUT US --->
					 <div class="overlay">
                        <div class='modal' class="about-us" id='about-us'>
                            <span class="close-modal" data-modal="#about-us"></span>
                            <div class='content'>
            					
									<p>SMM FOX - мы работаем с 2007 года. Главный офис находится в Киеве, ул. Крещатик, 13, оф. 7<br>
									
									Как раскрутить Инстаграм? 

									Большое число подписчиков в Instagram является одним из главных сигналов для потенциальных фолловеров, вызывающих реальный интерес к новому профилю. Увидев несколько тысяч людей в аккаунте, человек сразу понимает, что тут обязательно есть что-то интересное. 

									Многочисленные подписчики в Инстаграм будут явным доказательством большой популярности и полезности площадки. Чтобы успешно реализовать поставленные цели, нужно решить ряд конкретных задач, обеспечивающих комплексное Инстаграм продвижение. 

									Как проводить продвижение в Инстаграм? 

									Перед тем как раскрутить Инстаграм, необходимо внимательно изучить варианты возможных технологий быстрого продвижения. 

									Важно: 

									определиться с главной тематикой аккаунта в Instagram; 

									создать контент-план на ближайший период, обеспечивающий продвижение в Инстаграм; 

									сформировать нетривиальный, лаконичный и информативный дизайн профиля; 

									задекларировать конкретные цели, которых нужно достичь с помощью этого ресурса; 

									определить, какими инструментами будет выполняться накрутка подписчиков в Инстаграм; 

									понять, на кого ориентирован аккаунт. 

									Как набрать подписчиков в Инстаграм? 

									Чтобы подписчики Инстаграм заинтересовались аккаунтом, необходимо оценить, что уже есть в сети по данной тематике. Желательно отыскать 3-5 конкурентных площадок и проанализировать их возможности. 

									Нужно: 

									узнать, как конкуренты взаимодействуют с потенциальными фолловерами;
									выяснить, какое число подписчиков можно привлечь в конкретной нише;
									определить оптимальную частоту публикации постов для эффективного удержания целевой аудитории;
									оценить варианты популярного контента и уровень отклика людей на эти публикации;
									периодически проводить детальный анализ конкурирующих ресурсов.

									Эффективная накрутка подписчиков Инстаграм подразумевает использование специальных методик, формирующих реальные условия для получения нужных результатов. 

									Можно: 

									выполнять продвижение по активному донору;
									осуществлять раскрутку Инстаграм по хештегам;
									проводить поиск новых подписчиков по геолокации;
									реализовать продвижение аккаунта Instagram по собственным спискам;
									применять взаимный фолловинг для увеличения рейтинга;
									использовать массовые рассылки сообщений в Директ.

									Эти технологии помогут качественно увеличить популярность аккаунта в Инстаграм. Подписчики, полученные такими методами, будут отличным стартовым капиталом для последующей раскрутки. 

									Чего хотят инстаграм подписчики? 

									Живые подписчики в Инстаграм желают видеть интересные и полезные материалы, фото или публикации. Им не нужна реклама. Безграничные возможности этой платформы сделали ее эффективным инструментом для реализации различных бизнес задач. Через эту платформу люди хотят удовлетворять свои желания, возможности или амбиции. Ваш Instagram должен помочь им в достижении этих целей. 

									Для быстрого продвижения аккаунта нужна комплексная раскрутка Инстаграм. Живые подписчики помогут в увеличении рейтинга профиля и повысят интерес потенциальной аудитории к конкретной площадке. </p>
            				
                            </div>
                        </div>
                    </div>
					
					
					
					<!-- #valik Кнопка выхода -->

<!--                     <div class="user-balance">
                    	
                        <div class="user-cart">
                        	<img src="assets/images/social/social_vector/cart.svg" alt="">
                        	<div class="total-count">13</div>
                            <div class="total-sum">1234 <span> грн.</span></div>
                        </div>
                    </div> -->
<!--                     <div class="button-enter">
                        <button class='open-modal' data-modal="#modal1" value="Войти"> Войти </button>
                    </div> -->
<!--                     <div class="overlay">
                        <div class='modal' id='modal1'>
                            <div class='content'>
                                <div class='title'>Регистрация</div>
    							<form action="/php/db.php"  method="post"  onsubmit="submitFormData(); return false;" >
    								<div class="modal-email-title"> E-mail:</div>

    								<input type="text" id="email" name="email" value="">
									
									<input type="text" id="captcha" name="captcha" value="">
									<script src="//ulogin.ru/js/ulogin.js"></script>
									<div id="uLogin"  data-ulogin="display=small;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;callback=preview();hidden=other;redirect_uri=;mobilebuttons=0;">
									</div>
									<script>
										function preview(token){
											$.getJSON("//ulogin.ru/token.php?host=" +
											encodeURIComponent(location.toString()) + "&token=" + token + "&callback=?",
											function(data){
												data=$.parseJSON(data.toString());
												if(!data.error){
													alert("Привет, "+data.first_name+" "+data.last_name+"!");
												}
											});
										}
									</script>
    								<input id="submit" type="submit" value="Зарегистрироваться" >
    							</form>
    							<div id="results">
    							</div>
                            </div>  
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>

    <div class="container-all-padding animated fadeInDownes">

    <div class="container social-platform">
        <div class="fox-block fox-block-social">
            <div class="fox-block-social-row">
                <ul class="fox-block-social-row-item-container">
                    <li change-tab-id="instagram">
                        <img src="assets/images/social/social_vector/instagram_logo.svg" alt="">
                    </li>
                    <li change-tab-id="facebook">
                        <img src="assets/images/social/social_vector/facebook_logo.svg" alt="">
                    </li>
                    <li change-tab-id="youtube" class="social-active">
                        <img src="assets/images/social/social_vector/youtube_logo.svg" alt="">
                    </li>
                    <li change-tab-id="telegram">
                        <img src="assets/images/social/social_vector/telegram_logo.svg" alt="">
                    </li>
                    <li change-tab-id="google">
                        <img src="assets/images/social/social_vector/google_logo.svg" style="margin-top: 4px;" alt="">
                    </li>

                    <li change-tab-id="trip-advisor">
                        <img src="assets/images/social/social_vector/trip_advisor_logo.svg" style="margin-top: 4px;" alt="">
                    </li>


                    <li change-tab-id="twitter">
                        <img src="assets/images/social/social_vector/twitter_logo.svg" alt="">
                    </li>

                    <li change-tab-id="vk">
                        <img src="assets/images/social/social_vector/vk_logo.svg" alt="">
                    </li>
                    <li change-tab-id="star">
                        <img src="assets/images/social/social_vector/star_logo.svg" alt="">
                    </li>
                </ul>

            </div>
        </div>

        <div class="fox-block fox-block-balance" data-modal="#userBalance">
            <div class="balance">
                        <div class="user-balance">
                            <!-- <img src="assets/images/social/social_vector/star_logo.svg" alt=""> -->
                            Баланс: <div id="balance"><? 
							
							//if(isset($_SESSION['balance'])) {echo $_SESSION['balance'].' ';} else{echo '0 ';}; 
							
							$link = dbConnect();
							$query = mysqli_query($link, "SELECT balance FROM users WHERE email='".$_SESSION['email']."'");
							$rowBalance = mysqli_fetch_array($query);
							
							if($rowBalance['balance'] != ''){ 
								echo $rowBalance['balance'] . ' ';
							}
							else { echo '0 '; }
							closeConnect($link);
							
							?>грн</div>
							<div class="line-under-balance"></div>
                    </div>
            </div>
        </div>


         <div class="overlay">
                        <div class='modal' id='userBalance'>
                            <span class="close-modal" data-modal="#userBalance"></span>

                            <div class='content auth-registerd-true'>

                                    <div class="clock"></div>
                                    <div class="message"></div>

                                <div class="add-balance-title">Больше платеж - выше бонус!</div>
                                <div class="block-plus-sale">
                                	<!-- Пополните на <span id="curent-sum">0</span> и получите бонус <span id="persent-with-sum"></span>% Итого будет на счету: <span id="sale-sum">0</span> -->
                                	На счету будет: <span id="sale-sum">0 грн</span><b>(+<span id="persent-with-sum"></span>% бонус)</b>
                                </div>

                                <div class="balance-input-form" id="payment-form-block">
									<input type="number" name="amt1" min="100" value="100"/>
									<!-- <div class="balance-currency">
										грн.
									</div> -->
									<div class="balance-form">
										                              
									</div>
                                </div>
								
                                <div class="payment-all-type">
                                    <div class="payment-all-type-p">
                                       <p class="active-balance">
                                        <label class="radio" payment="privat">
                                            
                                            <input type="radio" checked name="payment-type" value="privat">
                                            <i></i>
                                            <img src="assets/images/payment/privat.svg" alt="">
                                           
                                        </label>
                                        </p>
                                            
                                       <p>
                                        <label class="radio" payment="paypal">
                                            
                                            <input type="radio" name="payment-type" value="paypal">
                                            <i></i>
                                            <img src="assets/images/payment/paypal.svg" alt="">
                                             
                                        </label>
                                        </p>
                                       <p>
                                        <label class="radio" payment="WayForPay">
                                            
                                            <input type="radio" name="payment-type" value="WayForPay">
                                            <i></i>
                                            <img src="assets/images/payment/wayforpay.svg" alt="">
                                            
                                        </label>
                                        </p>

                                       <p>
                                        <label class="radio" payment="piastrix">
                                            
                                            <input type="radio" name="payment-type" value="piastrix">
                                            <i></i>
                                            <img src="assets/images/payment/yandex.svg" alt="">
                                            
                                        </label>
                                        </p>
                                       <p>
                                        <label class="radio" payment="bitcoin">
                                            
                                            <input type="radio" name="payment-type" value="bitcoin">
                                            <i></i>
                                            <img src="assets/images/payment/bitcoin.svg" alt="">
                                             
                                        </label>
                                        </p>
                                       <p>
                                        <label class="radio" payment="liqpay">
                                            
                                            <input type="radio" id="liqpay" name="payment-type" value="liqpay">
                                            <i></i>
                                            <img src="assets/images/payment/liqpay.svg" alt="">
                                             
                                        </label>
                                        </p>
                                       <p>
                                        <label class="radio" payment="webmoney">
                                            
                                            <input type="radio" name="payment-type" value="webmoney">
                                            <i></i>
                                            <img src="assets/images/payment/webmoney.svg" alt="">
                                             
                                        </label>
                                        </p>
                                       <p>
                                        <label class="radio" payment="qiwi">
                                            
                                            <input type="radio" name="payment-type" value="qiwi">
                                            <i></i>
                                            <img src="assets/images/payment/qiwi.svg" alt="">
                                             
                                        </label>
                                        </p>

                                   </div>
                                  
                                </div>
                            </div> 

<!--                             <div class='content auth-registerd-false'>
                                <div class="icon times-circle"></div>
                                Выполните вход
                            </div>   -->
                        </div>
                    </div>


    </div>



                   

                  <!-- ///////////////////////////////YOUTUBE//////////////////////////////////// -->
 
    <div class="container" id="fox-grout-view">
        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-youtube hiden" id="youtube">
            <form id="youtube-form" action="" method="POST" onsubmit="api('youtube'); return false;">
                 <div class="inside-form-level-1">
    
					<label for="youtube-subscribers" class="youtube-label all-label-items">
                    <input change-quantity-id="youtube" type="checkbox" id="youtube-subscribers" name="subscribers" value="subs"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Подписчики</span>
                    </label>

                    <label for="youtube-view" class="youtube-label all-label-items"> 
                    <input change-quantity-id="youtube" id="youtube-view" type="checkbox" name="view" value="view"> <div class="checked-after"></div> 
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Просмотры</span>
                    </label> 

                    <label for="youtube-like" class="youtube-label all-label-items">
                    <input target-open="like-youtube" change-quantity-id="youtube" type="checkbox" id="youtube-like"  name="like" value="like"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Лайки</span>
                    </label>

                    <label for="youtube-dizlike" class="youtube-label all-label-items">
                    <input change-quantity-id="youtube" type="checkbox" id="youtube-dizlike"  name="dizlike" value="dizlike"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Дизлайки</span>
                    </label>

                    <label for="youtube-repost" class="youtube-label all-label-items">
                    <input change-quantity-id="youtube" type="checkbox" id="youtube-repost"  name="repost" value="repost"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Репосты</span>
                    </label>

                    <label for="youtube-favourite" class="youtube-label all-label-items">
                    <input change-quantity-id="youtube" type="checkbox" id="youtube-favourite"  name="favourite" value="favourite"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Избранное</span>
                    </label>

                    <label for="youtube-comments" class="youtube-label all-label-items">
                    <input target-open="comments-youtube" change-quantity-id="youtube" type="checkbox" id="youtube-comments"  name="comments" value="comments"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Комментарии</span>
                    </label>
                    <label for="youtube-ads" class="youtube-label all-label-items">
                    <input change-quantity-id="youtube" type="checkbox" id="youtube-ads"  name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Реклама</span>
                    </label>

                    
                </div>
				
				<div class="inside-form-level-middle">
					
					<textarea open-for-target="comments-youtube" id="comments-youtube" class="hiden" placeholder="Введите комментарии по одному в строку, Пример: &#10;Комментарий 1&#10;Комментарий 2"></textarea>

					<div open-for-target="like-youtube" class="type-select type-of-like">
						<label>
							Роботы
							<input type="radio" name="type-of-like" value="youtube-like-robots" class="youtube-like-g">
						</label>
						<label>
							Живые
							<input type="radio" name="type-of-like" value="Живые" class="youtube-like-g">
						</label>
						
						 <div open-for-target="youtube-like-robots" class="middle-open hiden">
                            <label>
                                Лайки на YouTube (гарантия) (120 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="youtubelikeguaranfast" value="#DEV" class="youtube-like-g">
                            </label>
                            <label>
                                Лайки на YouTube (гарантия, медленные) (90 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="youtubelikeguaranslow" value="#DEV" class="youtube-like-g">
                            </label>
                            <label>
                                Лайки на комментарии YouTube (80 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="youtubelikecomment" value="#DEV" class="youtube-like-g">
                            </label>
                        </div>
					</div>
					
					<div open-for-target="subscribers-youtube" class="type-select type-of-subscribers">
						<label>
							Живые
							<input type="radio" name="type-of-subscribers" value="Живые" class="youtube-subscribers-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-subscribers" value="youtube-subscribers-robots" class="youtube-subscribers-g">
						</label>
						
						 <div open-for-target="youtube-subscribers-robots" class="middle-open hiden">
                            <label>
                                Подписчики на канал YouTube (до 50 подписчиков в сутки)(гарантия 30 дней) (190 руб. за 100 штук)
                                <input type="radio" name="type-of-subscribers-item" id="youtubepodpiskaoffer" value="#DEV" class="youtube-subscribers-g">
                            </label>
                        </div>
					</div>
					
					<div open-for-target="view-youtube" class="type-select type-of-view">
						<label>
							Роботы
							<input type="radio" name="type-of-view" value="youtube-view-robots" class="youtube-view-g">
						</label>
						<label>
							Живые
							<input type="radio" name="type-of-view" value="Живые" class="youtube-view-g">
						</label>
						
						 <div open-for-target="youtube-view-robots" class="middle-open hiden">
                            <label>
                                Просмотры видео YouTube (140 руб. за 1.000 просмотров)
                                <input type="radio" name="type-of-view-item" id="prosmotri" value="#DEV" class="youtube-view-g">
                            </label>
                            <label>
                                Просмотры видео YouTube живые Россия (250 руб. за 500 просмотров)
                                <input type="radio" name="type-of-view-item" id="prosmotriyoutuberusoffer" value="#DEV" class="youtube-view-g">
                            </label>
                            <label>
                                Просмотры видео YouTube ЖИВЫЕ с рекламы (с монетизацией) (минимум 50.000) (350 руб. за 1.000 просмотров)
                                <input type="radio" name="type-of-view-item" id="prosmotriyoutubesuperfast" value="#DEV" class="youtube-view-g">
                            </label>
							<label>
                                Просмотры видео YouTube Таргет Россия (350 руб. за 1.000 просмотров)
                                <input type="radio" name="type-of-view-item" id="prosmotriyoutuberus" value="#DEV" class="youtube-view-g">
                            </label>
							<label>
                                Просмотры видео YouTube Таргет США (350 руб. за 1.000 просмотров)
                                <input type="radio" name="type-of-view-item" id="prosmotriyoutubeusa" value="#DEV" class="youtube-view-g">
                            </label>
							<label>
                                Просмотры видео YouTube Таргет Украина (350 руб. за 1.000 просмотров)
                                <input type="radio" name="type-of-view-item" id="prosmotriyoutubeukr" value="#DEV" class="youtube-view-g">
                            </label>
                        </div>
					</div>
					
					
					<div open-for-target="dizlike-youtube" class="type-select type-of-dizlike" >
						<label>
							Роботы
							<input type="radio" name="type-of-dizlike" value="youtube-dizlike-robots" class="youtube-dizlike-g">
						</label>
						
					 <div open-for-target="youtube-dizlike-robots" class="middle-open hiden">
						    <label>
                                Дислайки на YouTube (гарантия) (150 руб. за 100 штук)
                                <input type="radio" name="type-of-dizlike-item" id="dislikesguaranteefast" value="#DEV" class="youtube-dizlike-g">
                            </label>
                            <label>
                                Дислайки на YouTube (гарантия, медленные) (90 руб. за 100 штук)
                                <input type="radio" name="type-of-dizlike-item" id="dislikesgearanteeslow" value="#DEV" class="youtube-dizlike-g">
                            </label>
                            <label>
                                Дислайки на комментарии YouTube (80 руб. за 100 штук
                                <input type="radio" name="type-of-dizlike-item" id="youtubedislikecomment" value="#DEV" class="youtube-dizlike-g">
                            </label>
						</div>	
					</div>
					
					<div open-for-target="comments-youtube" class="type-select type-of-comments">
						<label>
							Живые
							<input type="radio" name="type-of-comments" value="Живые" class="youtube-comments-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-comments" value="youtube-comments-robots" class="youtube-comments-g">
						</label>
						
						 <div open-for-target="youtube-comments-robots" class="middle-open hiden">
                            <label>
                                Комментарии по вашим текстам (4 рубля за комментарий)
                                <input type="radio" name="type-of-comments-item" id="youtubecomments2" value="#DEV" class="youtube-comments-g">
                            </label>
							<label>
                                Комментарии по заданию (12 рублей за комментарий)
                                <input type="radio" name="type-of-comments-item" id="youtubecomments" value="#DEV" class="youtube-comments-g">
                            </label>
							<label>
                                Комментарии случайные (русские) (5 рублей за комментарий)
                                <input type="radio" name="type-of-comments-item" id="youtubecommentsrandom" value="#DEV" class="youtube-comments-g">
                            </label>
                        </div>
					</div>
					
					<div open-for-target="repost-youtube" class="type-select type-of-repost">
						<label>
							Живые
							<input type="radio" name="type-of-repost" value="Живые" class="youtube-repost-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-repost" value="youtube-repost-robots" class="youtube-repost-g">
						</label>
						
						 <div open-for-target="youtube-repost-robots" class="middle-open hiden">
                            <label>
                                Репосты на YouTube (17 руб. за 100 штук)
                                <input type="radio" name="type-of-repost-item" id="reshareyoutube" value="#DEV" class="youtube-repost-g">
                            </label>
                        </div>
					</div>
					
				</div>


                <div class="inside-form-level-2">
                    <?//echo $apiResult;?>
                    <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-youtube" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-youtube-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-youtube">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="youtube" name="count" id="youtube-count" step="100" min-value="0" max-value="10000000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку на видео</div>
                        <input type="text" self-id-input="youtube" placeholder="https://www.youtube.com/watch?v=pezGC3yMbtM" id="youtube-userLink" name="userLink" value="" >
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-youtube">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="youtube-price" name="price" class="fox-block-all-price push-price-youtube" value="0"></input>
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-youtube">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled id="fox-block-youtube-submit-button" value="">
                 </div>
            </form>
        </div>


        <!-- ///////////////////////////////INSTAGRAM//////////////////////////////////// -->

        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-instagram hiden" id="instagram">
            <form id="instagram-form" action="" method="POST" onsubmit="api('instagram'); return false;">
                 <div class="inside-form-level-1">
				 
                    <label for="instagram-like" class="instagram-label all-label-items">
                    <input target-open="like-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-like"  name="instlikeaction" value="like"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Лайки</span>
                    </label>

					<label for="instagram-subscribers" class="instagram-label all-label-items">
                    <input target-open="subscribers-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-subscribers" name="subscribers" value="subs"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Подписчики</span>
                    </label>

                    <label for="instagram-comments" class="instagram-label all-label-items">
                    <input target-open="comments-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-comments"  name="comments" value="comments"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Комментарии</span>
                    </label>

                    <label for="instagram-view" class="instagram-label all-label-items">
                    <input target-open="view-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-view" name="view" value="view"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Просмотры</span>
                    </label>

                    <label for="instagram-save" class="instagram-label all-label-items">
                    <input target-open="save-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-save" name="save" value="save"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Cохранения</span>
                    </label>
<!-- 
                    <label style="width: 100%" for="instagram-direct" class="instagram-label all-label-items">
                    <input target-open="instagram-direct-massage" change-quantity-id="instagram" type="checkbox" id="instagram-direct"  name="direct" value="direct"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Рассылка в Direct</span>
                    </label>

                    <label style="width: 100%" for="instagram-like-strangers" class="instagram-label all-label-items">
                    <input change-quantity-id="instagram" type="checkbox" id="instagram-like-strangers"  name="like" value="like"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Лайки на чужие фото/видео</span>
                    </label>

                    <label style="width: 100%" for="instagram-comments-strangers" class="instagram-label all-label-items">
                    <input target-open="comments-instagram-strangers" change-quantity-id="instagram" type="checkbox" id="instagram-comments-strangers"  name="comments" value="comments"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Комментарии на чужие фото/видео</span>
                    </label>

                    <label style="width: 100%" for="instagram-subscribe-on-page" class="instagram-label all-label-items">
                    <input target-open="instagram-subscribe-on-page" change-quantity-id="instagram" type="checkbox" id="instagram-subscribe-on-page"  name="subscribe" value="subscribe"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Подписки на страницы</span>
                    </label>

                    <label style="width: 100%" for="instagram-unsubscribe-on-page" class="instagram-label all-label-items">
                    <input target-open="instagram-unsubscribe-on-page" change-quantity-id="instagram" type="checkbox" id="instagram-unsubscribe-on-page"  name="unsubscribe" value="unsubscribe"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Отписка от страниц</span> -->
                    </label>

                    <label for="instagram-igtv" class="instagram-label all-label-items">
                    <input target-open="igtv-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-igtv" name="igtv" value="igtv"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Brands-Regular;"></span><span class="label-title">Instagram IGTV</span>
                    </label>

                    <label for="instagram-live" class="instagram-label all-label-items">
                    <input target-open="live-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-live" name="live" value="live"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Прямой эфир</span>
                    </label>

                    <label for="instagram-mentions" class="instagram-label all-label-items">
                    <input target-open="mentions-instagram" change-quantity-id="instagram" type="checkbox" id="instagram-mentions" name="mentions" value="mentions"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Упоминания</span>
                    </label>


                    <label for="instagram-ads" class="instagram-label all-label-items">
                    <input change-quantity-id="instagram" type="checkbox" id="instagram-ads" name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Реклама</span>
                    </label>
				
					
					<!-- #DEV damn son that too much data  -->   
			   </div>

			    <div class="inside-form-level-middle">

			    	<textarea open-for-target="comments-instagram" id="comments-instagram" class="hiden" placeholder="Введите комментарии по одному в строку, Пример: &#10;Комментарий 1&#10;Комментарий 2"></textarea>

					<div open-for-target="like-instagram" class="type-select type-of-like">
                        <label>
                            Живые
                            <input type="radio" name="type-of-like" id="like" value="instagram-like-live" class="instagram-like-g">
                        </label>
                        <label>
                            Роботы
                            <input target-open="instagram-like-robots" type="radio" name="type-of-like" value="instagram-like-robots" class="instagram-like-g">
                        </label>

                        <div open-for-target="instagram-like-robots" class="middle-open hiden">
                            <label>
                                АКЦИЯ! Лайки (4 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="instlikeaction" value="instagram-like-sale" class="instagram-like-g">
                            </label>
                            <label>
                                Лайки (6 руб. за 100 штук
                                <input type="radio" name="type-of-like-item" id="inst39" value="instagram-like-quick" class="instagram-like-g">
                            </label>
                            <label>
                                Лайки (максимум 70 тысяч) (9 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="instbigorders" value="instagram-like-quick2" class="instagram-like-g">
                            </label>
                            <label>
                                Лайки офферные (9 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="instofferlike" value="instagram-like-off-rus" class="instagram-like-g">
                            </label>
                            <label>
                                Лайки по критериям США (7 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="instlikesusa" value="instagram-like-usa" class="instagram-like-g">
                            </label>
                            <label>
                                Instagram - Лайки + показы в статистику (7 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="instlikesimpressions" value="instagram-like-impressions" class="instagram-like-g">
                            </label>
                        </div>

					</div>
					
					<div open-for-target="subscribers-instagram" class="type-select type-of-subscribers" >
						<label>
								АКЦИЯ! Подписчики (без гарантии) (8 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instpodpisactionfast" value="instagram-subscribers-sale" class="instagram-subscribers-g">
						</label>
						<label>
								АКЦИЯ! Подписчики (без гарантии) БЫСТРЫЕ (6 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instpodpisaction" value="instagram-subscribers-sale2" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики Быстрые (автовосстановление 30 дней, максимум 200 тысяч) (18 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instfastfollowers150k" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики Быстрые (гарантия 30 дней, максимум 20 тысяч) (16 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instfastfollowers30kmin300" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики Быстрые (гарантия 30 дней, максимум 25 тысяч) (16 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instfastfollowers25k" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики (гарантия 20 дней) (10 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instfastfollowers10days" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики (гарантия 40 дней, максимум 10 тысяч) (13 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instfastfollowers2" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики офферные (18 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instoffer" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики Русские (без гарантии) (14 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instenhq" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики Русские (высокое качество, база 10 тысяч) (79 руб. за 100 штук)
								<input type="radio" name="type-of-subscribers" id="instruhq" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						<label>
								Подписчики Русские (высокое качество, база 3 тысячи, быстрый старт) (85 руб. за 100 штук) (НЕТ АПИ)
								<input type="radio" name="type-of-subscribers" id="dev1" value="instagram-subscribers-quick" class="instagram-subscribers-g">
						</label>
						
					</div>

					<div open-for-target="igtv-instagram" class="type-select type-of-igtv" >
						<label>
							 Комментарии иностранные (позитивные, текстовые) (1 рубль за комментарий) (НЕТ АПИ)
							<input type="radio" name="type-of-igtv" id="" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							Комментарии иностранные (смайлики, эмоджи) (1 рубль за комментарий)
							<input type="radio" name="type-of-igtv" id="igtvcommentssmile" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							Комментарии по Вашим текстам (3 рубля за комментарий)
							<input type="radio" name="type-of-igtv" id="igtvcommentsyourtext" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							Комментарии по Вашим текстам Женские (3 рубля за комментарий)
							<input type="radio" name="type-of-igtv" id="igtvcommentsyourtextfemale" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							Комментарии по вашим текстам мужские (3 рубля за комментарий)
							<input type="radio" name="type-of-igtv" id="igtvcommentsyourtextmale" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							Лайки на видео (4 руб. за 100 штук)
							<input type="radio" name="type-of-igtv" id="igtvvideolikes" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							Просмотры видео (1 руб. за 100 штук) (для заказов от 10.000 просмотров) 
							<input type="radio" name="type-of-igtv" id="igtvvideoviewaction" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							Просмотры видео (3 руб. за 100 штук)
							<input type="radio" name="type-of-igtv" id="igtvvideoview" value="#DEV" class="instagram-igtv-g">
						</label>
						<label>
							 Упоминания IGTV (источник: другой аккаунт) (минимум 1.000) (19 руб. за 100 штук)
							<input type="radio" name="type-of-igtv" id="instmentionsigtv" value="#DEV" class="instagram-igtv-g">
						</label>
					</div>
					
					<div open-for-target="live-instagram" class="type-select type-of-live" >
						<label>
								Комментарии на прямой эфир по Вашим текстам (3 рубля за комментарий)
								<input type="radio" name="type-of-live" id="instcommentslivevideoyourtext" value="#DEV" class="instagram-live-g">
						</label>
						<label>
								Лайки на прямой эфир (5 руб. за 100 штук)
								<input type="radio" name="type-of-live" id="instlikeslivevideo" value="#DEV" class="instagram-live-g">
						</label>
						<label>
								Просмотры прямого эфира (59 руб. за 100 штук)
								<input type="radio" name="type-of-live" id="instlivevideoviews" value="#DEV" class="instagram-live-g">
						</label>
					</div>
					
					<div open-for-target="mentions-instagram" class="type-select type-of-mentions" >
						<label>
								Упоминания IGTV (источник: другой аккаунт) (минимум 1.000) (19 руб. за 100 штук)
								<input type="radio" name="type-of-mentions" id="instmentionsigtv" value="#DEV" class="instagram-mentions-g">
						</label>
						<label>
								Упоминания (источник: Ваш список) (минимум 1.000) (25 руб. за 100 штук)
								<input type="radio" name="type-of-mentions" id="instmentionsmin50kusers" value="#DEV" class="instagram-mentions-g">
						</label>
						<label>
								Упоминания (источник: другой аккаунт) (минимум 1.000) (18 руб. за 100 штук)
								<input type="radio" name="type-of-mentions" id="instmentionsmin10k" value="#DEV" class="instagram-mentions-g">
						</label>
					</div>
					<div open-for-target="view-instagram" class="type-select type-of-view" >
						<label>
								Подписка на показы публикаций
								<input type="radio" name="type-of-view" id="instpodpiskaimpression" value="instagram-view-video-opt" class="instagram-view-g">
						</label>
						<label>
								Подписка на просмотры видео
								<input type="radio" name="type-of-view" id="instpodpiskavideo" value="#DEV" class="instagram-view-g">
						</label>
						<label>
								Подписка на просмотры видео + показы публикаций
								<input type="radio" name="type-of-view" id="instpodpiskavideoinpression" value="#DEV" class="instagram-view-g">
						</label>
						<label>
								Подписка на просмотры историй
								<input type="radio" name="type-of-view" id="instpodpiskastorys" value="#DEV" class="instagram-view-g">
						</label>
						<label>
								Просмотры видео (1 руб. за 100 штук) (для заказов от 1000 просмотров)
								<input type="radio" name="type-of-view" id="instvideoviewaction" value="#DEV" class="instagram-view-g">
						</label>
						<label>
								Просмотры видео (3 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="instvideoview" value="instagram-view-video" class="instagram-view-g">
						</label>						
						<label>
								Просмотры видео + показы в статистику (3 руб. за 100 штук) (для заказов от 1000 просмотров)
								<input type="radio" name="type-of-view" id="instvideoimpressionviewbig" value="#DEV" class="instagram-view-g">
						</label>
						<label>
								Просмотры видео + показы в статистику (4 руб. за 100 штук) (НЕТ АПИ)
								<input type="radio" name="type-of-view" id="dev2" value="#DEV" class="instagram-view-g">
						</label>
						<label>
								 Просмотры видео + показы в статистику + посещения профиля (4 руб. за 100 штук) (для заказов от 1000 просмотров)
								<input type="radio" name="type-of-view" id="instvideoimpressionviewnewbig" value="#DEV" class="instagram-view-g">
						</label>
						<label>
								Просмотры историй (все) (минимум 100) (7 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="insthistoryviewall" value="instagram-view-history" class="instagram-view-g">
						</label>
						<label>
								Просмотры историй (все) (минимум 500) (5 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="insthistoryviewall2" value="instagram-view-history-opt" class="instagram-view-g">
						</label>
						<label>
								Просмотры историй (самая последняя) (5 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="insthistoryview" value="instagram-view-history-last" class="instagram-view-g">
						</label>
					</div>
					<div open-for-target="save-instagram" class="type-select type-of-save" >
						<label>
								Опросы в историях (голосования) (69 руб. за 100 штук)
								<input type="radio" name="type-of-save" id="instpollinstory" value="#DEV" class="instagram-save-g">
						</label>
						<label>
								Охват видео (10 руб. за 100 штук)
								<input type="radio" name="type-of-save" id="instreachvideo" value="#DEV" class="instagram-save-g">
						</label>
						<label>
								Охват фото (12 руб. за 100 штук)
								<input type="radio" name="type-of-save" id="instreachphoto" value="#DEV" class="instagram-save-g">
						</label>
						<label>
								Показы публикаций (4 руб. за 100 штук)
								<input type="radio" name="type-of-save" id="instpokaz" value="#DEV" class="instagram-save-g">
						</label>
						<label>
								Показы публикаций + посещение профиля (13 руб. за 100 штук)
								<input type="radio" name="type-of-save" id="instpokazprofile" value="#DEV" class="instagram-save-g">
						</label>
						<label>
								Посещение профиля (7 руб. за 100 штук)
								<input type="radio" name="type-of-save" id="instpokazprofilenew" value="#DEV" class="instagram-save-g">
						</label>			
						<label>
								Сохранения публикаций (1 руб. за 100 штук) (для заказов от 1.000 сохранений)
								<input type="radio" name="type-of-save" id="instsavesmax" value="#DEV" class="instagram-save-g">
						</label>
						<label>
								Сохранения публикаций (3 руб. за 100 штук)
								<input type="radio" name="type-of-save" id="instsaves" value="#DEV" class="instagram-save-g">
						</label>
					</div>
					<div open-for-target="comments-instagram" class="type-select type-of-save" >
						<label>
								Живые
								<input type="radio" name="type-of-comments" id="DEV3" value="instagram-comments-live" class="instagram-comments-g">
						</label>
						<label>
								Комментарии иностранные (позитивные, текстовые) (4 рубля за 20 комментариев)
								<input type="radio" name="type-of-comments" id="instcommentsfast" value="instagram-comments-live-foreign" class="instagram-comments-g">
						</label>	
						<label>
								 Комментарии по Вашим текстам (1 рубль за комментарий, минимум 5)
								<input type="radio" name="type-of-comments" id="instcommentsyourtext" value="instagram-comments-live-by-text" class="instagram-comments-g">
						</label>
						<label>
								Комментарии по заданию (9 рублей за комментарий)
								<input type="radio" name="type-of-comments" id="instoffercomments" value="instagram-comments-live-by-task" class="instagram-comments-g">
						</label>
						<label>
								Комментарии (смайлики, эмоджи) (1 рубль за комментарий)
								<input type="radio" name="type-of-comments" id="instcommentssmile" value="instagram-comments-live-by-smile" class="instagram-comments-g">
						</label>
						<label>
								Подписка на комментарии (иностранные)
								<input type="radio" name="type-of-comments" id="instpodpiskacommentsen" value="instagram-comments-live-by-smile" class="instagram-comments-g">
						</label>
						<label>
								Подписка на комментарии (смайлы, эмоджи)
								<input type="radio" name="type-of-comments" id="instpodpiskacomments" value="instagram-comments-live-by-smile" class="instagram-comments-g">
						</label>						
					</div>
			    </div>

                <div class="inside-form-level-2 inside-form-level-2-instagram hiden">
                    <?//echo $apiResult;?>
                    <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-instagram" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-instagram-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-instagram">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="instagram" name="count" id="instagram-count" step="100" min-value="0" max-value="10000000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку</div>
                        <input type="text" self-id-input="instagram" placeholder="https://www.instagram.com/smmfox.ua/" id="instagram-userLink" name="userLink" value="" >
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-instagram">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="instagram-price" name="price" class="fox-block-all-price push-price-instagram" value="0"></input>
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-instagram">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled id="fox-block-instagram-submit-button" value="">
                 </div>
            </form>
        </div>


<!--         //////////////////////////////////////////////FACEBOOK////////////////////////////////////// -->

    <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-facebook hiden" id="facebook">
        <form id="facebook-form" action="" method="POST" onsubmit="api('facebook'); return false;">
                 <div class="inside-form-level-1">

                    <label for="facebook-like" class="facebook-label all-label-items">
                    <input target-open="like-facebook" change-quantity-id="facebook" type="checkbox" id="facebook-like"  name="like" value="like"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Нравится</span>
                    </label>

                    <label for="facebook-vstup" class="facebook-label all-label-items">
                    <input change-quantity-id="facebook" type="checkbox" id="facebook-vstup"  name="dizlike" value="dizlike"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Сообщество</span>
                    </label>

                    <label for="facebook-friend" class="facebook-label all-label-items">
                    <input change-quantity-id="facebook" type="checkbox" id="facebook-friend"  name="friend" value="friend"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Друзья</span>
                    </label>

                    <label for="facebook-rating" class="facebook-label all-label-items">
                    <input change-quantity-id="facebook" type="checkbox" id="facebook-rating"  name="rating" value="rating"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Рекомендации</span>
                    </label>

                    <label for="facebook-comments" class="facebook-label all-label-items">
                    <input target-open="comments-facebook" change-quantity-id="facebook" type="checkbox" id="facebook-comments"  name="comments" value="comments"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Коментарии</span>
                    </label>

                    <label for="facebook-repost" class="facebook-label all-label-items">
                    <input change-quantity-id="facebook" type="checkbox" id="facebook-repost"  name="repost" value="repost"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Репосты</span>
                    </label>

                    <label for="facebook-view-video" class="facebook-label all-label-items">
                    <input target-open="view-facebook" change-quantity-id="facebook" type="checkbox" id="facebook-view-video"  name="view-video" value="view-video"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Просмотры</span>
                    </label>

                    <label for="facebook-meeting" class="facebook-label all-label-items">
                    <input change-quantity-id="facebook" type="checkbox" id="facebook-meeting"  name="meeting" value="meeting"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Мероприятия</span>
                    </label>

                    <label for="facebook-ads" class="facebook-label all-label-items">
                    <input change-quantity-id="facebook" type="checkbox" id="facebook-ads"  name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Реклама</span>
                    </label>

					
<!--                     <label for="facebook-like-photo" class="facebook-label all-label-items">
                    <input change-quantity-id="facebook" type="checkbox" id="facebook-like-photo"  name="favourite" value="favourite"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Нр. фото/пост</span>
                    </label> -->

                   
                </div>
				
				<div class="inside-form-level-middle">
                 	<textarea open-for-target="comments-facebook" id="comments-facebook" class="hiden" placeholder="Введите комментарии по одному в строку, Пример: &#10;Комментарий 1&#10;Комментарий 2"></textarea>
				
					<div open-for-target="like-facebook" class="type-select type-of-like" >
						<label>
								Живые лайки
								<input type="radio" name="type-of-like" value="#DEV" class="facebook-like-g">
						</label>
						<label>
								Лайки на фото, посты (12 руб. за 100 штук)
								<input type="radio" name="type-of-like" id="enlikes" value="#DEV" class="facebook-like-g">
						</label>
						<label>
								Лайки на фото, посты. Долгий старт (7 руб. за 100 штук)
								<input type="radio" name="type-of-like" id="enlikesfbcheap" value="#DEV" class="facebook-like-g">
						</label>
						<label>
								Лайки на фото, посты. Офферы, ручное выполнение. Критерии (59 руб. за 100 штук)
								<input type="radio" name="type-of-like" id="fblikeoffer" value="#DEV" class="facebook-like-g">
						</label>
						<label>
								На комментарии лайки. Критерии (40 руб. за 100 штук)
								<input type="radio" name="type-of-like" id="fbcommentlikeoffer" value="#DEV" class="facebook-like-g">
						</label>
						<label>
								Эмоджи (9 руб. за 100 штук)
								<input type="radio" name="type-of-like" id="enlikesarab" value="#DEV" class="facebook-like-g">
						</label>
					</div>
					<div open-for-target="view-facebook" class="type-select type-of-view" >
						<label>
								Живые 
								<input type="radio" name="type-of-view" value="#DEV" class="facebook-view-g">
						</label>
						<label>
								Просмотры видео (быстрые) (2 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="fbvideo" value="#DEV" class="facebook-view-g">
						</label>
						<label>
								Просмотры видео (медленные) (30 руб. за 1000 штук)
								<input type="radio" name="type-of-view" id="fbvideoviewsslow" value="#DEV" class="facebook-view-g">
						</label>
						<label>
								Просмотры видео трансляций (прямой эфир) (180 минут) (1300 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="fbvideoliveviews180" value="#DEV" class="facebook-view-g">
						</label>
						<label>
								Просмотры видео трансляций (прямой эфир) (30 минут) (250 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="fbvideoliveviews30" value="#DEV" class="facebook-view-g">
						</label>
						<label>
								Просмотры видео трансляций (прямой эфир) (60 минут) (450 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="fbvideoliveviews60" value="#DEV" class="facebook-view-g">
						</label>
						<label>
								Просмотры видео трансляций (прямой эфир) (90 минут) (650 руб. за 100 штук)
								<input type="radio" name="type-of-view" id="fbvideoliveviews90" value="#DEV" class="facebook-view-g">
						</label>
					</div>
					
				
				</div>
                <div class="inside-form-level-2">
				
				
				
                    <?//echo $apiResult;?>
                    <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-facebook" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-facebook-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-facebook">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="facebook" name="count" id="facebook-count" step="100" min-value="0" max-value="10000000" value="1000">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку</div>
                        <input type="text" self-id-input="facebook" placeholder="https://www.facebook.com/smmfox.ua" id="facebook-userLink" name="userLink" value="" >
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-facebook">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="facebook-price" name="price" class="fox-block-all-price push-price-facebook" value="0"></input>
                        <span>грн</span>
                        <div class="sale-label">скидка <span class="fox-block-all-sale push-sale-facebook">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled id="fox-block-facebook-submit-button" value="">
                 </div>
            </form>
    </div>

			<!-- ////////////////////////// VK.COM ///////////////////////////////// -->
        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-vk" id="vk">
            <form id="vk-form" action="" method="POST" onsubmit="api('vk'); return false;">
                 <div class="inside-form-level-1">
    
					<label for="vk-subscribers" class="vk-label all-label-items">
                    <input change-quantity-id="vk" type="checkbox" id="vk-subscribers" name="subscribers" value="subs"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Подписчики</span>
                    </label>

                    <label for="vk-friends" class="vk-label all-label-items"> 
                    <input change-quantity-id="vk" id="vk-friends" type="checkbox" name="friends" value="friends"> <div class="checked-after"></div> 
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Друзья</span>
                    </label> 

                    <label for="vk-like" class="vk-label all-label-items">
                    <input change-quantity-id="vk" type="checkbox" id="vk-like" name="like" value="like"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Лайки</span>
                    </label>

                    <label for="vk-repost" class="vk-label all-label-items">
                    <input change-quantity-id="vk" type="checkbox" id="vk-repost" name="repost" value="repost"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Репосты</span>
                    </label>

                    <label for="vk-view" class="vk-label all-label-items">
                    <input change-quantity-id="vk" type="checkbox" id="vk-view" name="view" value="view"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Просмотры</span>
                    </label>

                    <label for="vk-ads" class="vk-label all-label-items">
                    <input change-quantity-id="vk" type="checkbox" id="vk-ads" name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Реклама</span>
                    </label>

                        
<!-- 					<textarea open-for-target="comments-vk" id="comments-vk" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>

    				<div class="inside-form-level-middle">
<!-- 					<textarea open-for-target="comments-vk" id="comments-vk" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
					
					<div open-for-target="subscribers-vk" class="type-select type-of-subscribers">
						<label>
							Живые
							<input type="radio" name="type-of-subscribers" value="Живые" class="vk-subscribers-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-subscribers" value="vk-subscribers-robots" class="vk-subscribers-g">
						</label>
						
						 <div open-for-target="vk-subscribers-robots" class="middle-open hiden">
                            <label>
                                Вступившие\Подписчики в паблик\группу. Быстрые! Качество! Без собак и списаний! (цена за 100 штук - 109 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkbestfastnew" value="#DEV" class="vk-subscribers-g">
                            </label>
							<label>
                                Вступившие\Подписчики в паблик\группу. Качество! Без собак и списаний! По критериям. (цена за 100 штук - 119 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkbestfastkrit" value="#DEV" class="vk-subscribers-g">
                            </label>
							<label>
                                Вступившие\Подписчики в паблик\группу. Качество! Без собак и списаний! (цена за 100 штук - 79 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkbestfast" value="#DEV" class="vk-subscribers-g">
                            </label>
							<label>
                                Вступившие\Подписчики в паблик\группу. По КРИТЕРИЯМ (цена за 100 штук - 29 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkprkriterii" value="#DEV" class="vk-subscribers-g">
                            </label>
							<label>
                                Вступившие\Подписчики в паблик\группу (цена за 100 штук - 19 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkpreconom" value="#DEV" class="vk-subscribers-g">
                            </label>
                        </div>
					</div>
					
					<div open-for-target="subscribers-vk" class="type-select type-of-subscribers">
						<label>
							Живые
							<input type="radio" name="type-of-subscribers" value="Живые" class="vk-subscribers-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-subscribers" value="vk-subscribers-robots" class="vk-subscribers-g">
						</label>
						
						 <div open-for-target="vk-subscribers-robots" class="middle-open hiden">
                            <label>
                                Друзья\Подписчики на аккаунт. Качество! Без собак! (цена за 100 штук - 79 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkbestfrend" value="#DEV" class="vk-subscribers-g">
                            </label>
							<label>
                                Друзья\\Подписчики на аккаунт. По КРИТЕРИЯМ (цена за 100 штук - 29 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkprdruziakrit" value="#DEV" class="vk-subscribers-g">
                            </label>
							<label>
                                Друзья\\Подписчики на аккаунт (цена за 100 штук - 19 руб.)
                                <input type="radio" name="type-of-subscribers-item" id="vkprdruzia" value="#DEV" class="vk-subscribers-g">
                            </label>
                        </div>
					</div>
					
    				</div>
			<div class="inside-form-level-2">
                                        <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-vk" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-vk-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-vk">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="vk" name="count" id="vk-count" step="1" min-value="10" max-value="10000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку на видео</div>
                        <input type="text" self-id-input="vk" placeholder="https://www.vk.com/watch?v=054smjVFyaw" id="vk-userLink" name="userLink" value="">
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-vk" style="display: none;">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="vk-price" class="fox-block-all-price push-price-vk" value="0" readonly="">
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-vk">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled="" id="fox-block-vk-submit-button" value="">
                 </div>
            </form>
        </div>

		
			<!-- ////////////////////////// TELEGRAM ///////////////////////////////// -->
        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-telegram" id="telegram">
            <form id="telegram-form" action="" method="POST" onsubmit="api('telegram'); return false;">
                 <div class="inside-form-level-1">
    
					<label for="telegram-subscribers" class="telegram-label all-label-items">
                    <input change-quantity-id="telegram" type="checkbox" id="telegram-subscribers" name="subscribers" value="subs"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Подписчики</span>
                    </label>

                    <label for="telegram-view" class="telegram-label all-label-items"> 
                    <input change-quantity-id="telegram" id="telegram-view" type="checkbox" name="view" value="view"> <div class="checked-after"></div> 
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Просмотры</span>
                    </label> 

                    <label for="telegram-voting" class="telegram-label all-label-items">
                    <input change-quantity-id="telegram" type="checkbox" id="telegram-voting" name="voting" value="voting"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Голосования</span>
                    </label>

                    <label for="telegram-rate" class="telegram-label all-label-items">
                    <input change-quantity-id="telegram" type="checkbox" id="telegram-rate" name="rate" value="rate"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Рейтинги</span>
                    </label>

<!--                     <label for="telegram-view" class="telegram-label all-label-items">
                    <input change-quantity-id="telegram" type="checkbox" id="telegram-view" name="view" value="view"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Просмотры видео telegram</span>
                    </label>

                    <label for="telegram-ads" class="telegram-label all-label-items">
                    <input change-quantity-id="telegram" type="checkbox" id="telegram-ads" name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Контекстная реклама telegram</span>
                    </label> -->

                        
<!-- 					<textarea open-for-target="comments-telegram" id="comments-telegram" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>
                <div class="inside-form-level-middle">
<!-- 					<textarea open-for-target="comments-telegram" id="comments-telegram" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
					<div open-for-target="subscribers-telegram" class="type-select type-of-subscribers">
						<label>
							Живые
							<input type="radio" name="type-of-subscribers" value="Живые" class="telegram-subscribers-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-subscribers" value="telegram-subscribers-robots" class="telegram-subscribers-g">
						</label>
						
						 <div open-for-target="telegram-subscribers-robots" class="middle-open hiden">
                            <label>
                                Подписчики/фолловеры (иностранные) (автовосстановление 7 дней) (49 руб. за 100 штук)
                                <input type="radio" name="type-of-subscribers-item" id="telegramusersworld" value="#DEV" class="telegram-subscribers-g">
                            </label>
							<label>
                                Подписчики Весь мир (без гарантии) (55 руб. за 100 штук)
                                <input type="radio" name="type-of-subscribers-item" id="telegramusersworldno" value="#DEV" class="telegram-subscribers-g">
                            </label>
							<label>
                                Подписчики Русские (99 руб. за 100 штук)
                                <input type="radio" name="type-of-subscribers-item" id="telegramusers" value="#DEV" class="telegram-subscribers-g">
                            </label>
							<label>
                                Подписчики Русские с критериями (пол) (129 руб. за 100 штук)
                                <input type="radio" name="type-of-subscribers-item" id="telegramusersruskrit" value="#DEV" class="telegram-subscribers-g">
                            </label>
							<label>
                                Подписчики США (99 руб. за 100 штук)
                                <input type="radio" name="type-of-subscribers-item" id="telegramusersfast" value="#DEV" class="telegram-subscribers-g">
                            </label>
                            <label>
                        </div>
					</div>
					
					<div open-for-target="view-telegram" class="type-select type-of-view">
						<label>
							Живые
							<input type="radio" name="type-of-view" value="Живые" class="telegram-view-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-view" value="telegram-view-robots" class="telegram-view-g">
						</label>
						
						 <div open-for-target="telegram-view-robots" class="middle-open hiden">
                            <label>
                                Автопросмотры на новые записи (14 дней)
                                <input type="radio" name="type-of-view-item" id="telegramviewautosub14days" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Автопросмотры на новые записи (30 дней)
                                <input type="radio" name="type-of-view-item" id="telegramviewautosub30days" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Автопросмотры на новые записи (7 дней)
                                <input type="radio" name="type-of-view-item" id="telegramviewautosub7days" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Просмотры Иностранные (10 последних постов) (59 руб. за 100 штук)
                                <input type="radio" name="type-of-view-item" id="telegramviews10posts" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Просмотры Иностранные (20 последних постов) (89 руб. за 100 штук)
                                <input type="radio" name="type-of-view-item" id="telegramviews20posts" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Просмотры Иностранные (5 последних постов) (29 руб. за 100 штук)
                                <input type="radio" name="type-of-view-item" id="telegramviews5posts" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Просмотры (на 1 пост) (15 руб. за 100 штук)
                                <input type="radio" name="type-of-view-item" id="telegramviewson1post100" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Просмотры РУССКИЕ (10-20 последних постов) (59 руб. за 100 штук)
                                <input type="radio" name="type-of-view-item" id="telegramviewsrus" value="#DEV" class="telegram-view-g">
                            </label>
							<label>
                                Просмотры РУССКИЕ (подписка)
                                <input type="radio" name="type-of-view-item" id="telegramviewssub" value="#DEV" class="telegram-view-g">
                            </label>
                        </div>
					</div>
					
					<div open-for-target="vote-telegram" class="type-select type-of-vote">
						<label>
							Живые
							<input type="radio" name="type-of-vote" value="Живые" class="telegram-vote-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-vote" value="telegram-vote-robots" class="telegram-vote-g">
						</label>
						
						 <div open-for-target="telegram-vote-robots" class="middle-open hiden">
                            <label>
                                 Голосования / лайки / дизлайки / опросы / кнопки (65 руб. за 100 штук)
                                <input type="radio" name="type-of-vote-item" id="telegramknopki" value="#DEV" class="telegram-vote-g">
                            </label>
                        </div>
					</div>
					
					<div open-for-target="rating-telegram" class="type-select type-of-rating">
						<label>
							Живые
							<input type="radio" name="type-of-rating" value="Живые" class="telegram-rating-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-rating" value="telegram-rating-robots" class="telegram-rating-g">
						</label>
						
						 <div open-for-target="telegram-rating-robots" class="middle-open hiden">
                            <label>
                                 Рейтинг ботов на StoreBot.me (99 руб. за 10 штук)
                                <input type="radio" name="type-of-rating-item" id="telegramstorebot" value="#DEV" class="telegram-rating-g">
                            </label>
							<label>
                                 Рейтинг каналов на Tchannels.me (99 руб. за 10 штук)
                                <input type="radio" name="type-of-rating-item" id="telegramеchannels" value="#DEV" class="telegram-rating-g">
                            </label>
                        </div>
					</div>
					
					
					
                </div>
				<div class="inside-form-level-2">
                                        <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-telegram" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-telegram-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-telegram">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="telegram" name="count" id="telegram-count" step="1" min-value="10" max-value="10000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку на видео</div>
                        <input type="text" self-id-input="telegram" placeholder="https://www.telegram.com/watch?v=054smjVFyaw" id="telegram-userLink" name="userLink" value="">
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-telegram" style="display: none;">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="telegram-price" class="fox-block-all-price push-price-telegram" value="0" readonly="">
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-telegram">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled="" id="fox-block-telegram-submit-button" value="">
                 </div>
            </form>
        </div>
		
		
		
		<!-- ////////////////////////// TRIP ADVISOR ///////////////////////////////// -->
        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-trip-advisor" id="trip-advisor">
            <form id="trip-advisor-form" action="" method="POST" onsubmit="api('trip-advisor'); return false;">
                 <div class="inside-form-level-1">
    
					<label style="width: 100%" for="trip-advisor-subscribers" class="trip-advisor-label all-label-items">
                    <input change-quantity-id="trip-advisor" type="checkbox" id="trip-advisor-subscribers" name="subscribers" value="subs"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Подписчики в trip-advisor</span>
                    </label>
					
                    <label style="width: 100%" for="trip-advisor-repost" class="trip-advisor-label all-label-items">
                    <input change-quantity-id="trip-advisor" type="checkbox" id="trip-advisor-repost" name="repost" value="repost"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Оставить отзыв и оценку в trip-advisor</span>
                    </label>

                        
<!-- 					<textarea open-for-target="comments-trip-advisor" id="comments-trip-advisor" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>
                <div class="inside-form-level-middle">
<!-- 					<textarea open-for-target="comments-trip-advisor" id="comments-trip-advisor" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>
				<div class="inside-form-level-2">
                    <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-trip-advisor" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-trip-advisor-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-trip-advisor">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="trip-advisor" name="count" id="trip-advisor-count" step="1" min-value="10" max-value="10000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку на видео</div>
                        <input type="text" self-id-input="trip-advisor" placeholder="https://www.trip-advisor.com/watch?v=054smjVFyaw" id="trip-advisor-userLink" name="userLink" value="">
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-trip-advisor" style="display: none;">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="trip-advisor-price" class="fox-block-all-price push-price-trip-advisor" value="0" readonly="">
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-trip-advisor">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled="" id="fox-block-trip-advisor-submit-button" value="">
                 </div>
            </form>
        </div>
		
		<!-- ////////////////////////// STAR ///////////////////////////////// -->
        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-star" id="star">
            <form id="star-form" action="" method="POST" onsubmit="api('star'); return false;">
                 <div class="inside-form-level-1">
    
					<label for="star-сontests" class="star-label all-label-items">
                    <input change-quantity-id="star" type="checkbox" id="star-сontests" name="сontests" value="сontests"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Конкурсы</span>
                    </label>

                    <label for="star-polls" class="star-label all-label-items"> 
                    <input change-quantity-id="star" id="star-polls" type="checkbox" name="polls" value="polls"> <div class="checked-after"></div> 
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Опросы</span>
                    </label>

                    <label for="star-register" class="star-label all-label-items"> 
                    <input change-quantity-id="star" id="star-register" type="checkbox" name="register" value="register"> <div class="checked-after"></div> 
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Активность</span>
                    </label>  

                    <!-- <label for="star-like" class="star-label all-label-items">
                    <input change-quantity-id="star" type="checkbox" id="star-like" name="like" value="like"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Накрутка лайков фото/видео/поста star</span>
                    </label>

                    <label for="star-repost" class="star-label all-label-items">
                    <input change-quantity-id="star" type="checkbox" id="star-repost" name="repost" value="repost"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Рассказать друзьям (репосты) star</span>
                    </label>

                    <label for="star-view" class="star-label all-label-items">
                    <input change-quantity-id="star" type="checkbox" id="star-view" name="view" value="view"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Просмотры видео star</span>
                    </label>

                    <label for="star-ads" class="star-label all-label-items">
                    <input change-quantity-id="star" type="checkbox" id="star-ads" name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Контекстная реклама star</span>
                    </label>
 -->
                        
<!-- 					<textarea open-for-target="comments-star" id="comments-star" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>
                <div class="inside-form-level-middle">
<!-- 					<textarea open-for-target="comments-star" id="comments-star" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>
				<div class="inside-form-level-2">
                                        <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-star" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-star-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-star">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="star" name="count" id="star-count" step="1" min-value="10" max-value="10000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку на видео</div>
                        <input type="text" self-id-input="star" placeholder="https://www.star.com/watch?v=054smjVFyaw" id="star-userLink" name="userLink" value="">
                        <div class="link-logo-social" style="font-family: Font-Awesome-Pro-Light; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-star" style="display: none;">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="star-price" class="fox-block-all-price push-price-star" value="0" readonly="">
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-star">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled="" id="fox-block-star-submit-button" value="">
                 </div>
            </form>
        </div>
		
		
		
		<!-- //////////////////////////////////// GOOGLE ////////////////////////////////// -->
        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-google" id="google">
            <form id="google-form" action="" method="POST" onsubmit="api('google'); return false;">
                 <div class="inside-form-level-1">
    
					<label for="google-maps" class="google-label all-label-items">
                    <input change-quantity-id="google" type="checkbox" id="google-maps" name="maps" value="maps"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Google отзывы</span>
                    </label>

<!--                     <label style="width: 100%" for="google-plus" class="google-label all-label-items"> 
                    <input change-quantity-id="google" id="google-plus" type="checkbox" name="plus" value="plus"> <div class="checked-after"></div> 
                        <span class="form-label-icon"></span><span class="label-title">Накрутка Google Plus</span>
                    </label>  -->

                    <label for="google-ads" class="google-label all-label-items">
                    <input change-quantity-id="google" type="checkbox" id="google-ads" name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Brands-Regular"></span><span class="label-title">Google Ads</span>
                    </label>

                    <label for="google-audit" class="google-label all-label-items">
                    <input change-quantity-id="google" type="checkbox" id="google-audit" name="audit" value="audit"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Аудит рекламы</span>
                    </label>
<!-- 
                    <label for="google-dizlike" class="google-label all-label-items">
                    <input change-quantity-id="google" type="checkbox" id="google-dizlike" name="dizlike" value="dizlike"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Дизлайки</span>
                    </label>

                    <label for="google-repost" class="google-label all-label-items">
                    <input change-quantity-id="google" type="checkbox" id="google-repost" name="repost" value="repost"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Репосты</span>
                    </label>

                    <label for="google-favourite" class="google-label all-label-items">
                    <input change-quantity-id="google" type="checkbox" id="google-favourite" name="favourite" value="favourite"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Избранное</span>
                    </label>

                    <label for="google-comments" class="google-label all-label-items">
                    <input target-open="comments-google" change-quantity-id="google" type="checkbox" id="google-comments" name="comments" value="comments" class="check-box-active"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Комментарии</span>
                    </label>

                    <label for="google-ads" class="google-label all-label-items">
                    <input change-quantity-id="google" type="checkbox" id="google-ads" name="ads" value="ads"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Free-Solid;"></span><span class="label-title">Платная реклама</span>
                    </label> -->

                        
<!-- 					<textarea open-for-target="comments-google" id="comments-google" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>

                <div class="inside-form-level-middle">
<!-- 					<textarea open-for-target="comments-google" id="comments-google" class="" placeholder="Введите комментарии по одному в строку, Пример: 
						Комментарий 1
						Комментарий 2">
					</textarea> -->
                </div>

                <div class="inside-form-level-2">
                                        <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-google" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-google-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-google">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="google" name="count" id="google-count" step="1" min-value="10" max-value="10000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку на видео</div>
                        <input type="text" self-id-input="google" placeholder="https://www.google.com/watch?v=054smjVFyaw" id="google-userLink" name="userLink" value="">
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-google" style="display: none;">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="google-price" class="fox-block-all-price push-price-google" value="0" readonly="">
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-google">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled="" id="fox-block-google-submit-button" value="">
                 </div>
            </form>
        </div>

        <!-- ///////////////////////////////TWITTER//////////////////////////////////// -->

        <div class="fox-block fox-block-after-social-row fox-block-social-form fox-block-twitter hiden" id="vk">
            <form id="twitter-form" action="" method="POST" onsubmit="api('twitter'); return false;">
                 <div class="inside-form-level-1">
    
                    <label for="twitter-subscribers" class="twitter-label all-label-items">
                    <input change-quantity-id="twitter" type="checkbox" id="twitter-subscribers" name="subscribers" value="subs"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Подписчики</span>
                    </label>

                    <label for="twitter-like" class="twitter-label all-label-items">
                    <input change-quantity-id="twitter" type="checkbox" id="twitter-like"  name="like" value="like"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Лайки</span>
                    </label>

                    <label for="twitter-retvit" class="twitter-label all-label-items">
                    <input change-quantity-id="twitter" type="checkbox" id="twitter-retvit"  name="retvit" value="retvit"><div class="checked-after"></div>
                        <span class="form-label-icon" style="font-family: Font-Awesome-Pro-Light;"></span><span class="label-title">Ретвиты</span>
                    </label>

                </div>

                <div class="inside-form-level-middle">
                	
                	<div open-for-target="subscribers-twitter" class="type-select type-of-subscribers">
						<label>
							Живые
							<input type="radio" name="type-of-subscribers" value="Живые" class="twitter-subscribers-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-subscribers" value="twitter-subscribers-robots" class="twitter-subscribers-g">
						</label>
						
						 <div open-for-target="twitter-subscribers-robots" class="middle-open hiden">
                            <label>
                                Подписчики/фолловеры (иностранные) (автовосстановление 7 дней) (49 руб. за 100 штук)
                                <input type="radio" name="type-of-subscribers-item" id="twiwennoav" value="#DEV" class="twitter-subscribers-g">
                            </label>
                        </div>
					</div>
					
					<div open-for-target="like-twitter" class="type-select type-of-like">
						<label>
							Живые
							<input type="radio" name="type-of-like" value="Живые" class="twitter-like-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-like" value="twitter-like-robots" class="twitter-like-g">
						</label>
						
						 <div open-for-target="twitter-like-robots" class="middle-open hiden">
                            <label>
                                АКЦИЯ! Лайки (12 руб. за 100 штук) (NO API)
                                <input type="radio" name="type-of-like-item" id="dev6" value="#DEV" class="twitter-like-g">
                            </label>
							<label>
                                Лайки иностранные (49 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="twitfavouriteen" value="#DEV" class="twitter-like-g">
                            </label>
							<label>
                                Лайки офферные русские (24 руб. за 100 штук)
                                <input type="radio" name="type-of-like-item" id="favouriteoffers" value="#DEV" class="twitter-like-g">
                            </label>
							<label>
                                 Подписка на лайки
                                <input type="radio" name="type-of-like-item" id="izbrannoepodpiska" value="#DEV" class="twitter-like-g">
                            </label>
                        </div>
					</div>
					<!-- #dev twitter -->
					<div open-for-target="retweet-twitter" class="type-select type-of-retweet">
						<label>
							Живые
							<input type="radio" name="type-of-retweet" value="Живые" class="twitter-retweet-g">
						</label>
						<label>
							Роботы
							<input type="radio" name="type-of-retweet" value="twitter-retweet-robots" class="twitter-retweet-g">
						</label>
						
						 <div open-for-target="twitter-retweet-robots" class="middle-open hiden">
                            <label>
                                Подписка на ретвиты
                                <input type="radio" name="type-of-retweet-item" id="retwitpodpiska" value="#DEV" class="twitter-retweet-g">
                            </label>
							<label>
                                Ретвиты иностранные (109 руб. за 100 штук)
                                <input type="radio" name="type-of-retweet-item" id="vkprretviten" value="#DEV" class="twitter-retweet-g">
                            </label>
							<label>
                                Ретвиты офферные русские (25 руб. за 100 штук)
                                <input type="radio" name="type-of-retweet-item" id="retwitoffers" value="#DEV" class="twitter-retweet-g">
                            </label>
                        </div>
					</div>
					
                </div> 

                <div class="inside-form-level-2">
                    <?//echo $apiResult;?>
                    <div class="additionals-field">
                        <div class="additionals-field-title-flag-all">
                            <div additionals-field-open="additionals-field-twitter" class="additionals-field-title close-add-fields">Еще опции <span class="additionals-field-title-flag"></span></div>
                        </div>
                    </div>

                    <div class="additionals-field-item additionals-field-twitter-open" style="display: none;">
                       
                    </div>

                </div>

                    <div class="quantity push-arg-twitter">
                        <div class="quantity-title all-input-text-title">Количество</div>
                        <div class="quanlity-minus"></div>
                        <input type="text" change-quantity-price="twitter" name="count" id="twitter-count" step="100" min-value="0" max-value="10000000" value="100">
                        <div class="quanlity-plus"></div>
                    </div>
                    <div class="link">
                        <!-- <div class="warning-text hiden"><div> ! </div> Поле не должно быть пустым</div> -->
                        <div class="link-title all-input-text-title">Укажите ссылку</div>
                        <input type="text" self-id-input="twitter" placeholder="https://www.twitter.com/watch?v=054smjVFyaw" id="twitter-userLink" name="userLink" value="" >
                        <div class="link-logo-social" style="font-family: Font-Awesome-Brands-Regular; font-size: 20px;"></div>
                    </div>


                <div class="fox-block-submit-button">
                   <div class="fox-block-price-without-sale push-without-sale-twitter">
                       12353<span>грн</span>
                   </div>
                    <div class="fox-block-sale-price">
                        <input name="all_price" id="twitter-price" name="price" class="fox-block-all-price push-price-twitter" value="0"></input>
                        <span>грн</span>
                        <div class="sale-label">Скидка <span class="fox-block-all-sale push-sale-twitter">0%</span></div>
                    </div>
                    <!--<input type="text">-->
                    <input type="submit" disabled id="fox-block-twitter-submit-button" value="">
                 </div>
            </form>
        </div>


        <!-- ///////////////////DESCRIPTION////////////////////////////// -->

        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-youtube">
        	<div class="description-category">
	            <p>
	                Продвижение YouTube канала доступно по таким направлениям: накрутка подписчиков, просмотров, лайков / дизлайков, репосты ролика, добавление в избранное, написание комментариев и платная реклама. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения зависит от услуги и обновления счетчиков YouTube. В среднем первые результаты Вы увидите уже через 12-36 часов.<br><br>
	                Реклама в YouTube это показ видео максимально целевой аудитории. <br>Можно выбрать: пол, возраст, интересы, тематику и геотаргетинг. <br>Частота показа зависит от ежедневного бюджета. <br>Средняя цена за 1 просмотр всего 10-15 копеек.
	            </p>
            </div>
            <div class="desription-checkbox"></div>
        </div>
        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-instagram hiden">
        	<div class="description-category">
	            <p>
	                Эффективное продвижение в Instagram не возможно без накрутки подписчиков, лайков, комментариев и просмотров видео. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения плавающая. В среднем первые результаты Вы увидите уже через 5-10 минут.
	            
	            </p>
            </div>
             <div class="desription-checkbox"></div>
        </div>
        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-facebook hiden">
        	<div class="description-category">
            	<ul class="description-list">
	                <li><span class="icon clock-description"></span> Быстрый старт задания</li>
	                <li><span class="icon battery-full"></span> Гарантия выполнения</li>
	                <li><span class="icon users-cog"></span> Выбор многих параметров</li>
            		<li><span class="icon rocket"></span> Доступно VIP ускорение</li>
            		<li><span class="icon user-secret"></span> Полная конфиденциальность</li>		
            	</ul>
               <p>Добавляем подписчиков, лайки, просмотры, голоса и мнения (рекомендации) в Facebook. </p> 
				<p>Скорость зависит от выбранных критериев и количества действий в сутки. 
				Лимиты на выполнение проекта можно выставить в доп. опциях.</p>
			</div>
			 <div class="desription-checkbox"></div>

        </div>
        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-vk hiden">
        	<div class="description-category">
	            <p>
	                Продвижение vk канала доступно по таким направлениям: накрутка подписчиков, просмотров, лайков / дизлайков, репосты ролика, добавление в избранное, написание комментариев и платная реклама. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения зависит от услуги и обновления счетчиков YouTube. В среднем первые результаты Вы увидите уже через 12-36 часов.<br><br>
	                Реклама в YouTube это показ видео максимально целевой аудитории. <br>Можно выбрать: пол, возраст, интересы, тематику и геотаргетинг. <br>Частота показа зависит от ежедневного бюджета. <br>Средняя цена за 1 просмотр всего 10-15 копеек.
	            </p>
            </div>
             <div class="desription-checkbox"></div>
        </div>
        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-google hiden">
        	<div class="description-category">
	            <p>
	                Продвижение google канала доступно по таким направлениям: накрутка подписчиков, просмотров, лайков / дизлайков, репосты ролика, добавление в избранное, написание комментариев и платная реклама. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения зависит от услуги и обновления счетчиков YouTube. В среднем первые результаты Вы увидите уже через 12-36 часов.<br><br>
	                Реклама в YouTube это показ видео максимально целевой аудитории. <br>Можно выбрать: пол, возраст, интересы, тематику и геотаргетинг. <br>Частота показа зависит от ежедневного бюджета. <br>Средняя цена за 1 просмотр всего 10-15 копеек.
	            </p>
            </div>
             <div class="desription-checkbox"></div>
        </div>

        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-twitter hiden">
        	<div class="description-category">
	            <p>
	                Продвижение twitter канала доступно по таким направлениям: накрутка подписчиков, просмотров, лайков / дизлайков, репосты ролика, добавление в избранное, написание комментариев и платная реклама. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения зависит от услуги и обновления счетчиков YouTube. В среднем первые результаты Вы увидите уже через 12-36 часов.<br><br>
	                Реклама в YouTube это показ видео максимально целевой аудитории. <br>Можно выбрать: пол, возраст, интересы, тематику и геотаргетинг. <br>Частота показа зависит от ежедневного бюджета. <br>Средняя цена за 1 просмотр всего 10-15 копеек.
	            </p>
            </div>
             <div class="desription-checkbox"></div>
        </div>

        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-telegram hiden">
        	<div class="description-category">
	            <p>
	                Продвижение telegram канала доступно по таким направлениям: накрутка подписчиков, просмотров, лайков / дизлайков, репосты ролика, добавление в избранное, написание комментариев и платная реклама. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения зависит от услуги и обновления счетчиков YouTube. В среднем первые результаты Вы увидите уже через 12-36 часов.<br><br>
	                Реклама в YouTube это показ видео максимально целевой аудитории. <br>Можно выбрать: пол, возраст, интересы, тематику и геотаргетинг. <br>Частота показа зависит от ежедневного бюджета. <br>Средняя цена за 1 просмотр всего 10-15 копеек.
	            </p>
            </div>
            <div class="desription-checkbox"></div>
        </div>

        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-star hiden">
        	<div class="description-category">
	            <p>
	                Продвижение Star канала доступно по таким направлениям: накрутка подписчиков, просмотров, лайков / дизлайков, репосты ролика, добавление в избранное, написание комментариев и платная реклама. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения зависит от услуги и обновления счетчиков YouTube. В среднем первые результаты Вы увидите уже через 12-36 часов.<br><br>
	                Реклама в YouTube это показ видео максимально целевой аудитории. <br>Можно выбрать: пол, возраст, интересы, тематику и геотаргетинг. <br>Частота показа зависит от ежедневного бюджета. <br>Средняя цена за 1 просмотр всего 10-15 копеек.
	            </p>
            </div>
             <div class="desription-checkbox"></div>
        </div>
        <div class="fox-block fox-block-after-social-row  fox-block-social-description  fox-block-description-trip-advisor hiden">
        	<div class="description-category">
	            <p>
	                Продвижение Trip-advisor канала доступно по таким направлениям: накрутка подписчиков, просмотров, лайков / дизлайков, репосты ролика, добавление в избранное, написание комментариев и платная реклама. <br><br>Запуск в работу сразу после оплаты, но скорость выполнения зависит от услуги и обновления счетчиков YouTube. В среднем первые результаты Вы увидите уже через 12-36 часов.<br><br>
	                Реклама в YouTube это показ видео максимально целевой аудитории. <br>Можно выбрать: пол, возраст, интересы, тематику и геотаргетинг. <br>Частота показа зависит от ежедневного бюджета. <br>Средняя цена за 1 просмотр всего 10-15 копеек.
	            </p>
            </div>
            <div class="desription-checkbox"></div>
        </div>
    

</div>

</div>

<div class="fox-block-orders-history-list" id="">
    <div class="container" id="orders">
	
	<?
	if(isset($_SESSION['email']) ) {
	
	$link= dbConnect();
	$query = mysqli_query($link, "SELECT smmid,project_id,datatype,date,title,task,ourprice,ourcount,language,orderType,url,name,requests,ourtask,comment,works,payed,onpause,deleted FROM projects WHERE email='".$_SESSION['email']."' ORDER BY `date` DESC");
	$query2 = mysqli_query($link, "SELECT smmid,project_id,datatype FROM projects WHERE email='".$_SESSION['email']."' ");
	
	
	
	////add check if order completed
	
	
	
	while ( $row2 = $query2->fetch_assoc() ) {
		
		if($row2['project_id']!= null && $row2['project_id'] != '0' && $row2['project_id'] != '' && $row2['datatype'] != 'dizlike') {
			
			$data = array('apicode'=>'fee4c46074bb7980fa99003c736cd2a7',
						  'project_id' => $row2['project_id'],
						 );
		
			$projResult = post('https://qcomment.ru/api/project', $data);
			$result = json_decode($projResult,true);	
			
			//echo $result['requests']
			//print_r($result);
			
			$sql2 = "UPDATE projects SET email='$_SESSION[email]', project_id='$result[project_id]', subjects='$result[subjects]', subjects_short='$result[subjects_short]', status='$result[status]', price='$result[price]', screenshot='$result[screenshot]', refuse_small_price='$result[refuse_small_price]', title='$result[title]', url='$result[url]', task='$result[task]', stop_words='$result[stop_words]', `limit`='$result[limit]', limit_url='$result[limit_url]', limit_url_day='$result[limit_url_day]', limit_hour='$result[limit_hour]', limit_author='$result[limit_author]', limit_author_day='$result[limit_author_day]', limit_author_group='$result[limit_author_group]', limit_author_group_day='$result[limit_author_group_day]', tarif_id='$result[tarif_id]', language='$result[language]', language_short='$result[language_short]', start_time='$result[start_time]', end_time='$result[end_time]', group_id='$result[group_id]', pages='$result[pages]', team_id='$result[team_id]', create_team_id='$result[create_team_id]', notlong='$result[notlong]', send_email='$result[send_email]', pay='$result[pay]', requests='$result[requests]', reworks='$result[reworks]', works='$result[works]', in_work='$result[in_work]', minutes='$result[minutes]', date='$result[date]', premoderation='$result[premoderation]' WHERE email = '".$_SESSION['email']."' AND project_id='".$row2['project_id']."' ";
			//	datatype, count, cost, ourprice, ourcount, orderType, name ) VALUES ('$_SESSION[email]', '$result[project_id]', '$result[subject]', '$result[subjects_short]', '$result[status]', '$result[price]', '$result[screenshot]', '$result[refuse_small_price]', '$result[title]', '$result[url]', '$result[task]', '$result[stop_words]', '$result[limit]', '$result[limit_url]', '$result[limit_url_day]', '$result[limit_hour]', '$result[limit_author]', '$result[limit_author_day]', '$result[limit_author_group]', '$result[limit_author_group_day]', '$result[tarif_id]', '$result[language]', '$result[language_short]', '$result[start_time]', '$result[end_time]', '$result[group_id]', '$result[pages]', '$result[team_id]', '$result[create_team_id]', '$result[notlong]', '$result[send_email]', '$result[pay]', '$result[requests]', '$result[reworks]', '$result[works]', '$result[in_work]', '$result[minutes]', '$result[date]', '$result[premoderation]', '$result[balance]', '$_POST[datatype]', '$result[count]', '$result[cost]', '$_POST[all_price]', '$_POST[count]', '$_POST[orderType]' , '$_POST[name]' ) ";       
				if ($link->query($sql2) === TRUE) {
					//echo $result['project_id'] . " | " . $result['requests'] . "<br>";
				}
		}
		if($row2['datatype'] == 'dizlike' && $row2['project_id'] != '0') {
			
			$get = 'https://smmlaba.com/vkapi/v1/?username=smmfox.ua@gmail.com'.
			'&apikey=f5f79209c02a30b510e3f3e7c4cffdcfbe39ae1e'.
			'&action=check'.
			'&orderid='.$row2['project_id'].'';
			
			$response = file_get_contents($get);
			$response = json_decode($response, true);
			if(isset($response['message']['id'])) {
				//$result['project_id'] = $response['message']['id'];
				$response['project_id'] = $response['message']['id'];
				$response['url'] = $response['message']['url'];
				$response['title'] = 'TITLE';
				$response['task'] = 'TASK';
				$response['language'] = 'Русский'; //Русский
				
			///$response['message']['service'];
			//$response['message']['statusText'];
			//$response['message']['url'];
				//$result['requests'] = 
			$response['requests'] =  $response['message']['count'] - $response['message']['remain'];
			//echo $response;
			//echo " | " . $row2['project_id'] . " ";
			
				$sql2 = "UPDATE projects SET email='$_SESSION[email]', project_id='$response[project_id]', subjects='$response[subjects]', subjects_short='$response[subjects_short]', status='$response[status]', price='$response[price]', screenshot='$response[screenshot]', refuse_small_price='$result[refuse_small_price]', title='$response[title]', url='$response[url]', task='$response[task]', stop_words='$response[stop_words]', `limit`='$response[limit]', limit_url='$response[limit_url]', limit_url_day='$response[limit_url_day]', limit_hour='$response[limit_hour]', limit_author='$response[limit_author]', limit_author_day='$response[limit_author_day]', limit_author_group='$response[limit_author_group]', limit_author_group_day='$response[limit_author_group_day]', tarif_id='$response[tarif_id]', language='$response[language]', language_short='$response[language_short]', start_time='$response[start_time]', end_time='$response[end_time]', group_id='$response[group_id]', pages='$response[pages]', team_id='$response[team_id]', create_team_id='$response[create_team_id]', notlong='$response[notlong]', send_email='$response[send_email]', pay='$response[pay]', requests='$response[requests]', reworks='$response[reworks]', works='$response[works]', in_work='$response[in_work]', minutes='$response[minutes]', date='$response[date]', premoderation='$response[premoderation]' WHERE email = '".$_SESSION['email']."' AND project_id='".$row2['project_id']."' ";
			//	datatype, count, cost, ourprice, ourcount, orderType, name ) VALUES ('$_SESSION[email]', '$result[project_id]', '$result[subject]', '$result[subjects_short]', '$result[status]', '$result[price]', '$result[screenshot]', '$result[refuse_small_price]', '$result[title]', '$result[url]', '$result[task]', '$result[stop_words]', '$result[limit]', '$result[limit_url]', '$result[limit_url_day]', '$result[limit_hour]', '$result[limit_author]', '$result[limit_author_day]', '$result[limit_author_group]', '$result[limit_author_group_day]', '$result[tarif_id]', '$result[language]', '$result[language_short]', '$result[start_time]', '$result[end_time]', '$result[group_id]', '$result[pages]', '$result[team_id]', '$result[create_team_id]', '$result[notlong]', '$result[send_email]', '$result[pay]', '$result[requests]', '$result[reworks]', '$result[works]', '$result[in_work]', '$result[minutes]', '$result[date]', '$result[premoderation]', '$result[balance]', '$_POST[datatype]', '$result[count]', '$result[cost]', '$_POST[all_price]', '$_POST[count]', '$_POST[orderType]' , '$_POST[name]' ) ";       
				if ($link->query($sql2) === TRUE) {
					//echo $result['project_id'] . " | " . $result['requests'] . "<br>";
				}
			
				
			}
				
		}
		
	}
	
	
	while ( $row = $query->fetch_assoc() ) {
        
        
        $id = $row['project_id'] != '0' ? $row['project_id'] : "Ещё нет";
        $spanid = $row['project_id'] != '0' ? $row['project_id'] : 's'.$row['smmid']; 
        //$payid = $row['project_id'] != '0' ? "pay" : "smmpay";
            //echo $spanid;
        //$comment = $row['comment'] != null ?  $row['comment'] : 'None' ;
            $comment = $row['comment'] != null ?  'Комментарии' : '' ;
            $authorsDone = $row['requests'] + $row['works'] ;
            $editInput = $row['payed'] == 0 ? '<input type="number" value="'.$row['ourcount'].'">' : $row['ourcount'];
            if($row['payed'] == 0) {
                $payed = "не оплачено";
                $payedColor = "#E3281E";
            }
            else if ($row['onpause'] == 0) {
                $payed = "в работе";
                $payedColor = "#089809";
                if( $authorsDone == $row['ourcount']) {
                    $payed = "выполнено ";
                    $payedColor = "#089809";
                }
            }else if ($row['onpause'] == 1){
                $payed = "на паузе";
                $payedColor = "#e38b1e";
            }
                
            
            //$payed = $row['payed'] == '0' ? "не оплачено" : $row['onpause']==0 ? "На паузе" : "В работе";
        //  $payedColor = $row['payed'] == '0' ? "#E3281E" : $row['onpause']==0 ? "#089809" : "#e38b1e";
        $url = strlen($row['url']) > 55 ? substr($row['url'], 0, 55).'...' : $row['url']; 
            
            
            
        if($row['deleted'] != '1') { 
        print_r ('<div class="fox-block fox-block-orders-item animated fadeInDownes" >'.
                '<div class="detail-orders">'.
                '<a href="'.$row['url'].'" target="_blank"> <div class="order-identification" id="'.$spanid.'"><span class="order-identification-label">ID</span> '. $id .'</div> </a> '.
                        '<div class="order-times">'.
                            '<div class="icon time"></div>'.
                            '<div class="order-times-label"> <div class="order-times-date">'.substr($row['date'], 8, -9) . '.' . substr($row['date'], 5, -12) . '.' . substr($row['date'], 2, -15).'</div> <div class="order-times-time"> '.substr($row['date'], 10 ).' </div> </div>'.
                        '</div>'.
                '</div>'.
                '<div class="date-orders">'.
                    '<div class="date-orders-img">'.
                        '<a href="'.$row['url'].'" target="_blank"> <img src="assets/images/social/social_vector/' .$row['name']. '_logo_active.svg" title="Открыть ссылку в новом окне" alt="Открыть ссылку в новом окне"></img> </a> '.
                    '</div>'.
                    '<div class="date-orders-options">'.
                        '<div class="date-orders-options-item" id="'.$row['datatype'].'">'.
                            ''.$row['orderType'].': <span class="date-orders-options-one"  style="color: #089809; cursor:pointer;">'.$authorsDone.'</span> из <span class="date-orders-options-two"> '.$editInput.'</span>'.
                        '</div>'.
                        '<div class="date-orders-options-item">'.
                            'Геотаргетинг: <span class="date-orders-options-one">Все страны СНГ</span>'.
                        '</div>'.
                    '</div>'.
                '</div>'.

                '<div class="descriptions-orders">'.
                    '<div class="descriptions-orders-textarea">'.
                        ''.$row['ourtask'].
                        '<br> <a href="'.$row['url'].'" target="_blank"> '.$url.'</a> '.
                    '</div>'.
                '</div>'.

                '<div class="features-orders">'.
                    '<div class="features-orders-list">'.
                        '<div class="features-orders-item flag">'.
                        'Язык: <img src="assets/images/flag/'.base64_encode(($row['language'])).'.svg" alt="">'.
                        '</div>'.
                        '<div class="features-orders-item status">'.
                            'Статус: <span id="status'.$spanid.'" class="features-orders-list-status-label" style="color: '.$payedColor.';">'.$payed.'</span>'.
                        '</div>'.
                        '<div id="order-comments">'.
                            $comment.
                        '</div>'.
                    '</div>'.
                '</div>'.
                '<div class="buttons-orders">');
                
                    if ($authorsDone == $row['ourcount']) {
                        print_r('<div class="buttons-orders-price" style="color:gray"> - '.$row['ourprice'].' <span class="buttons-orders-curency">грн</span></div>'.
                        '<div class="buttons-orders-pay btn-green" id="pay">Повторить</div>'.
                        '<div class="buttons-orders-states">'.
                        '<span class="buttons-orders-states-remove" id="deleteFromCart" title="Удалить"></span>'
                        );
                    }
                    else if($row['payed'] == 0) {
                        print_r('<div class="buttons-orders-price"> '.$row['ourprice'].' <span class="buttons-orders-curency">грн</span></div>'.
                        '<div class="buttons-orders-pay btn-green" id="pay">Оплатить</div>');
                    }else if ($row['onpause'] == 0) {
                        print_r('<div id="stop" class="buttons-orders-pause">'.
                        '<span class="buttons-orders-states-pause" title="Приостановить выполнение заказа"></span></div>');
                    }else if ($row['onpause'] == 1) {
                        print_r('<div id="play" class="buttons-orders-play"><span class="buttons-orders-states-play" title="Продолжить выполнение заказа"></span></div>');
                    }
                if($row['payed'] == 1 && $authorsDone != $row['ourcount']) {
                    print_r('<div class="buttons-orders-states">'.
                        '<span class="buttons-orders-states-sync-alt" id="repeat" title="Повторить заказ"></span>'.
                        '<span class="buttons-orders-states-remove" id="deleteFromCart" title="Удалить"></span>');
                        if($row['title'] != 'TITLE') {
                            print_r('<span class="buttons-orders-states-vip" id="vip" title="Ускорить выполнение">VIP</span>');
                        }
                }
                else if ($row['payed'] == 0){
                    print_r('<div class="buttons-orders-states">'.
                        '<span class="buttons-orders-states-remove" id="deleteFromCart" title="Удалить"></span>');
                        if($row['title'] != 'TITLE') {
                            print_r('<span class="buttons-orders-states-vip" id="vip" title="Ускорить выполнение">VIP</span>');
                        }
                }
                    print_r('</div>'.
                '</div>'.
            '</div>');
            
    }
    }
    closeConnect($link);
    }
	
	function dbConnect() {
		$link = mysqli_connect("iota01.mysql.tools", "iota01_fox", "tOb790%@jD", "iota01_fox");

		if (!$link) {
			echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
			echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		return $link;
	}
	
	function closeConnect($link) {
		mysqli_close($link);
	}
	function post($url, $data) {		  
		$curlObj = curl_init();
		curl_setopt($curlObj, CURLOPT_URL, $url);
		curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlObj, CURLOPT_HEADER, 0);
		curl_setopt($curlObj, CURLOPT_POST, 1);
		curl_setopt($curlObj, CURLOPT_POSTFIELDS, $data);
		$curl = curl_exec($curlObj);
		curl_close($curlObj);
		return $curl;
	}					
					
					
	?>

    </div>
</div>
<div class="fox-block-orders-history-money" id="">
    <div class="container" id="history-money">
<!--     	<div class="fox-block-orders-history-money-title" >История операций</div>

		<div class="fox-block fox-block-history-money-item animated fadeInDownes">

			<div class="id-history-money">
				<a href="#">
					<div class="history-money-identification">
						<span class="history-money-identification-label">ID</span>
						1023711
					</div>
				</a>
			</div>

			<div class="time-history-money">
				<div class="time-history-times">
					<div class="icon clock"></div>
					<div class="time-history-times-label"> 
						<div class="time-history-times-date">18.04.19</div> 
						<div class="time-history-times-time">  14:22:25 </div> 
					</div>
				</div>
			</div>

			<div class="system-history-money">
				<div class="date-system-history-img">
					<a href="https://www.youtube.com/watch?v=ki3B8a-jLrE" target="_blank"> 
						<img src="assets/images/social/social_vector/youtube_logo_active.svg" title="Открыть ссылку в новом окне" alt="Открыть ссылку в новом окне">
					</a> 
				</div>
			</div>

			<div class="type-of-project-history-money">
				<div class="date-system-history-options">
					Комментарии: <span>100 </span>
				</div>
			</div>

			<div class="price-history-money">
				<div class="price-history-money-label"> -500 <span class="buttons-history-money-curency">грн</span></div>
			</div>

			<div class="status-history-money">
				<div class="features-history-money-item history-money-status">Статус: <span class="features-history-money-list-status-label">не оплачено</span></div>
			</div>
		</div>

		<div class="fox-block fox-block-history-money-item history-money animated fadeInDownes">
			<div class="id-history-money">
				<a href="#">
					<div class="history-money-identification">
						<span class="history-money-identification-label">ID</span>
						3135
					</div>
				</a>
			</div>

			<div class="time-history-money">
				<div class="time-history-times">
					<div class="icon clock"></div>
					<div class="time-history-times-label"> 
						<div class="time-history-times-date">18.04.19</div> 
						<div class="time-history-times-time">  14:22:25 </div> 
					</div>
				</div>
			</div>

			<div class="system-history-money">
				<div class="date-system-history-img">
					<a href="https://www.youtube.com/watch?v=ki3B8a-jLrE" target="_blank"> 
						<img style="width: 95px;" src="assets/images/payment/paypal.svg" title="Открыть ссылку в новом окне" alt="Открыть ссылку в новом окне">
					</a> 
				</div>
			</div>

			<div class="type-of-project-history-money">
				<div class="date-system-history-options">
					Пополнения баланса
				</div>
			</div>

			<div class="price-history-money">
				<div class="price-history-money-label"> +253 <span class="buttons-history-money-curency">грн</span></div>
			</div>

			<div class="status-history-money">
				<div class="features-history-money-item history-money-status">Статус: <span class="features-history-money-list-status-label">зачислено</span></div>
			</div>
		</div> -->
    </div>
</div>

<!-- #test -->
<div id="partial-data" ></div> 


   <!--  <div class="container">
        <div class="fox-block fox-block-social-description">
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi commodi tempore atque iure, voluptas corporis aliquid, harum, delectus amet, impedit architecto praesentium dicta repudiandae maxime distinctio non at doloribus. Voluptates.</div>
            <div>Quas recusandae, fuga eum quae vero, animi odio eveniet velit, quisquam saepe cumque omnis deserunt dolorem. Iusto unde nemo, qui at dolores distinctio ut aliquid reprehenderit quisquam repellat, odio nostrum!</div>
            <div>Qui a explicabo veritatis cumque eligendi commodi ipsam enim voluptatibus perferendis ducimus, natus! Velit dolorem illum error, minus distinctio vitae quas eius, optio aliquam molestiae nemo nulla placeat ut saepe.</div>
            <div>Officiis quo, explicabo in minima repellendus saepe dolores expedita porro veniam culpa obcaecati sapiente dolor perspiciatis temporibus iusto nihil quas cumque, cupiditate ad minus doloremque suscipit mollitia corporis, animi. Labore!</div>
            <div>Molestiae commodi, qui. Fugiat adipisci ea impedit, laudantium delectus, ab labore ipsa sapiente hic tempora quaerat eligendi debitis maxime asperiores quis repellendus placeat, a voluptas odit. Ea quidem aliquid voluptates?</div>
            <div>Ratione quas minus aspernatur assumenda nemo quibusdam at labore repudiandae, natus numquam fuga a repellendus molestiae maiores blanditiis vel error iure suscipit! Impedit, est nihil, nobis dignissimos culpa animi eligendi.</div>
            <div>Excepturi vel explicabo iusto fugit, beatae debitis. Commodi suscipit itaque, perferendis consequuntur ullam animi natus, velit saepe voluptatem minus illum dolore quibusdam molestiae. Sunt vitae animi libero, dolore facere aspernatur.</div>
            <div>Ea cupiditate error asperiores cum, assumenda illum veritatis explicabo ad delectus illo architecto a. Similique obcaecati veritatis perferendis, sed cupiditate ex dolor at dolores ad culpa repellat eaque, deleniti molestiae?</div>
            <div>Saepe debitis, atque voluptates delectus minima. Rerum veritatis culpa vero eligendi omnis ex tempore tenetur ipsum, autem quae sequi iusto odio, sed nam cumque, repellat maxime adipisci tempora, ullam mollitia.</div>
            <div>Asperiores doloremque tempore eveniet id expedita inventore ullam quia, sed voluptatibus, consectetur quo facilis aperiam odit perspiciatis porro excepturi veniam iure error ratione non odio impedit obcaecati. Facilis, beatae recusandae?</div>
        </div>
    </div> -->

    <!-- Use script -->
	
    
    <div class="fox-footer-box">
        <div class="fox-footer">
            <div class="container">
                <div class="fox-footer-enter-container">
                    <!-- <div class="fox-footer-enter-container-logo-copyright-contact-info"> -->
                        <div class="logo-copyright">
                            <a href="/"><img src="assets/images/payment/SMMFox.svg" alt="Продвижение в соц сетях SMM Fox"></a>
                                <div xmlns:v="http://rdf.data-vocabulary.org/#" typeof="v:Review-aggregate" class="google-snippet">
                                    <span property="v:itemreviewed">Рейтинг</span>
                                    <span rel="v:rating">
                                    <span typeof="v:Rating">
                                    <span property="v:average">9.7</span>
                                    из
                                    <span property="v:best">10</span>
                                    </span>
                                    </span>
                                    на основе
                                    <span property="v:votes">97</span> оценок
                                </div>
                            <div class="copyright"><span class="">г. Киев, ул. Крещатик, 13</span><br><br><span>&copy; 2007-2019</span></div>
                        </div>
                    
					<!-- Сниппет -->

						
                        <div class="contact-info">
                        	<ul class="contact-info-links">
	                        	 <div class="contact-info-title open-modal" data-modal="#modal2" style="cursor: pointer;"><a href="" onclick="event.preventDefault()">Публичная оферта</a></div>
                                <div class="overlay">
                                    <div class='modal offert' id='modal2'> 
                                        <span class="close-modal" data-modal="#modal2"></span>
                                    
                                    <h2>Публичная оферта</h2> 
                                    <p>Настоящая публичная оферта (далее по тексту – «Оферта») является официальным предложением Исполнителя заключить с любым физическим лицом, далее именуемым – «Пользователь», Договор возмездного оказания услуг на условиях, определенных в тексте Оферты. Акцепт настоящей Оферты осуществляется путём оформления Пользователем заказа на сервисе. Если Пользователь оформляет заказ на сервисе, то принимает и соглашается с условиями и правилами оферты.
                                    Акцепт Оферты означает ознакомление и полное, безусловное и безоговорочное согласие Пользователя с условиями и требованиями, определёнными в Оферте. С момента акцепта Оферты Договор на оказание информационных Услуг между Исполнителем и Пользователем признается заключенным и согласованным между ними, а его условия подлежат обязательному исполнению Сторонами.
                                    </p>

                                    <h2>1. Термины</h2> 
                                    <p>В целях настоящей Оферты нижеприведенные термины используются в следующем значении:
                                        1.1. Сервис – веб-сайт, принадлежащий Исполнителю, расположенный по адресу https://smmfox.com.ua
                                        1.2. Исполнитель - сервис, в лице владельца сайта.
                                        1.3. Пользователь – физическое лицо, самостоятельно пользующееся (воспользовавшееся) функциями и услугами, предоставляемыми сервисом https://smmfox.com.ua
                                        1.4. Заказ – заявка Пользователя на получение выполнение функции сервиса, определенных в тексте настоящей Оферты.
                                    </p>

                                    <h2>2. Предмет оферты</h2> 
                                    <p>2.1. В рамках настоящей Оферты Исполнитель по Заказу Пользователя обязуется оказывать Пользователю услуги по предоставлению в пользование Сайта для оформления заказов Пользователя а также для получения связанных с этой информацией дополнительных услуг, а Пользователь обязуется оплачивать данные Услуги в размере, на условиях и в порядке, установленных Офертой. Оплата заказов происходит со счета Пользователя. Выводить средства, по причинам не предусмотренных офертой запрещено.
                                    2.2. Перечень и стоимость Услуг Исполнителя публикуются на Сайте.
                                    </p>

                                    <h2>3. Расчеты между сторонами</h2> 
                                    <p>3.1. Оплата Услуг Исполнителя осуществляется безналичным способом путем перечисления денежных средств на расчетный счет Исполнителя. Денежная сумма, перечисленная на электронный счет Исполнителя, о чем Пользователь получает уведомление на свой почтовый ящик, который был им указан при оформлении заказа.
                                    3.2. Датой оплаты признается дата поступления средств на электронный счет Исполнителя.
                                    3.3. Использование денежных средств возможны исключительно на оплату услуг и функций сервиса. Вывод на электронный кошелек или любую другую платежную, перевод другому пользователю невозможен.
                                    </p>

                                    <h2>4. Факт оказания услуг</h2> 
                                    <p>4.1. Факт оказания Услуг по настоящей Оферте считается достижением заказанного количества подписчиков/просмотров/лайков/друзей/репостов/голосов на счетчике группы/видео/канала/фото/поста/голосования. Все результаты фиксируются исключительно по счетчикам в социальных сетях.
                                    4.2. В процессе выполнения заказа использование любых сторонних сервисов и способов привлечения людей запрещено, ввиду того, что большинство услуг при подсчете количества выполнений опираются на внутреннюю статистику группы/видео/страницы/канала/поста/голосования.
                                    </p>

                                    <h2>5. Ответственность сторон</h2> 
                                    <p>5.1. При неисполнении или ненадлежащем исполнении обязательств Стороны несут ответственность, предусмотренную действующим законодательством Украины.
                                        5.2. В случае не оплаты Пользователем Услуг Исполнитель вправе приостановить оказание Услуг Пользователю и ограничить доступ Пользователя к Сайту.
                                        5.3. Пользователь сервиса не имеет права принудительно, путем угроз, шантажа или вымогательства требовать сделать перевод или возврат средств которые были потрачены на функции сервиса.
                                        5.4. Стороны освобождаются от ответственности за нарушение условий настоящего Договора, если такое нарушение вызвано действием форс-мажорных обстоятельств (обстоятельств непреодолимой силы). Стороны договорились, что такими действиями, в частности являются действия органов государственной власти, местного самоуправления, пожар, наводнение, землетрясение, другие стихийные действия, отсутствие электроэнергии и/или сбои работы компьютерной сети, забастовки, гражданские волнения, беспорядки, незапланированное изменения алгоритмов администрацией социальных сетей. В случае возникновения форс-мажорных обстоятельств, установленные сроки по выполнению обязательств, указанные в Договоре, переносятся на срок, в течение которого действуют возникшие обстоятельства.
                                    </p>

                                    <h2>6. Разрешение споров</h2> 
                                    <p>6.1. Стороны установили претенциозный досудебный порядок урегулирования разногласий и споров. Срок для ответа на предъявленную претензию составляет 30 (тридцать)
                                        рабочих дней с момента ее получения Стороной.
                                        6.2. Только техническая поддержка, оператор сервиса имеет право вынести исключительно верное решение спора. Исполнитель или его представитель, оператор технической поддержки вправе отказать в решение проблемы или жалобы пользователя при наличии за ним нарушений.
                                    </p>

                                    <h2>7. Прочие условия</h2> 
                                    <p>7.1. Для исполнения своих обязательств по настоящей Оферте Исполнитель вправе привлекать третьих лиц.
                                        7.2. Настоящим Пользователь дает согласие на хранение, обработку и передачу, в том числе передачу третьей стороне, данных о своих заказах.
                                        7.3. Использование персональных данных и иной информации Пользователя, в том числе предоставленной при оформлении заказа на Сайте, по настоящей Оферте осуществляется исключительно в целях исполнения Исполнителем своих обязательств.
                                        7.4. Настоящим Пользователь дает согласие на получение от Исполнителя различных служебных и информационных сообщений посредством почты, телефонной (в том числе мобильной) связи, электронной почты и иных форм и каналов направления/получения информации.
                                        7.5. Сервис не несет ответственности за утерю или кражу логина и пароля от аккаунта в социальной сети Пользователя.
                                        7.6. Гарантии от любых защитных действий социальных сетей против массовой раскрутки не даются, средства не возвращаются, за исключением услуг с гарантией. Услуги с гарантией, за исключением тематик, указанных в пункте 7.7: а) все услуги по Youtube за исключением подписчиков, б) накрутка лайков, репостов, опросов Вконтакте, в) накрутка подписчиков в группу Вконтакте по тарифу Премиум (VIP), г) накрутка лайков на посты и фото в Фейсбук, д) все услуги по Твиттер, д) все услуги по Инстаграм, е) все услуги по Одноклассникам.
                                        7.7. Сервис не дает гарантий на услуги применяемые к следующим тематикам: а) часы б) прогнозы на спорт, пари, договорные матчи в) спортивное питание, чаи и кофе г) эротика д) Наращивание ногтей, волос, перманентный макияж, макияж е) фотографы и группы связанные с фотографией ж) группы связанные с организацией и проведением свадеб з) сетевой маркетинг, в том числе Орифлейм, Амвей и т.д и) различные пирамиды, хайп-проекты, партнерские программы к) гадания и гороскопы л) раскрутка, реклама, дизайн групп, сео, компьютерная помощь.
                                        7.8. Сервис снимает с себя все гарантийные обязательства, если Пользователь использовал до или после обращения к Исполнителю для накрутки сторонние сервисы, сайты, прочих исполнителей, а так же если использовал разные тарифы накрутки в одну группу/страницу.
                                    </p>

                                    <h2>8. Действие публичной оферты</h2> 
                                    <p>8.1. Настоящая Оферта вступает в силу с момента ее размещения на Сайте.
                                        8.2. Настоящая Оферта размещена на неопределенный срок и утрачивает свою силу при ее аннулировании Исполнителем.
                                        8.3. В случае внесения изменений в Оферту, такие изменения вступают в силу с момента опубликования новой редакции Оферты на Сайте, если иной срок вступления изменений в силу не определен дополнительно при их публикации. Исполнитель вправе в одностороннем порядке осуществлять внесение изменений в текст Оферты.
                                        8.4. Пользователь обязуется самостоятельно осуществлять контроль за изменениями в положениях настоящей Оферты и нести ответственность за последствия, связанные с несоблюдением данной обязанности.
                                        8.5. При несогласии Пользователя с соответствующими изменениями Пользователь обязан прекратить использование Сайта и отказаться от Услуг Исполнителя. В противном случае продолжение использования Пользователем Сайта означает, что Пользователь согласен с условиями Оферты в новой редакции.
                                    </p>

                                      	<h2>Политика конфиденциальности</h2> 

                                    	<p>Команда SMM Fox беспокоится об обеспечении безопасности данных своих клиентов. Именно поэтому мы составили настоящую Политику конфиденциальности, чтобы вы не беспокоились о том, что происходит с вашими персональными данными, которые вы предоставили нам для регистрации.</p>

										<p>Регистрируясь на веб-сайте, вы предоставляете SMM Fox согласие на обработку всех введенных для регистрации данных с целью надлежащего предоставления SMM Fox услуг регистрации доменного имени или хостинга, как это предусмотрено Публичной офертой. Надлежащее предоставление услуг SMM Fox предусматривает передачу вашей информации подрядчикам SMM Fox, административным лицам и органам, осуществляющим техническую организацию, администрирование и поддержку адресного пространства сети Интернет и сохранения информации на серверах, подключенных к сети Интернет, в том числе в рамках процедур и требований, установленных ICANN.</p>

										<p>Регистрируясь на веб-сайте, вы также подтверждаете, что ознакомились с перечнем своих прав как субъекта данных согласно статье 8 Закона Украины «О защите персональных данных». Этот перечень доступен по ссылке: http://zakon2.rada.gov.ua/laws/show/2297-17.</p><br>

										1. СБОР ЛИЧНОЙ ИНФОРМАЦИИ
										<p>
										1.1. Во время регистрации на сайте мы просим вас сообщить необходимую личную информацию в объеме, который является необходимым для предоставления услуг. Мы оставляем за собой право потребовать предоставить дополнительную личную информацию в случае необходимости.
										</p>	
										1.2. Файлы cookie - когда вы заходите на наш сайт, мы отправляем один или несколько файлов cookie на ваш компьютер или другое устройство. Файлы cookie используются для того, чтобы повышать качество предоставляемых услуг: сохранять настройки пользователя.
										<p>
										1.3. Информация о посещении - при доступе на сайт наши серверы автоматически записывают определенную информацию. Эти журналы сервера могут содержать такую информацию, как веб-запрос, IP-адрес, тип и язык браузера, дату и время запроса.
										</p>
										1.4. Продажа услуг на партнерских сайтах - некоторые услуги, которые мы предлагаем, связаны с другими сайтами. Личная информация, которую вы предоставляете таким сайтам, может быть передана нам для предоставления этих услуг. Мы обрабатываем информацию такого рода в соответствии с настоящей политикой конфиденциальности.
										<p>
										1.5. SMM Fox может обрабатывать личную информацию на серверах в Украине и в других странах. В некоторых случаях личная информация пользователей обрабатывается за пределами страны пользователя.
										</p>
										2. ПРЕДОСТАВЛЕНИЕ ДОСТУПА К ИНФОРМАЦИИ
										<p>
										2.1. Мы предоставляем доступ к вашей личной информации другим лицам только при следующих ограниченных обстоятельствах:
										</p>
										2.1.1. У нас есть на это ваше разрешение. Для передачи любой конфиденциальной информации нам требуется ваше явное согласие.
										<p>
										2.1.3. У нас есть достаточные основания полагать, что доступ, использование, сохранение или раскрытие такой информации необходимо для:
										</p>
										2.1.3.1. соблюдения законодательства Украины, в том числе предоставления информации по требованию физических и юридических лиц, учреждений, организаций любой формы собственности или государственных органов, которые имеют право на получение такой информации согласно законодательству Украины;
										<p>
										2.1.3.2. расследования потенциальных нарушений Публичной оферты, что предполагает предоставление информации о вас в ответ на надлежащим образом оформленный адвокатский запрос с информацией о нарушениях;
										</p>
										2.1.3.3. выявления и предотвращения мошеннических действий, а также решения проблем безопасности и устранения технических неисправностей;
										<p>
										2.1.3.4. защиты от непосредственной угрозы правам, имуществу или безопасности компании SMM Fox, ее пользователей или общественности, в рамках законодательства Украины.
										</p>
										3. ЗАЩИТА ИНФОРМАЦИИ
										<p>
										3.1. Мы принимаем все необходимые меры для защиты данных от неавторизованного доступа, изменения, раскрытия или уничтожения. К этим мерам относятся, в частности, внутренняя проверка процессов сбора, хранения и обработки данных и мер безопасности, включая соответствующее шифрование и меры по обеспечению физической безопасности данных для предотвращения неавторизованного доступа.
										</p>
										4. ДОСТУП К ЛИЧНОЙ ИНФОРМАЦИИ И ЕЕ ОБНОВЛЕНИЕ
										<p>
										4.1. Мы делаем все от нас зависящее, чтобы предоставить вам доступ к вашим личным данным и либо исправить их, если они неверны, либо удалить по вашему запросу, если только их хранение не требуется законом или не обусловлено законными деловыми целями. Перед обработкой запросов мы просим пользователей подтвердить свою личность и информацию, которую они хотят получить, исправить или удалить.
										</p>
										5. ИЗМЕНЕНИЕ НАСТОЯЩЕЙ ПОЛИТИКИ КОНФИДЕНЦИАЛЬНОСТИ
										<p>
										5.1. Настоящая политика конфиденциальности может время от времени меняться. Изменения, вносимые в политику конфиденциальности, будут опубликованы на этой странице.	
										</p>					

                                    </div>
                                </div>
		                       	<a href="#"><li>Личный кабинет</li></a>
		                        <a class="open-modal balance" data-modal="#userBalance"><li>Пополнение баланса</li></a>
	                        </ul>
                            <ul class="contact-info-links">
	<!-- 							<a class="open-modal" data-modal="#about-us" href="#"><li>О нас</li></a>  -->
								                            <!-- begin WebMoney Transfer : attestation label -->
								<li class="payment-certificates-footer">
									<a onclick="event.preventDefault()" href="#" id="prival-footer" data-modal="#userBalance" target="_blank" class="balance">
										<img src="assets/images/payment/privat.svg" border="0"/>
									</a>
									<a onclick="event.preventDefault()" href="#" id="mastercard-footer" data-modal="#userBalance" target="_blank" class="balance">
										<img src="assets/images/payment/mastercard.svg" border="0"/>
									</a>
									<a onclick="event.preventDefault()" href="#" id="visa-footer" data-modal="#userBalance" target="_blank" class="balance">
										<img style="height: 15px;" src="assets/images/payment/visa.svg" border="0"/>
									</a>
									<a onclick="event.preventDefault()" href="#" id="qiwi-footer" data-modal="#userBalance" target="_blank" class="balance">
										<img src="assets/images/payment/qiwi.svg" border="0"/>
									</a>
									<a href="http://passport.webmoney.ru/asp/certview.asp?wmid=285110379912" target="_blank">
										<img src="assets/images/payment/webmoney.svg" border="0"/>
									</a>
								</li>
 
							<!-- end WebMoney Transfer : attestation label -->
                            </ul>
                        </div>
                    <!-- </div> -->
                    <div class="contacts-links">
                        <div class="contacts-links-social-icon-up">
							<a class="facebook-link" title="SMM Fox в Facebook" target="_blank" href="https://www.facebook.com/smmfox.ua"><div></div></a>
							<a class="instagram-link" title="SMM Fox в Instagram" target="_blank" href="https://www.instagram.com/smmfox.ua"><div></div></a>
                        </div>
                        <div class="contacts-links-social-icon">
                            <a class="viber-link" title="Написать в Viber" target="_blank" href="viber://chat?number=+380937771331"><div></div></a>
                            <a class="telegram-link" title="Написать в Telegram" target="_blank" href="https://t.me/smmfoxua"><div></div></a>
                            <a class="whatsapp-link" title="Написать в WhatsApp" target="_blank" href="whatsapp://send?phone=+380937771331"><div></div></a>
                        </div>
                        <a href="tel:+380937771331"><span class="contacts-links-number">+38 (093) 777-13-31</span></a>
                        <a href="mailto:info@smmfox.com.ua"><span style="color: #3BAFDA;" class="contacts-links-email">info@smmfox.com.ua</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135749155-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-135749155-1');
        </script>
	
    <script type="text/javascript" defer src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" defer src="assets/js/jquery.cookie.js"></script>
    <script type="text/javascript" defer src="assets/js/script.js"></script>

	<script type="text/javascript" defer src="assets/js/open_add_field.js"></script>
    <script type="text/javascript" defer src="assets/js/modal_window.js"></script>
	<script type="text/javascript" defer src="assets/js/post.js"></script>
    <script type="text/javascript" defer src="assets/js/responsive.js"></script>
    <script type="text/javascript" defer src="assets/js/valid.js"></script>
    <script type="text/javascript" defer src="assets/js/valid_form_enter.js"></script>
    
    <script type="text/javascript" defer src="assets/js/preloader.js"></script>
    <script type="text/javascript" defer src="assets/js/flipclock.js"></script>

     <script
     src="https://www.paypal.com/sdk/js?client-id=AQ_HxrQl2iFiMfZgJFfqSnUdpU2HopEct07-40iYjwqkMtpSAPb6sBAtSpuBM-t30uorPiPQsYST_eEz&currency=RUB">
  </script>

  <!-- trafic --->
  <a href="//scroogefrog.com/en/6457"><img src="//stat.clickfrog.ru/img/clfg_ref/icon_0.png" alt="click fraud detection"></a><div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='1007ae83a97c84cc0b3abdcd302169f5';</script>
  
  
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
</body>
</html>