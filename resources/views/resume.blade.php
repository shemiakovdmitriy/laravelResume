<html><head>
<link rel=stylesheet href="{{ asset('css/style.css') }}" type='text/css'>
<title>Резюме и вакансии </title></head><body>

<div class="header"><!--*****************Логотип и шапка********************-->
Резюме и вакансии
<div id="logo"></div>
	</div>
 <div class="leftcol"><!--**************Основное содержание страницы************-->


<div class="pinline1">
	<img class="pic" src="{{ asset('images') }}/{{$man->Image}}">
</div>

<p class="pinline second">
{{ $man->FIO }}

<br>
Телефон: 
{{ $man->Phone }}

</p>

<p  class="pinline third">
Программист
<br>

Стаж: 
{{ $man->Stage }}  лет

</p>
	</div>

<div class="rightcol"><!--*******************Навигационное меню*******************-->
  <ul class="menu">
     	<li><a href="">Вакансии</a></li>
    	<li><a href="">Резюме по профессиям</a></li>
     	<li><a href="">Избранное резюме</a></li>
   </ul>
</div>
<div class="footer">&copy; Copyright 2017</div>

</body></html>