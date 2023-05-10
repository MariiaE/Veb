<!DOCTYPE html>

<html>
  <head>
    <link href="styles.css" rel="stylesheet" type="text/css">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com ">
    <title>Обзор фильмов</title>
    <script src="js1.js"></script>
  </head>
  <body class="body">
    
    <header>
    <div class="header__row header">
      <div class="header__action emb">
    <div class="svg" > <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="2" y="2" width="36" height="36" rx="18" stroke="#FF9C07" stroke-width="4"/>
      <rect x="18" y="18" width="4" height="4" rx="2" fill="#FF9C07"/>
      <rect x="16" y="7" width="8" height="8" rx="4" fill="#FF9C07"/>
      <rect x="16" y="25" width="8" height="8" rx="4" fill="#FF9C07"/>
      <rect x="33" y="16" width="8" height="8" rx="4" transform="rotate(90 33 16)" fill="#FF9C07"/>
      <rect x="15" y="16" width="8" height="8" rx="4" transform="rotate(90 15 16)" fill="#FF9C07"/>
      </svg> </div>
      <div  class="header__text1 ">Сайт с обзорами фильмов </div>
    </div>


<div class="auth-modal__tabs">
      <div class="header__action ">
      <button type="button" class="header__registration"  >Регистрация</button>
      <button type="button" class="header__login"  >Вход</button></div>
      </div>
    </div>
  
    <?php
    
    $flower = parse_ini_file("../password.ini");
          
                  $log = "pgsql:host=" .  $flower['host'];
                  $lag = "dbname=" . $flower['dbname'];
                  $lug = $flower['username'];
                  $leg = $flower['password'];
                
                
                $conn = new PDO("$log; $lag","$lug","$leg");
                session_start();
    if(empty($_SESSION['password']) || empty($_SESSION['email'])){

       
     }
     else{
      echo 'Здравствуйте,';
    echo $_SESSION['email'];
  }
    ?>
       
     
    


  
    <div class="form">
      <div class="form__background">
        </div>
      <div class="form__window">
      <div  class="back">
        <a  href="index.php"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 4L16 16" stroke="#B9B9B9" stroke-width="2" stroke-linecap="round"/>
          <path d="M16 4L4 16" stroke="#B9B9B9" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </a>
      </div>

          <div class="form__window__change-mode">
              <button class="change-mode__button change-mode__button__registration change-mode__button__active">
                  Регистрация
              </button>
              <button class="change-mode__button change-mode__button__autorization change-mode__button__unactive">
                  Авторизация
              </button>
          </div>

          <div class="registration__form">
              <form action="" method="post">
                  <div class="registration-inputs__container">
                      <div class="registration__name">
                          <label class="input__label input__label__big">
                              <input type="text" class="form__input registration__form__input form__input__big registration__name__input" name="user_name">
                              <p class="form__placeholder registration__placeholder">
                                  Ваше имя
                              </p>
                          </label>
                      </div>

                      <div class="registration__email">
                          <label class="input__label">
                              <input type="email" class="form__input registration__form__input registration__email__input" name="email">
                              <p class="form__placeholder registration__placeholder">
                                  Email
                              </p>
                          </label>
                      </div>

                      <div class="registration__phone">
                          <label class="input__label">
                              <input type="tel" class="form__input registration__form__input registration__phone__input" name="phone_number">
                              <p class="form__placeholder registration__placeholder">
                                  Мобильный телефон
                              </p>
                          </label>
                      </div>

                      <div class="registration__pass">
                          <label class="input__label">
                              <input type="password" class="form__input registration__form__input registration__pass__input" name="password">
                              <p class="form__placeholder registration__placeholder">
                                  Пароль
                              </p>
                          </label>
                      </div>

                      <div class="registration__pass-check">
                          <label class="input__label">
                              <input type="password" class="form__input registration__form__input registration__pass-check__input" name="checkPass">
                              <p class="form__placeholder registration__placeholder">
                                  Повторите пароль
                              </p>
                          </label>
                      </div>
                  </div>

                  <div class="agree">
                      <label class="agree__checkbox__label">
                          <input type="checkbox" class="agree__checkbox">
                          <div class="agree__checkbox__background"></div>
                      </label>
                      <p class="agree__text">
                          Согласен на обработку 
                          <a class="agree__link">персональных данных</a>
                      </p>
                  </div>

                  <button disabled class="registration__submit submit__unactive">
                      <p class="submit__text">
                          Зарегистрироваться
                      </p>
                  </button>

                  <div class="registration__info">
                      <div class="registration__info__icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="7" stroke="#838383" stroke-width="2"/>
                        <rect x="9" y="6" width="2" height="5" rx="1" fill="#838383"/>
                        <rect x="9" y="12" width="2" height="2" rx="1" fill="#838383"/>
                        </svg></div>
                       
                      <p class="registration__info__text">
                          Все поля обязательны для заполнения
                      </p>
                  </div>
              </form>
          </div>

         

              




          <div class="login__form">
              <form action="" method="post">
                  <div class="login-inputs__container">
                      <div class="login__email">
                          <label class="input__label">
                              <input type="email" class="form__input login__form__input login__email__input">
                              <p class="form__placeholder login__placeholder">
                                  Email
                              </p>
                          </label>
                      </div>

                      <div class="login__pass">
                          <label class="input__label">
                              <input type="password" class="form__input login__form__input login__pass__input">
                              <p class="form__placeholder login__placeholder">
                                  Пароль
                              </p>
                          </label>
                      </div>
                  </div>

                  <button disabled class="login__submit submit__unactive">
                      <p class="submit__text">
                          Войти
                      </p>
                  </button>

                  <div class="registration__info">
                      <div class="registration__info__icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="7" stroke="#838383" stroke-width="2"/>
                        <rect x="9" y="6" width="2" height="5" rx="1" fill="#838383"/>
                        <rect x="9" y="12" width="2" height="2" rx="1" fill="#838383"/>
                        </svg></div>
                      <p class="registration__info__text">
                          Все поля обязательны для заполнения
                      </p>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <?php        
  
                $name = $_POST['user_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone_number'];
                $pass = $_POST['password'];
                $checkPass = $_POST['checkPass'];

                $flower = parse_ini_file("../password.ini");
          
                  $log = "pgsql:host=" .  $flower['host'];
                  $lag = "dbname=" . $flower['dbname'];
                  $lug = $flower['username'];
                  $leg = $flower['password'];
                
                
                $conn = new PDO("$log; $lag","$lug","$leg");
              
                $request = $conn->prepare('SELECT * FROM поьзователь WHERE email = ?;');
                $request->bindParam(1, $email, PDO::PARAM_STR);
                $request->execute();
                $i = 0;
                while($result = $request->fetch(PDO::FETCH_ASSOC)){
                  $i = $i + 1;
                }
                if($i != 0){
                  echo 'User is already exist';
                  $conn = null;
                  die();
                }

                $addReguest = $conn->prepare('INSERT INTO пользователь (user_name, email, phone_number, password) VALUES (?, ?, ?, ?);');
                $addReguest->bindParam(1, $name, PDO::PARAM_STR);
                $addReguest->bindParam(2, $email, PDO::PARAM_STR);
                $addReguest->bindParam(3, $phone, PDO::PARAM_STR);
                $addReguest->bindParam(4, $pass, PDO::PARAM_STR);
                $addReguest->execute();

                $conn = null;

                $_SESSION['user_name'] = $name;
                $_SESSION['email'] = $email;
              ?>

              

    </header>
  
    <div class="al">

      

    <p class="title"; align = "left"; >Топ 20 фильмов</p>

