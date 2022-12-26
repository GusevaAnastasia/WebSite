<script src="https://kit.fontawesome.com/190c15c4db.js" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
   <head>
     <meta charset = "utf-8">
          <title>SportLife - сайт о спорте</title>
     <link rel = "stylesheet" href = "css/main.css" type="text/css" charset="utf-8">
     <link rel = "stylesheet" href = "css/main_page.css" type="text/css" charset="utf-8">
     <meta name="description" content = "Информационно - развлекательный портал для любителей спорта">
     <meta name ="viewport" content = "width=device-width, initial-scale=1">
     <link href="img/log.ico" rel="shortcut icon" type="image/x-icon">
     <link rel="stylesheet" href="css/fontawesome.min.css">
     <title>SportLife - сайт о спорте</title>
   </head>

   <body>
    <div id="wrapper">
      <div id="content">
         <header>
    <div id="logo">
       <a href = "/index.php" title="На главную">
       <img src="img/logo.png" title="SportLife.com" alt="SportLife.com">
       <span>SportLife</span>
     </a>
    </div>

    <div id="about">
    <a href="feedback.php" title="Написать нам письмо">Обратная связь</a>
    </div>

    <div id="reg_auth">
      <a href="ent_form.php" title="Войти в кабинет пользователя"><div class="btn">Войти</div>
      </a>

      <a href="reg_form.php" title="Зарегестрироваться на сайте"><div class="btn">Регистрация</div>
      </a>
    </div>
    </header>
    <nav>
      <a href="hockey.php">Хоккей</a>
      <a href="football.php">Футбол</a>
      <a href="figureskating.php">Фигурное катание</a>
      <a href="skiing.php">Лыжи</a>
      <a href="biathlon.php">Биатлон</a>
  
      <div id="search">
        <span>Поиск <i class="fa-solid fa-magnifying-glass"></i></span>
      </div>
    </nav>
    <div id="main">
       <div id="news">
        <h2 class="heading">Новости</h2>
        <div style="clear:both"><br></div>
        
        <a href="hc_art_main.php">
        <div class="article"><img src="img/article1.jpg">
          <span>Александр Овечкин превзошел Горди Хоу по голам в НХЛ</span></div></a>

        <a href="ft_art_main.php">
        <div class="article"><img src="https://img.sportsdaily.ru/iblock/a90/a90f35c298f1965c38ed456002ca2b64/d425e7b2105e7f9ca505bb2f1e93f111.jpg">
          <span>Отвечавший за VAR в финале ЧМ-2022 оценил работу главного арбитра</span></div></a>

        <a href="fs_art_main.php">
        <div class="article"><img src="https://sigma-z.ru/wp-content/uploads/2022/12/kanadskaya-figuristka-otreagirovala-na-vystuplenie-tuktamyshevoj-na-chempionate-rossii.jpg">
          <span>Интервью Елизаветы Туктамышевой после ЧР-2022</span></div></a>

        <a href="b_art_main.php">
        <div class="article"><img src="https://faktologia.com/wp-content/uploads/2022/12/bmnvk7ge2h4pjr9q5pluiwntba2646ic.png">
          <span>Белорусская биатлонистка Алимбекова стала победителем масс-старта на этапе Кубка Содружества в Рязани</span></div></a>
        
        
        <a href="" title="Посмотреть больше новостей">
           <div class="btn">Посмотреть больше</div></a>
      </div>
    </div>
    <aside>
        <div id="match">
           <h2 class="heading">Обзоры матчей</h2>  
        <div style="clear:both"><br></div>
        
        <a href="https://youtu.be/V4Um-IpwzS4">
        <div class="review"><img src="https://img.championat.com/s/1350x900/news/big/s/l/roman-rotenberg-stal-trenerom-ska_16011153221338116227.jpg" alt="Test title="test>
          <span>После матча СКА – Спартак: Гришин, Ротенберг, Солянников, Алтыбармакян</span>
        </div></a>

        <a href="https://youtu.be/mzPB6dvQCs8">
        <div class="review"><img src="https://s-cdn.sportbox.ru/images/styles/upload/fp_fotos/a1/fe/ea507573ba1b7bfea6bbd715e4aa4c1063a82c26a8a8f614620295.jpg" alt="Test title="test>
          <span>Биатлон. PARI Кубок Содружества. Рязань. Масс-старт. Женщины</span>
        </div></a> 

        <a href="https://youtu.be/qY2D-UQowb8">
        <div class="review"><img src="https://storage.myseldon.com/news-pict-26/26F9EE0B3D24B821DC66DF357224C2D8" alt="Test title="test>
          <span>Произвольная программа. Женщины. Чемпионат России-2023</span>
        </div></a>

        <a href="" title="Посмотреть все видео">
          <div class="btn">Посмотреть все видео
        </div>
        </a>
        </div> 
    </aside>
  </div>

  <footer>
    <div id="site_name">
      <span>SportLife</span> - актуальное о спорте!
    </div>
    <div id="clear"></div>
    <div id="footer_menu">
      <a href="" title="Узнать о рекламе">Реклама</a>
      <a href="feedback.php" title="Написать письмо">Обратная связь</a>
    </div>
    <div id="rights">
      <a href="">Все права защищены &copy; <?=date('Y')?></a>
    </div>

    <div id="social">
      <a href="" title="Группа в ВК"><i class="fa-brands fa-vk"></i></a>
      <a href="" title="Мы в Twitter"><i class="fa-brands fa-twitter"></i></a>
      <a href="" title="Наш YouTube"><i class="fa-brands fa-youtube"></i></a>
    </div>
    </footer>
    </div>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>
        $(document).scroll(function(){
          if($(document).scrollTop() > $('header').height() + 10)
             $('nav').addClass('fixed');
          else 
             $('nav').removeClass('fixed');


        });
    </script>

    }
    </body>
</html>

