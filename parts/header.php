<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Мета-теги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Adaptation -->
    <link rel="stylesheet" href="../assets/css/adaptation.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
    <title>Агротехнологический техникум Новоузенск</title>
  </head>
<body>
<header id="top">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <div class="header__item">
          <form class="search" action="#">
            <input required minlength="2" type="text" placeholder="Я ищу..." class="search__input">
              <button>
               <img src="../assets/img/icons/glass.svg" alt="search">
            </button>
           </form>         
        </div>      
      </div>
      <div class="col-md-4">
        <div class="header__item">
            <a href="#">Версия для слабовидящих</a> 
         </div>   
      </div>
      <div class="col-md-2">
        <?php
        if ($_SESSION['login_user'][0]['status'] == 1):
        ?>
        <a href="../admin/index.php">Админ панель </a><a href="../admin/unlogin.php">выход</a>
        <?php
        else:
         ?>
        <div class="header__item">
          <a href="#" class="login-btn">Войти</a>
        </div>
          <div class="login">
             <div class="wrapper">
               <div class="container">
                 <div class="row">
                   <div class="col-md-12">
                     <div class="form-login">
                       <form action="../admin/login.php" method="POST">
                         <label for="login">Ваш логин</label>
                         <input type="text" class="form-control" name="login" id="login"  placeholder="Ваш логин">
                         <label for="login">Ваш пароль</label>
                         <input type="password" class="form-control" name="pass" id="password"  placeholder="Ваш пароль"> 
                         <br>    
                         <button type="submit" name="login-go" class="btn btn-success">Success</button>           
                       </form>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
          </div>         
        <?php
        endif;
        ?>       
      </div>
    </div>
  </div>
</header>
<header id="layout-header">
  <div class="main-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
        <div class="hero-text">
          <h1>ГАПОУ СО "НОВОУЗЕНСКИЙ АГРОТЕХНОЛОГИЧЕСКИЙ ТЕХНИКУМ"</h1>
        </div>
    </div>
  </div>
</div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse menu" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="../index.php">Главная</a>
      <a class="nav-item nav-link" href="../parts_navigation/About.php">О техникуме</a>
      <a class="nav-item nav-link" href="../parts_navigation/documents.php">Документация</a>      
      <a class="nav-item nav-link" href="../parts_navigation/structure.php">Структура Техникума</a>
      <a class="nav-item nav-link" href="#">Образование</a>
      <a class="nav-item nav-link" href="#">Контакт</a>
    </div>
  </div>
 </nav>
</header>