<button class="add__button">
  <div class="plus">
  <svg  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
  <rect x="2" y="9" width="16" height="2" rx="1" fill="white"/>
  <rect x="11" y="2" width="16" height="2" rx="1" transform="rotate(90 11 2)" fill="white"/>
  </svg>
</div>
<a href="add_review.php">
  <div class="a">Добавить обзор</div>
</a>
</button>
</div>
<main>
<div class="counteiners">

<?php
 
  $flower = parse_ini_file("../password.ini");
    $log = "pgsql:host=" .  $flower['host'];
    $lag = "dbname=" . $flower['dbname'];
    $lug = $flower['username'];
    $leg = $flower['password'];

      $db= new PDO("$log; $lag","$lug","$leg");
      
$sql = "select  film_name, image_link, year, EXTRACT(DAY FROM time) as day,case
when EXTRACT(MONTH FROM time) = 1
then  N'января'
when EXTRACT(MONTH FROM time) = 2
then N'февраля'
when EXTRACT(MONTH FROM time) = 3
then N'марта'
when EXTRACT(MONTH FROM time) = 4
then N'апреля'
when EXTRACT(MONTH FROM time) = 5
then N'мая'
when EXTRACT(MONTH FROM time) = 6
then N'июня'
when EXTRACT(MONTH FROM time) = 7
then N'июля'
when EXTRACT(MONTH FROM time) = 8
then N'августа'
when EXTRACT(MONTH FROM time) = 9
then N'сентября'
when EXTRACT(MONTH FROM time) = 10
then N'октября'
when EXTRACT(MONTH FROM time) = 11
then N'ноября'
when EXTRACT(MONTH FROM time) = 12
then N'декабря'
end as mounth from обзор";
$result = $db->prepare($sql);
$result->execute();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

 
  ?>

<?php
foreach ($result as $row) { ?>
   <div class="counteiner"; align="left"> 
    <div class="img_photo" >
<img class="img" src="<?php  print_r($row['image_link']);?>" alt="Афиша <?php print_r($row['film_name'])?>">
</div>
<div class="h__add">
<p class="tetxmax"><?php print_r($row['film_name'])?> (<?php print_r($row['year'])?>)</p>
<div class="textminicon">
<div class="tetxmini1">Добавлено <?php print_r($row['day'])?> <?php print_r($row['mounth'])?></div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2"><?php print_r($row['day'])?> <?php print_r($row['mounth'])?></div>
</div>
</div>
<a href="ect.php" class="card__button"> Подробнее</a>
</div>
<?php }
?>


