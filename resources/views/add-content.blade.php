<html><head>
<link rel=stylesheet href="{{ asset('css/style.css') }}" type='text/css'>
<title>Резюме и вакансии </title></head><body>

<div class="header"><!--*****************Логотип и шапка********************-->
{{$header}}
<div id="logo"></div>
	</div>
 <div class="leftcol"><!--**************Основное содержание страницы************-->
<form method="POST" action="{{route('resumeStore')}}">
<p>ФИО <input name="FIO" value="Шемяков">
<p>Профессия <input name="Staff" type="number" value="1">
<p>Телефон <input name="Phone" value="88005553535">
<p>Стаж <input name="Stage" value="1" type="number">
<p>Фото <input name="Image" value="ava1.jpg">
<p><button type="submit">Добавить резюме</button>
  {{ csrf_field() }}
</form>

</div>

<div class="rightcol"><!--*******************Навигационное меню*******************-->
  <ul class="menu">
     	<li><a href="/">Вакансии</a></li>
    	<li><a href="/liststaff">Резюме по профессиям</a></li>
      <li><a href="/add">Добавить резюме</a></li>
     	<li><a href="">Избранное резюме</a></li>
   </ul>
</div>
<div class="footer">&copy; Copyright 2017(add-content.blade.php)</div>

</body></html>