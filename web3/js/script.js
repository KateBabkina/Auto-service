var a;
function example(e){
    var w = e.width;
    if (a) {
      e.style.cursor = 'zoom-in';
      e.width = document.getElementById("basic").offsetWidth * 0.7;

    } else {
      e.style.cursor = 'zoom-out';
      e.width = document.getElementById("basic").offsetWidth * 0.9;
    }
    a = !a;
}

var smoothJumpUp = function() { 
   if (document.body.scrollTop>0 || document.documentElement.scrollTop>0) { 
      window.scrollBy(0,-50); 
      setTimeout(smoothJumpUp, 15); 
    } 
}

window.onscroll = function() {myFunction()};
var menutop = document.getElementById("menu-top");
var sticky = menutop.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    menutop.classList.add("sticky")
  } else {
    menutop.classList.remove("sticky");
  }
}

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("comment");
    if (user != "") {
		console.log(document.cookie);
    } else {
       user = prompt("Если вы готовы оставить отзыв, оцените работу сервира от 1 до 5. Для выбора опции 'больше не спрашивать' поставьте знак '-'","");
       if (user != "" && user != null) {
           setCookie("comment", user, 30);
       }
    }
}


function togglePageContentLightDark() {
  var body = document.querySelector("body")
  var currentClass = body.className
  var newClass = body.className == 'dark-mode' ? 'light-mode' : 'dark-mode'
  body.className = newClass

  
  var endDate = new Date();
  endDate.setFullYear(endDate.getFullYear() + 10);

  document.cookie = 'theme=' + (newClass == 'light-mode' ? 'light' : 'dark') +
                    '; Expires=' + endDate + ';'
  console.log('Cookies are now: ' + document.cookie)
}

function isDarkThemeSelected() {
  return document.cookie.match(/theme=dark/i) != null
}

function setThemeFromCookie() {
  var body = document.querySelector("body")
  body.className = isDarkThemeSelected() ? 'dark-mode' : 'light-mode'
}

function writeComment() {
	                 if (getCookie("comment") == "1") {
		                 document.getElementById("my-comment").innerHTML="Ваш отзыв: " + getCookie("comment") + " из 5. Ужасный сервис. Категорически не рекомендую. Испортили машину и не вернули деньги.";
                     }
					 if (getCookie("comment") == "2") {
		                 document.getElementById("my-comment").innerHTML="Ваш отзыв: " + getCookie("comment") + " из 5. Не рекомендую. Не соответсвие цены и качества. Грубые работники, плохой сервис.";
                     }
					 if (getCookie("comment") == "3") {
		                 document.getElementById("my-comment").innerHTML="Ваш отзыв: " + getCookie("comment") + " из 5. Так себе. Средний уровень сервиса.";
                     }
					 if (getCookie("comment") == "4") {
		                 document.getElementById("my-comment").innerHTML="Ваш отзыв: " + getCookie("comment") + " из 5. Хороший сервис, рекомендую.";
                     }
					 if (getCookie("comment") == "5") {
		                 document.getElementById("my-comment").innerHTML="Ваш отзыв: " + getCookie("comment") + " из 5. Идеальный сервис. Всем рекомендую! Вежливые сотрудники, отличное качество услуг.";
                     }
}