<!-- <div class="counteiner"; align="left" > 
<img class="img" src="img.png" alt="Афиша Зеленая миля"> 
<div class="h__add">
<p class="tetxmax">Зеленая миля <br />(1999)</p>
<div class="textminicon">
<div class="tetxmini1">Добавлено 15 августа</div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="ect.php" class="card__button"> Подробнее</a>
</div>


<div class="counteiner"; align="left" > 
<img class="img" src="список.png" alt="Афиша Список Шиндлера">
<div class="h__add">
<p class="tetxmax">Список Шиндлера<br /> (1993)</p> 
<div class="textminicon">
  <div class="tetxmini1">Добавлено 15 августа</div>
  <div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_301_435)">
    <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
    <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
    </g>
    <defs>
    <clipPath id="clip0_301_435">
    <rect width="12" height="12" fill="white"/>
    </clipPath>
    </defs>
    </svg>
  </div>
  <div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button" > Подробнее</a>
</div>


<div class="counteiner"; align="left"> 
<img class="img" src="побег.png" alt="Афиша Побег из Шоушенка">
<div class="h__add">
<p class="tetxmax">Побег из <br />Шоушенка (1994)</p>
<div class="textminicon">
  <div class="tetxmini1">Добавлено 15 августа</div>
  <div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_301_435)">
    <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
    <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
    </g>
    <defs>
    <clipPath id="clip0_301_435">
    <rect width="12" height="12" fill="white"/>
    </clipPath>
    </defs>
    </svg>
  </div>
  <div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button"> Подробнее</a>
</div>


<div class="counteiner"; align="left"> 
<img class="img" src="форрест.png" alt="Афиша Форрест Гамп">
<div class="h__add">
<p class="tetxmax">Форрест Гамп <br />(1994)</p>
<div class="textminicon">
<div class="tetxmini1">Добавлено 15 августа</div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button"> Подробнее</a>
</div>


<div class="counteiner"; align="left"> 
<img class="img" src="власт.png" alt="Афиша Властелин колец: Возвращение короля">
<div class="h__add">
<p class="tetxmax">Властелин колец:<br /> Возвращение короля (2003)</p>
<div class="textminicon">
<div class="tetxmini1">Добавлено 15 августа</div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button"> Подробнее</a>
</div>


<div class="counteiner"; align="left" > 
<img class="img" src="власт2.png" alt="Афиша Властелин колец: Братство Кольца">
<div class="h__add">
<p class="tetxmax">Властелин колец:<br /> Братство Кольца (2001)</p>
<div class="textminicon">
<div class="tetxmini1">Добавлено 15 августа</div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button"> Подробнее</a>
</div>


<div class="counteiner"; align="left" > 
<img class="img" src="власт3.png" alt="Афиша Властелин колец: Две крепости">
<div class="h__add">
<p class="tetxmax">Властелин колец:<br /> Две крепости (2002)</p>
<div class="textminicon">
<div class="tetxmini1">Добавлено 15 августа</div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button"> Подробнее</a>
</div>





<div class="counteiner"; align="left"> 
<img class="img" src="интерс.png" alt="Афиша Интерстеллар">
<div class="h__add">
<p class="tetxmax">Интерстеллар <br />(2014)</p>

  <div class="textminicon">
<div class="tetxmini1">Добавлено 15 августа</div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button"> Подробнее</a>
</div>


<div class="counteiner"; align="left"> 
<img class="img" src="тайна.png" alt="Афиша Тайна Коко">
<div class="h__add">
<p class="tetxmax">Тайна Коко (2017)</p>
<div class="textminicon">
<div class="tetxmini1">Добавлено 15 августа</div>
<div class="clock"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_301_435)">
  <circle cx="6" cy="6" r="5" stroke="#989898" stroke-width="2"/>
  <path d="M6 4V6H8" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
  <clipPath id="clip0_301_435">
  <rect width="12" height="12" fill="white"/>
  </clipPath>
  </defs>
  </svg>
</div>
<div class="tetxmini2">15 августа</div>
</div>
</div>
<a href="/" class="card__button"> Подробнее</a>
</div>
</div> -->
<?php
   
   
}
?>
</main>


  <button class="show-more">
    <p  align = "center">Показать еще</p>
  </button>
  <footer class="footer">
  <div class="footer__row">
    <a href="mailto:info@gmail.com" class="footer__email">info@gmail.com</a>
    <div class="footer__developer-info">Информация о разработчике</div>
  </div>
</footer>
  </body>
  </html>
  <?php
 
  $flower = parse_ini_file("../password.ini");
  try{
    $log = "pgsql:host=" .  $flower['host'];
    $lag = "dbname=" . $flower['dbname'];
    $lug = $flower['username'];
    $leg = $flower['password'];

    echo $log;
      $db= new PDO("$log; $lag","$lug","$leg");
      $id = 5;
$sql = "select id_comment, text from комментарий where id_comment =5";
$result = $db->prepare($sql);


$result->execute();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
   print_r($row);
   
}
    }
      catch(Exception $e){
        echo $e->getmessage();
      }

  ?>