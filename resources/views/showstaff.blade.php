<html><head>
<link rel=stylesheet href="{{ asset('css/style.css') }}" type='text/css'>
<title>Резюме и вакансии </title></head><body>

<div class="header"><!--*****************Логотип и шапка********************-->
Резюме и вакансии
<div id="logo"></div>
	</div>
 <div class="leftcol"><!--**************Основное содержание страницы************-->
 <p><h1>{{ $staffname->staff }}</h1></p>
@foreach ($man as $x)
<p class="pinline second" style="border: 1px solid green; padding:10px">{{$x->FIO}}, Телефон: {{$x->Phone}}
<span class="pinline third">
Стаж: {{$x->Stage}} лет</span>
<a href="{{route('showfirst',['id'=>$x->id])}}">Подробнее</a>
</p>
@endforeach

</p>
	</div>

<div class="rightcol"><!--*******************Навигационное меню*******************-->
  <ul class="menu">
     	<li><a href="/">Вакансии</a></li>
    	<li><a href="/liststaff">Резюме по профессиям</a></li>
    	<li><a href="/add">Добавить резюме</a></li>
     	<li><a href="">Избранное резюме</a></li>
   </ul>
</div>
<div class="footer">&copy; Copyright 2017(showstaff.blade.php)</div>

</body></html>