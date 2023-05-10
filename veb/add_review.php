<!DOCTYPE html>
<html>
  <head>
    <link href="style__add__review.css" rel="stylesheet" type="text/css">
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
    <main>
    <div class="contatiner">
      <div class="add_image">

      </div>
    
    
    
    <div class="description">
       <div class="main-row">
        <h1 class="h1 main-row__title">Название</h1>
        <!-- <a href="index.html" class="main-row__button">Назад к списку</a> -->
      </div>
   


      <form  enctype="multipart/form-data" action="action_db.php" method="post">
        <input class="form__input" type="text" placeholder="Название фильма" name="film_name">
        <input type="text" placeholder="Год выхода" name="year">
        <input type="text" placeholder="Описание" name="description">
        <input  type="file" placeholder="Загрузите картинку" name="image">
        
        <button type="submit" class="add__comment__button">
        <div >Опубликовать обзор </div>
        </button>
      </form>


      </div>
      </div>
    </div>
  </main>
  


    
    <footer class="footer">
        <div class="footer__row">
          <a href="mailto:info@gmail.com" class="footer__email">info@gmail.com</a>
          <div class="footer__developer-info">Информация о разработчике</div>
        </div>
      </footer>
        </body>
        </html>