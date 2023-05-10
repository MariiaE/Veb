<?php
 
 $flower = parse_ini_file("../password.ini");
 try{
   $log = "pgsql:host=" .  $flower['host'];
   $lag = "dbname=" . $flower['dbname'];
   $lug = $flower['username'];
   $leg = $flower['password'];

   
     $db= new PDO("$log; $lag","$lug","$leg");
    }
    catch(Exception $e){
      echo $e->getmessage();
    }
     ?>

<!DOCTYPE html>
<html>
  <head>
    <link href="styles_ect.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com ">
    <title>Обзор фильмов</title>
  </head>
  <body class="body">
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
      <div class="header__action ">
      <button class="header__button " >Регистрация</button>
      <button class="header__button " >Вход</button></div>
    </div>
    
    <div class="des">
        <div class="right">
            <div class="img1"><img  src="Зел12.png" alt="Зеленая миля"></div>
            <div class="img2"><img  src="зел2.png" alt="Зеленая миля"></div>
            <button class="trailer__button">
                <div class="play">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.8804 8.21738C16.2415 8.99512 16.2194 10.9652 14.8412 11.7122L6.95306 15.9878C5.62045 16.7101 4 15.7453 4 14.2295L4 5.44636C4 3.91071 5.65896 2.94798 6.99228 3.70987L14.8804 8.21738Z" fill="#FF9C07"/>
                        </svg>
                        
              </div>
                <div class="h__button">Трейлер</div>
              </button>
        </div>  
        
        <div class="left">
            <div class="h1_button">
                <div class="h1">
                    Зеленая миля (1999)

                </div>

                <button class="back__button">
                    <div class="back">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 4L7 10L13 16" stroke="#FF9C07" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            
                            
                  </div>
                  <a href="index.php">
                    <div class="h__button">Назад к списку</div>
                    </a>
                  </button>

            </div>

            <div class="mini__info">
                <div class="mini__text">
                    Добавлено 11 августа

                </div>
                
                <div class="tochka">
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="white" fill-opacity="0.1"/>
                        </svg>
                        

                </div>

                <div class="nik">
                    Константин Константинопольский

                </div>

            </div>

            <div class="left2">
                <button class="trailer__button">
                    <div class="play">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.8804 8.21738C16.2415 8.99512 16.2194 10.9652 14.8412 11.7122L6.95306 15.9878C5.62045 16.7101 4 15.7453 4 14.2295L4 5.44636C4 3.91071 5.65896 2.94798 6.99228 3.70987L14.8804 8.21738Z" fill="#FF9C07"/>
                            </svg>
                            
                  </div>
                    <div class="h__button">Трейлер</div>
                  </button>


                  <button class="back__button">
                    <div class="back">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 4L7 10L13 16" stroke="#FF9C07" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            
                            
                  </div>
                    <div class="h__button">Назад к списку</div>
                  </button>




            </div>

            <div class="text1">
                <p>«Они помогли ему убить себя и так происходит каждый день во всем мире»...</p>
                <p>Фильм, который я могу смело назвать шедевром. Фильм, который длится три часа и которые пролетают незаметно. Фильм, который смотрится каждый раз как в первый. Фильм, который нельзя забыть и которым нельзя не проникнуться. Фильм, котрый заставляет задуматься о жизни, которую мы тратим на пустяки, теша себя иллюзией бессмертия, о смерти, которая не щадит никого.</p>

                <p>Фильм о зле, которое не всегда наказуемо и о добре, которое подчас бессильно что-либо изменить. И тебе остается лишь смотреть на то, как вершится суд, над тем кто не должен сидеть на скамье подсудимых.</p>

                <p>Фильм, который изменил мое мировоззрение и научил по-другому относиться к жизни.</p>

            </div>

        </div>
    </div>

    <div class="text2">
        <p>«Они помогли ему убить себя и так происходит каждый день во всем мире»...</p>
        <p>Фильм, который я могу смело назвать шедевром. Фильм, который длится три часа и которые пролетают незаметно. Фильм, который смотрится каждый раз как в первый. Фильм, который нельзя забыть и которым нельзя не проникнуться. Фильм, котрый заставляет задуматься о жизни, которую мы тратим на пустяки, теша себя иллюзией бессмертия, о смерти, которая не щадит никого.</p>

        <p>Фильм о зле, которое не всегда наказуемо и о добре, которое подчас бессильно что-либо изменить. И тебе остается лишь смотреть на то, как вершится суд, над тем кто не должен сидеть на скамье подсудимых.</p>

        <p>Фильм, который изменил мое мировоззрение и научил по-другому относиться к жизни.</p>

    </div>

    <div class="start__of__comments">
        
        <div class="h1">
            Комментарии<sup class="number">
            <?php
     
     $sql = "select count(id_comment) as d from комментарий";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['d']);
       
     }
        }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>
            </sup>

        </div>
        <div class="h1__button">
            <div class="add__comment__button">
                <div class="plus">
                    <svg  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="9" width="16" height="2" rx="1" fill="white"/>
                        <rect x="11" y="2" width="16" height="2" rx="1" transform="rotate(90 11 2)" fill="white"/>
                        </svg>

                </div>
                <div class="h__add__button">
                    Добавить комментарий
                </div>

            </div>

        </div>

    </div>

    <div class="comments">
        <div class="comment">
            <div class="mini__info">
                <div class="mini__text">
                    Добавлено  
                    <?php
     
     $sql = "SELECT  EXTRACT(DAY FROM time) as day FROM комментарий
     where комментарий.id_comment =5";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['day']);
       
     }
        }
        catch(Exception $e){
            echo $e->getmessage();
          }
        $sql2 = "SELECT   case
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
        end as m
       FROM комментарий
        where комментарий.id_comment =5";
        $result2 = $db->prepare($sql2);
        $result2->execute();
        try{
        while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
            
          print_r(' ');
          print_r($row['m']);
          print_r(' ');
          
        }
           }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>

                </div>
                
                <div class="tochka">
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="white" fill-opacity="0.1"/>
                        </svg>
                        

                </div>

                <div class="nik">
                <?php
     
     $sql = "SELECT user_name
     from пользователь INNER JOIN пользователь_комментарий tes 
     on пользователь.id_user = tes.id_user
     INNER JOIN комментарий ON (tes.id_comment = комментарий.id_comment ) 
     where комментарий.id_comment =5";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['user_name']);
       
     }
        }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>

                </div>

            </div>
            
 <?php
     
