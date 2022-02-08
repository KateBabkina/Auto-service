<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: profile.php');
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
			     <form style="text-align: left; width: 30%;">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="80%">
        <p><?= $_SESSION['user']['full_name'] ?></p>
        <a href="mailto: <?=$_SESSION['user']['email']?>"><?= $_SESSION['user']['email'] ?></a><br>
        <a href="vendor/logout.php" class="logout">Выход</a><br>
		<a href="vendor/delete.php" class="logout">Удалить аккаунт</a>
    </form>
	
			<form style="text-align: left" method="POST" action="vendor/action.php">
			<h2>Рассчитайте стоимость услуг:</h2>
			<label for="choice1" class="checkboxes"><input type="checkbox" id="choice1" name="choice1" value="1" class="checkboxes"/>
С/у защиты двигателя</label><br>
<label for="choice2" class="checkboxes"><input type="checkbox" id="choice2" name="choice2" value="2" class="checkboxes"/>
Замена воздушного фильтра</label><br>
<label for="choice3" class="checkboxes"><input type="checkbox" id="choice3" name="choice3" value="3" class="checkboxes"/>
Замена масла в двигателе (ДВС) + маслянный фильтр</label><br>
<label for="choice4" class="checkboxes"><input type="checkbox" id="choice4" name="choice4" value="4" class="checkboxes"/>
Замена салонного фильтра</label><br>
<label for="choice5" class="checkboxes"><input type="checkbox" id="choice5" name="choice5" value="5" class="checkboxes"/>
Замена масла в механической коробке передач (КПП)</label><br>
<label for="choice6" class="checkboxes"><input type="checkbox" id="choice6" name="choice6" value="6" class="checkboxes"/>
Регулировка развал схождения представительский класс, внедорожники, минивэны</label><br>
<label for="choice7" class="checkboxes"><input type="checkbox" id="choice7" name="choice7" value="7" class="checkboxes"/>
Наплавление на трещину (перекрытие) трубки кондиционера (ГУРа), площадь обрабатываемой поверхности не более 3 кв.см</label><br>
<label for="choice8" class="checkboxes"><input type="checkbox" id="choice8" name="choice8" value="8" class="checkboxes"/>
Замена тормозной жидкости с прокачкой</label><br>
<label for="choice9" class="checkboxes"><input type="checkbox" id="choice9" name="choice9" value="9" class="checkboxes"/>
Замена зеркального элемента</label><br>
<label for="choice10" class="checkboxes"><input type="checkbox" id="choice10" name="choice10" value="10" class="checkboxes"/>
Диагностика тормозной системы</label><br>
<label for="choice11" class="checkboxes"><input type="checkbox" id="choice11" name="choice11" value="11" class="checkboxes"/>
Регулировка клапанов (рядный ДВС 4-х циллиндровый)</label><br>
<label for="choice12" class="checkboxes"><input type="checkbox" id="choice12" name="choice12" value="12" class="checkboxes"/>
Поиск и устранение неисправности в проводке</label><br>
<label for="choice13" class="checkboxes"><input type="checkbox" id="choice13" name="choice13" value="13" class="checkboxes"/>
Ремонт радиатора (1 повреждение)</label><br>
<label for="choice14" class="checkboxes"><input type="checkbox" id="choice14" name="choice14" value="14" class="checkboxes"/>
Замена лампы со снятием фары</label><br>
<label for="choice15" class="checkboxes"><input type="checkbox" id="choice15" name="choice15" value="15" class="checkboxes"/>
Компьютерная диагностика</label><br>
<label for="choice16" class="checkboxes"><input type="checkbox" id="choice16" name="choice16" value="16" class="checkboxes"/>
Тонировка стекол любого автомобиля</label><br>
<label for="choice17" class="checkboxes"><input type="checkbox" id="choice17" name="choice17" value="17" class="checkboxes"/>
Растонировка лобового стекла</label><br>
<label for="choice18" class="checkboxes"><input type="checkbox" id="choice18" name="choice18" value="18" class="checkboxes"/>
Комплексная чистка стекол</label><br>
<label for="choice19" class="checkboxes"><input type="checkbox" id="choice19" name="choice19" value="19" class="checkboxes"/>
Замена общего приводного ремня</label><br>
<label for="choice20" class="checkboxes"><input type="checkbox" id="choice20" name="choice20" value="20" class="checkboxes"/>
Замена переднего амортизатора + опорного подшипника + пружины</label><br>
<label for="choice21" class="checkboxes"><input type="checkbox" id="choice21" name="choice21" value="21" class="checkboxes"/>
Замена подвижного бокового стекла</label><br>

  <input style="background: #252527; color: #fff; font-weight: bold;" type="submit" value="Посчитать стоимость услуг">
  <?php
            if ($_SESSION['message']) {
            echo '<p class="msg1"> ' . $_SESSION['message'] . ' </p>';
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