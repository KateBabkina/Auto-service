<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile1.php');
}
?>
	
	<!doctype html> 
<html> 
<head> 
	 <title>TURBO REPAIR</title> 
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	 <link rel="icon" href="sources/head-logo.png">
	 <link rel="stylesheet" href="css/style.css">
	 
</head> 
<body class="light-mode"> 
	 <div id="basic">
         <header>
		     <ul>
                 <li><a href="index.html"><img class="logo" src="sources/logo.png" alt="TURBO REPAIR" title="TURBO REPAIR"></a></li>
                 <li>Ваша машина - наша забота!
		             <p><span style="color:#ca1414">TURBO REPAIR</span>. Качество движения.</p></li>
                 <li><span style="color:#ca1414">Горячая  линия</span>
			         <p><a href="tel: +7 (815) 287-43-03">+7 (815) 287-43-03</a></p></li>
             </ul>
         </header>
		 <main>
			  <div style="text-align: center"><button type="button" name="dark_light" onclick="togglePageContentLightDark()" title="Toggle dark/light mode">Изменить цвет фона</button></div>
			  <p></p>
	          <div id="menu-top">
                 <div class="bg-1">
                     <ul>
                         <li><a href="index.html">Главная</a></li>
                         <li><a href="comment.html">Отзывы</a></li>
                         <li><a href="about-site.html">О сайте</a></li>
						 <li><a href="profile.php">Мой профиль</a></li>
                     </ul>
                 </div>
                 <div class="bg-2"></div>
              </div>
		      <div class="content1">
			  
			     <form style="width: 50%;" action="vendor/signin.php" method="post"><p></p>
				 <h1>Зарегистрируйтесь или войдите в свой профиль, чтобы получить скидку 5% и расчитать стоимость услуг!</h1><br><br>
                      <label>Логин</label>
                      <input type="text" name="login" placeholder="Введите свой логин">
                      <label>Пароль</label>
                      <input type="password" name="password" placeholder="Введите пароль">
                      <button type="submit">Войти</button>
                      <p>
                         У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
                      </p>
					          <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
                 </form>
			  </div>
		  </main>
		  <footer>
		     <div class="bg-3"></div>
		     <div class="bg-2"></div>
			 <p></p>
			 <div>OOO "TURBO REPAIR" 2021</div>
		  </footer>
		  <a href="javascript:smoothJumpUp()" title="Вернуться к началу" class="top-button">^Наверх</a>
     </div> 
	 <script src="js/script.js"></script>
	 <script>
(function() {
  setThemeFromCookie()
})();
</script>
</body> 
</html>