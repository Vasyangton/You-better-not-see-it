<?php
session_start();
if (!$_SESSION['user']) {
  header('Location: signin.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Морской бой</title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/emojionearea.min.css">
    <link rel="stylesheet" href="css/style.css?version=1234567">
    <link rel="stylesheet" href="seabattle/css/style.css">


</head>

<body>
    <div class="page__background"></div>
    <section class="intro-section plug-section main-section">
        <div class="intro__bg pc" style="background-image: url('img/plug__bg.jpg?v=123')"></div>
        <img class="intro__bg tablet" src="img/plug__bg.jpg?v=123" alt="">
        <img class="intro__bg xs" src="img/intro__bg-xs.jpg?v=123" alt="">
        <div class="intro__left" style="background-image: url('img/sepia.png')"></div>
        <div class="container">
            <div class="main__header">
                
            </div>

            <!--   <p> $_SESSION['user']['name'] ?>  </p> Наименование пользователя -->

            <h1 class="intro__title">Морской <br>бой</h1>
            <div class="intro__subtitle"><?= $_SESSION['user']['name'] ?>, приветствуем вас
                <br>на великой битве!</div>
        </div>
    </section>
    <section class="about-section">
        <div class="container">
            <img class="about__img" src="img/about__img.png" alt="">
            <div class="about__text">
                <p>Соединение двух начал – мужского и&nbsp;женского, невероятный азарт, возможность проверить свою смекалку, интуицию и лидерские качества – все это неотъемлемая составляющая нашего мероприятия!
                    <br>
                    <br>Объединить торжество настоящего мужского праздника, провожающего суровую зиму, и самого нежного женского дня, открывающего поющую весну, в одно общее сражение – что же может быть лучше? Каждый мужчина сможет почувствовать себя капитаном
                    пиратского корабля, настоящим адмиралом, а&nbsp;прекрасные девушки – музами, вдохновляющими на&nbsp;победы!
                    <br>
                    <br>Попутного ветра, <b>«ИНТЕКО»!</b>
                </p>
            </div>
        </div>
    </section>
    <section class="timer-section">
        <div class="container">
            <div class="thin-title">до начала игры</div>
            <div class="timer__box">
                <div class="timer__column">
                    <div class="timer__title" id="hours">4</div>
                    <div class="timer__subtitle">часа</div>
                </div>
                <div class="timer__column item__dots">
                    <div class="timer__title">:</div>
                </div>
                <div class="timer__column">
                    <div class="timer__title" id="minutes">00</div>
                    <div class="timer__subtitle">минут</div>
                </div>
                <div class="timer__column item__dots">
                    <div class="timer__title">:</div>
                </div>
                <div class="timer__column">
                    <div class="timer__title" id="seconds">00</div>
                    <div class="timer__subtitle">секунд</div>
                </div>
            </div>
        </div>
    </section>
    <section class="leader-section">
        <div class="container">
            <div class="thin-title">Успейте за это время выбрать капитана!</div>
            <div class="leader__title">Поздравляем, вы капитан!</div>
            <form>
                <div class="leader__box">
                    <label class="label">
                        
                        <div class="leader__item">
                            <div class="title"><?= $_SESSION['user']['name'] ?></div>
                            <div class="button" style="background: #4A5FA6; color: #ffffff;"><span class="active">Капитан</span>
                            </div>
                        </div>
                    </label>
                    <label class="label">
                        
                        <div class="leader__item">
                            <div class="title">Булкина Анна</div>
                            <div class="button"> <span class="passive">Матрос</span>
                            </div>
                        </div>
                    </label>
                    <label class="label">
                        
                        <div class="leader__item">
                            <div class="title">Бакина Светлана</div>
                            <div class="button"> <span class="passive">Матрос</span>
                            </div>
                        </div>
                    </label>
                    <label class="label">
                        
                        <div class="leader__item">
                            <div class="title">Сидоров Валерий</div>
                            <div class="button"> <span class="passive">Матрос</span>
                            </div>
                        </div>
                    </label>
                    <label class="label">
                        
                        <div class="leader__item">
                            <div class="title">Александров Олег</div>
                            <div class="button"> <span class="passive">Матрос</span>
                            </div>
                        </div>
                    </label>
                    <label class="label">
                        
                        <div class="leader__item">
                            <div class="title">Бушина Оксана</div>
                            <div class="button"> <span class="passive">Матрос</span>
                            </div>
                        </div>
                    </label>
                </div>

            </form>
        </div>
    </section>
    <!-- -->
    <section class="trigger-section">
        <div class="container">
            <img class="trigger__bg" src="img/trigger__bg.png" alt="">
            <div class="trigger__box">
                <div class="trigger__title">Матрос, прояви
                    <br class="hidden-lg">свое внимание!</div>
                <div class="trigger__subtitle">Ты будешь играть ровно 3&nbsp;дня. За это время ты проведешь только <b>ОДИН</b> бой, поэтому необходимо выкладываться на максимум с&nbsp;самого начала!
                    <br>
                    <br>Соперник – искусственный интеллект, а&nbsp;это значит, что битва предстоит легендарная! Сразу скажи «нет» слабости и&nbsp;страхам, прояви свои лучшие качества, и&nbsp;тогда победа будет на твоей стороне!</div>
            </div>
        </div>
    </section>
    <!-- -->
    <section class="regulations-section">
        <div class="container">
            <div class="regulations__title">
                <h2 class="t-title">Правила игры</h2>
                <div class="arrow">
                    <img src="img/icons/up-arrow.png" alt="">
                </div>
            </div>
            <div class="regulations__box">
                <div class="regulations__left regulations__column">
                    <div class="regulations__date">1 марта</div>
                    <div class="regulations__time">10:00-18:00</div>
                    <div class="regulations__text">Первый день посвящен организационным мероприятиям, ведь флот – это не место для беспорядка и хаоса, особенно
                        <br>если дело касается баталий
                        <br>на интернет-просторах!</div>
                    <div class="regulations__text"><b>С 10:00 до 14:00</b> каждая команда должна выбрать своего КАПИТАНА в блоке «Моя команда». Только Капитан может определять итоговое расположение кораблей, а&nbsp;также совершать ход.</div>
                    <div class="regulations__text">На сайте есть специальный чат для удобной коммуникации команды. Воспользуйся им сразу и&nbsp;убеди всех, что именно ТЫ
                        <br>достоин стать Капитаном!</div>
                    <div class="regulations__text"><b>С 14:00 до 18:00</b> необходимо расставить весь флот. Выставляя корабли на поле, помни, что они
                        <br>не могут соприкасаться друг
                        <br>с другом даже углом корабля.</div>
                    <div class="regulations__text">Внутри квадрата необходимо вместить весь флот:
                        <br>- четыре однопалубных судна
                        <br>- три двухпалубных эсминца
                        <br>- два трехпалубных крейсера
                        <br>- один четырехпалубный линкор</div>
                    <div class="regulations__text">Как корабль назовешь, так он и поплывет! У вашей команды есть возможность изменить название в&nbsp;разделе «Моя команда».</div>
                    <div class="regulations__text">В этот же день тебе необходимо проголосовать за специальный приз, который получит команда победителей.</div>
                    <div class="regulations__text">Если же указанные задачи не были выполнены вовремя, компьютер в&nbsp;автоматическом режиме сделает выбор за вас.</div>
                </div>
                <div class="regulations__right regulations__column">
                    <div class="regulations__date">2 марта и 3 марта</div>
                    <div class="regulations__time">10:00-22:00</div>
                    <div class="regulations__text">Да начнется битва!</div>
                    <div class="regulations__text">Задача команды сводится к определению, в каких местах располагается флот соперника. Не забудь, что искусственный интеллект хитер и&nbsp;непредсказуем, поэтому корабли могут находиться в самых неожиданных местах.</div>
                    <div class="regulations__text"><b>Время слотов для активации функции хода: 10:00, 12:00, 14:00, 16:00, 18:00, 20:00.</b>
                    </div>
                    <div class="regulations__text">Каждый временной период дает команде возможность осуществлять «выстрелы», при этом промахнуться можно лишь <b>трижды.</b>
                        <br>Советуется вся команда, но ход всегда за Капитаном. Если команда не успевает в&nbsp;установленное время воспользоваться своими ходами, компьютер совершит необходимое действие за вас.</div>
                    <div class="regulations__text">Специальный приз заберет команда, потопившая большее количество кораблей за меньшее время. Действуйте слаженно, словно единый механизм, тогда удача будет на вашей стороне!</div>
                    <div class="regulations__text">В случае возникновения вопросов, воспользуйтесь закрепленным виджетом в правом нижнем углу страницы</div>
                    <div class="regulations__text"><b>7 футов под килем!</b>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -->
    <section class="chat-section">
        <div class="container">
            <img class="chat__img" src="img/chat__bg.png" alt="">
            <h2 class="t-title">Моя команда</h2>
            <div class="chat__box" >
              <!--   <div class="chat__right"  >
                    <div class="chat__scroll-box" >
                        <div class="chat__messages" id="container">

                        </div>
                    </div>
                    <form class="chat__control">
                        <textarea class="control__input" name="message_input" type="text" required="" placeholder="Напишите сообщение..."></textarea>
                        <button class="control__button" type="submit" name="send">
                            <img src="img/icons/control@2x.png" alt="">
                        </button>
                    </form>
                </div> -->
                <div class="chat__right">
                  <?php include('chat-plugin.php'); ?>
                </div>

            </div>
        </div>

    </section>
    <h2 class="non-play"> Игра не доступна на мобильном телефоне</h2>

      <?php include('seabattle/play-boy.php'); ?>


    <section class="ratings-section">
        <div class="container">
            <h2 class="t-title">Рейтинг команд</h2>
            <div class="ratings__arrows">
                <div class="ratings__arrow left hide">
                    <img src="img/icons/left-arrow.png" alt="">
                </div>
                <div class="ratings__arrow right">
                    <img src="img/icons/left-arrow.png" alt="">
                </div>
            </div>
            <div class="ratings__slider">
                <!-- Список-->
                <div class="ratings__space border-right">
                    <div class="ratings__list">
                        <div class="ratings__item ratings__header">
                            <div class="number column">№</div>
                            <div class="team column">Команда</div>
                            <div class="time column">Время на ходы</div>
                            <div class="hit column">Попаданий</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">1</div>
                            <div class="team column">Команда №1</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">2</div>
                            <div class="team column">Команда №2</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">3</div>
                            <div class="team column">Команда №3</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">4</div>
                            <div class="team column">Команда №4</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">5</div>
                            <div class="team column">Команда №5</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">6</div>
                            <div class="team column">Команда №6</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">7</div>
                            <div class="team column">Команда №7</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">8</div>
                            <div class="team column">Команда №8</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">9</div>
                            <div class="team column">Команда №9</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">10</div>
                            <div class="team column">Команда №10</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                    </div>
                </div>
                <!-- Список-->
                <div class="ratings__space border-left">
                    <div class="ratings__list">
                        <div class="ratings__item ratings__header">
                            <div class="number column">№</div>
                            <div class="team column">Команда</div>
                            <div class="time column">Время на ходы</div>
                            <div class="hit column">Попаданий</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">1</div>
                            <div class="team column">Команда №1</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">2</div>
                            <div class="team column">Команда №2</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">3</div>
                            <div class="team column">Команда №3</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">4</div>
                            <div class="team column">Команда №4</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">5</div>
                            <div class="team column">Команда №5</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">6</div>
                            <div class="team column">Команда №6</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">7</div>
                            <div class="team column">Команда №7</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">8</div>
                            <div class="team column">Команда №8</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">9</div>
                            <div class="team column">Команда №9</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">10</div>
                            <div class="team column">Команда №10</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                    </div>
                </div>
                <!-- Список-->
                <div class="ratings__space border-right">
                    <div class="ratings__list">
                        <div class="ratings__item ratings__header">
                            <div class="number column">№</div>
                            <div class="team column">Команда</div>
                            <div class="time column">Время на ходы</div>
                            <div class="hit column">Попаданий</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">1</div>
                            <div class="team column">Команда №1</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">2</div>
                            <div class="team column">Команда №2</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">3</div>
                            <div class="team column">Команда №3</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">4</div>
                            <div class="team column">Команда №4</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">5</div>
                            <div class="team column">Команда №5</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">6</div>
                            <div class="team column">Команда №6</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">7</div>
                            <div class="team column">Команда №7</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">8</div>
                            <div class="team column">Команда №8</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">9</div>
                            <div class="team column">Команда №9</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">10</div>
                            <div class="team column">Команда №10</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                    </div>
                </div>
                <!-- Список-->
                <div class="ratings__space border-left">
                    <div class="ratings__list">
                        <div class="ratings__item ratings__header">
                            <div class="number column">№</div>
                            <div class="team column">Команда</div>
                            <div class="time column">Время на ходы</div>
                            <div class="hit column">Попаданий</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">1</div>
                            <div class="team column">Команда №1</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">2</div>
                            <div class="team column">Команда №2</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">3</div>
                            <div class="team column">Команда №3</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">4</div>
                            <div class="team column">Команда №4</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">5</div>
                            <div class="team column">Команда №5</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">6</div>
                            <div class="team column">Команда №6</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">7</div>
                            <div class="team column">Команда №7</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">8</div>
                            <div class="team column">Команда №8</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">9</div>
                            <div class="team column">Команда №9</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">10</div>
                            <div class="team column">Команда №10</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                    </div>
                </div>
                <!-- Список-->
                <div class="ratings__space border-left">
                    <div class="ratings__list">
                        <div class="ratings__item ratings__header">
                            <div class="number column">№</div>
                            <div class="team column">Команда</div>
                            <div class="time column">Время на ходы</div>
                            <div class="hit column">Попаданий</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">1</div>
                            <div class="team column">Команда №1</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">2</div>
                            <div class="team column">Команда №2</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">3</div>
                            <div class="team column">Команда №3</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">4</div>
                            <div class="team column">Команда №4</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">5</div>
                            <div class="team column">Команда №5</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">6</div>
                            <div class="team column">Команда №6</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">7</div>
                            <div class="team column">Команда №7</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">8</div>
                            <div class="team column">Команда №8</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">9</div>
                            <div class="team column">Команда №9</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                        <div class="ratings__item">
                            <div class="number column">10</div>
                            <div class="team column">Команда №10</div>
                            <div class="time column">03:26:43</div>
                            <div class="hit column">12</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -->
    <section class="prize-section">
        <div class="container">
            <img class="prize__img" src="img/prize__img.png" alt="">
            <img class="prize__bg" src="img/prize__bg.png" alt="">
            <h2 class="t-title">Спецприз</h2>
            <div class="t-subtitle">Картинг или стрелковый клуб? Выбор за тобой! Каждый голос может стать решающим. От&nbsp;голосования, которое продлится лишь один день, зависит, где ты будешь праздновать свой оглушительный успех: не дай другим решить такой важный вопрос за
                тебя!</div>
            <div class="prize__box">
                <div class="prize">
                    <div class="title">Картинг</div>
                    <div class="img" style="background-image: url('img/prize/img1.jpg')"></div>
                    <a href="vector/golos.php?topka=1"><div class="t-btn php-vote">Проголосовать</div></a>
                </div>
                <div class="prize">
                    <div class="title">Стрелковый клуб</div>
                    <div class="img" style="background-image: url('img/prize/img2.jpg')"></div>
                    <a href="vector/golos.php?knopka=1"><div class="t-btn php-vote">Проголосовать</div></a>

                </div>
            </div>
        </div>
    </section>
    <!-- -->
    <section class="gift-section">
        <div class="container">
            <h2 class="t-title">Подарки</h2>
            <div class="t-subtitle">Каждый игрок, независимо от результата, получит в назначенный день
                <br>подарок в виде свитшота с&nbsp;принтом из лимитированной коллекции
                <br>Public Art.
                <br class="important">
                <br class="important"><b>«Звезда», «Грифон», «Гномон»</b> – одна из этих скульптур украсит
                <br>твой корпоративный презент и будет напоминать тебе о прошедшей битве!</div>
            <div class="gift__box">
                <div class="gift">
                    <div class="img" style="background-image: url('img/gift/img1.jpg')"></div>
                </div>
                <div class="gift">
                    <div class="img" style="background-image: url('img/gift/img2.png')"></div>
                </div>
                <div class="gift">
                    <div class="img" style="background-image: url('img/gift/img3.jpg')"></div>
                </div>
            </div>
            <div class="gift__description">Подробная информация, которая касается получения подарков,
                <br>будет представлена по окончании игры.</div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.4/moment-timezone-with-data.js"></script>
   
    <script src="https://code-sb1.jivosite.com/widget/ERoUgbDEVN" async></script>
    <script src="js/main.js"></script>
    <script src="js/delete-btn.js"></script>
    <script src="seabattle/js/function.js"></script>




</body>
</html>