$sql = "select text from комментарий where id_comment =5";
$result = $db->prepare($sql);
$result->execute();
try{
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<p>';
  print_r($row['text']);
  echo '</p>';
}
   }
     catch(Exception $e){
       echo $e->getmessage();
     }

 ?>
        </div>

        <div class="comment">
            <div class="mini__info">
                <div class="mini__text">
                    Добавлено 
                    <?php
     
     $sql = "SELECT  EXTRACT(DAY FROM time) as day FROM комментарий
     where комментарий.id_comment =6";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['day']);
       
     }
        }
        catch(Exception $e){
            echo $e->getmessage();
          }
        $sql2 = "SELECT   case
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
        end as m
       FROM комментарий
        where комментарий.id_comment =6";
        $result2 = $db->prepare($sql2);
        $result2->execute();
        try{
        while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
            
          print_r(' ');
          print_r($row['m']);
          print_r(' ');
          
        }
           }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>

                </div>
                
                <div class="tochka">
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="white" fill-opacity="0.1"/>
                        </svg>
                        

                </div>

                <div class="nik">
                <?php
     
     $sql = "SELECT user_name
     from пользователь INNER JOIN пользователь_комментарий tes 
     on пользователь.id_user = tes.id_user
     INNER JOIN комментарий ON (tes.id_comment = комментарий.id_comment ) 
     where комментарий.id_comment =6";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['user_name']);
       
     }
        }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>

                </div>

            </div>
            <?php
     
