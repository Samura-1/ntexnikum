<section id="main-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7 welcome">
        <div class="main-welcome-info">
        <div class="main-welcome-img">
        <img class="img-thumbnail" src="assets/img/Bg/First.jpg" alt="">
        <img class="img-thumbnail" src="assets/img/Bg/second.jpg" alt="">            
        </div>
        <h1>ГАПОУ СО "НОВОУЗЕНСКИЙ АГРОТЕХНОЛОГИЧЕСКИЙ ТЕХНИКУМ"</h1>
        <p><strong>ГОСУДАРСТВЕННОЕ АВТОНОМНОЕ ПРОФЕССИОНАЛЬНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ САРАТОВСКОЙ ОБЛАСТИ "НОВОУЗЕНСКИЙ АГРОТЕХНОЛОГИЧЕСКИЙ ТЕХНИКУМ"</strong><br>Техникум был создан в 1930 году как Саратовский ветеринарный техникум, переименованный в 1932 году в «Новоузенский ветеринарный техникум». В связи с открытием зоотехнического отделения техникум в 1939 году переименован в «Новоузенский зооветеринарный техникум». Приказом Министерства сельского хозяйства и продовольствия Российской федерации от 18 декабря 1995 года № 352 техникум переименован в «Новоузенский сельскохозяйственный техникум», а приказом Министерства сельского хозяйства Российской Федерации от 15 декабря 2000 года № 1010 переименован в федеральное государственное образовательное учреждение среднего профессионального образования «Новоузенский сельскохозяйственный техникум»<br><strong>Новоузенский Техникум-Мы рады каждому студенту!</strong></p>
        </div>
      </div>
      <div class="col-md-5 side-bar">
        <div class="layout-sidebar">
            <div class="nav">
              <div class="navbar-nav side-bar" id="nav-sidebar">
                <div class="navbar-nav">
                  <a class="nav-item nav-link item-bar" href="Parts/allnews.php">Новости</a>
                  <a class="nav-item nav-link item-bar" href="#">РУКОВОДСТВО.ПЕДАГОГИЧЕСКИЙ СОСТАВ</a>
                  <a class="nav-item nav-link item-bar" href="#">ИНФОРМАЦИЯ ДЛЯ ПОСТУПАЮЩИХ</a>      
                  <a class="nav-item nav-link item-bar" href="#">СТИПЕНДИИ И ИНЫЕ ВИДЫ МАТЕРИАЛЬНОЙ ПОДДЕРЖКИ</a>
                  <a class="nav-item nav-link item-bar" href="#">ПОДГОТОВКА ПО ТОП - 50</a>
                  <a class="nav-item nav-link item-bar" href="#">ДОСТУПНАЯ СРЕДА -ИНФОРМАЦИЯ ДЛЯ  ИНВАЛИДОВ И ЛИЦ С ОВЗ</a>
                  <a class="nav-item nav-link item-bar" href="#">ВАКАНТНЫЕ МЕСТА ДЛЯ ПРИЕМА (ПЕРЕВОДА)</a>
                  <a class="nav-item nav-link item-bar" href="#">БЕСПЛАТНАЯ ЮРИДИЧЕСКАЯ ПОМОЩЬ</a> 
                  <a class="nav-item nav-link item-bar" href="#">МАТЕРИАЛЬНО-ТЕХНИЧЕСКОЕ ОБЕСПЕЧЕНИЕ И ОСНАЩЕННОСТЬ ОБРАЗОВАТЕЛЬНОГО ПРОЦЕССА</a> 
                  <a class="nav-item nav-link item-bar" href="#">ФИНАНСОВО-ХОЗЯЙСТВЕННАЯ ДЕЯТЕЛЬНОСТЬ</a> 
                  <a class="nav-item nav-link item-bar" href="#">ПЛАТНЫЕ ОБРАЗОВАТЕЛЬНЫЕ УСЛУГИ</a> 
                  <a class="nav-item nav-link item-bar" href="#">ЖИЗНЬ ПРОФСОЮЗА ТЕХНИКУМА</a>
                </div>
              </div>
          </div>       
         </div>             
      </div>
    </div>
  <div class="container">
    <div class="line"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="Headline">СПЕЦИАЛЬНОСТИ ОБУЧЕНИЯ В ТЕХНИКУМЕ</h1>
      </div>
    </div>
    <div class="row">
     <div class="col-md-1"></div>
      <?php
      $profs = $connection->query("SELECT * FROM proffesion ORDER BY idprof");
      $profs = $profs->FetchAll(PDO::FETCH_ASSOC);
       foreach ($profs as $prof) :
      ?>
      <div class="col-md-2 icon-prof">
        <div class="box-prof">
          <a href="/Parts/proffesion.php?idprof=<?php echo $prof['idprof'] ?>"><img src="../Assets/img/icons/<?php echo $prof['image'] ?>" alt=""></a>
         <h1><?php echo $prof['Name']; ?></h1>
        </div>
      </div>
      <?php endforeach; ?>
  </div>
      <div class="line"></div>
    <div class="row">
     <div class="col-md-12">
      <h1 class="new-title">ПОСЛЕДНИЕ НОВОСТИ ТЕХНИКУМА</h1>
<!--  |-------------------------|
      |    Блок с постами       |
      |                         |  
      |_________________________| -->
      <div class="blog-post">
        <?php
            $blog =$connection->query("SELECT * FROM blog ORDER BY id DESC LIMIT 0,3");
            $blog = $blog->FetchAll(PDO::FETCH_ASSOC);
            foreach ($blog as $blogs):
              ?>     
        <div class="row blog-item">
          <div class="col-md-4 ">
            <a href=""><img src="<?php echo $blogs['imge'] ?>" class="blog-posts-thumbnail" alt=""></a>
          </div>
          <div class="col col">
            <div class="blog-posts-date"><?php echo $blogs['datetime']; ?></div>
            <h3 class="blog-posts-title"><?php echo '<a href=../page/News.php?id='.$blogs['id'].'>'.$blogs['title'].'...</a>'?></h3>
            <p class="blog-posts-intro"><?php echo $blogs['introtext']; ?>...</p>
            <?php
            echo ' <a class="blog-posts-btn" href=Parts/News.php?id='.$blogs['id'].'>Читать Далее</a>'
             ?>
          </div>
        </div> 
      <?php endforeach; ?>
      </div>
      <div class="line"></div>
        <div class="btn-new  text-center">
         <a href="../Parts/allnews.php" >Ещё новости</a>
      </div>
    </div>
   </div>
 </section>
 <button class="sidebar-toggle" onclick="toggleSidebar()" type="button">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>