$sql = "select text from комментарий where id_comment =6";
$result = $db->prepare($sql);
$result->execute();
try{
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<p>';
  print_r($row['text']);
  echo '</p>';
}
   }
     catch(Exception $e){
       echo $e->getmessage();
     }

 ?>
        </div>

        <div class="comment">
            <div class="mini__info">
                <div class="mini__text">
                    Добавлено 
                    <?php
     
     $sql = "SELECT  EXTRACT(DAY FROM time) as day FROM комментарий
     where комментарий.id_comment =7";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['day']);
       
     }
        }
        catch(Exception $e){
            echo $e->getmessage();
          }
        $sql2 = "SELECT   case
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
        end as m
       FROM комментарий
        where комментарий.id_comment =7";
        $result2 = $db->prepare($sql2);
        $result2->execute();
        try{
        while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
            
          print_r(' ');
          print_r($row['m']);
          print_r(' ');
          
        }
           }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>
                </div>
                
                <div class="tochka">
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="white" fill-opacity="0.1"/>
                        </svg>
                        

                </div>

                <div class="nik">
                <?php
     
     $sql = "SELECT user_name
     from пользователь INNER JOIN пользователь_комментарий tes 
     on пользователь.id_user = tes.id_user
     INNER JOIN комментарий ON (tes.id_comment = комментарий.id_comment ) 
     where комментарий.id_comment =7";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['user_name']);
       
     }
        }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>

                </div>

            </div>
            <?php
     
$sql = "select text from комментарий where id_comment =7";
$result = $db->prepare($sql);
$result->execute();
try{
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<p>';
  print_r($row['text']);
  echo '</p>';
}
   }
     catch(Exception $e){
       echo $e->getmessage();
     }

 ?>

        </div>

        <div class="comment">
            <div class="mini__info">
                <div class="mini__text">
                    Добавлено 
                    <?php
     
     $sql = "SELECT  EXTRACT(DAY FROM time) as day FROM комментарий
     where комментарий.id_comment =8";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['day']);
       
     }
        }
        catch(Exception $e){
            echo $e->getmessage();
          }
        $sql2 = "SELECT   case
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
        end as m
       FROM комментарий
        where комментарий.id_comment =8";
        $result2 = $db->prepare($sql2);
        $result2->execute();
        try{
        while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
            
          print_r(' ');
          print_r($row['m']);
          print_r(' ');
          
        }
           }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>

                </div>
                
                <div class="tochka">
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="white" fill-opacity="0.1"/>
                        </svg>
                        

                </div>

                <div class="nik">
                <?php
     
     $sql = "SELECT user_name
     from пользователь INNER JOIN пользователь_комментарий tes 
     on пользователь.id_user = tes.id_user
     INNER JOIN комментарий ON (tes.id_comment = комментарий.id_comment ) 
     where комментарий.id_comment =8";
     $result = $db->prepare($sql);
     $result->execute();
     try{
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
       print_r($row['user_name']);
       
     }
        }
          catch(Exception $e){
            echo $e->getmessage();
          }
     
      ?>

                </div>

            </div>
            <?php
     
$sql = "select text from комментарий where id_comment =8";
$result = $db->prepare($sql);
$result->execute();
try{
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<p>';
  print_r($row['text']);
  echo '</p>';
}
   }
     catch(Exception $e){
       echo $e->getmessage();
     }

 ?>

        </div>

    </div>





    <footer class="footer">
        <div class="footer__row">
          <a href="mailto:info@gmail.com" class="footer__email">info@gmail.com</a>
          <div class="footer__developer-info">Информация о разработчике</div>
        </div>
      </footer>
        </body>
        </html>