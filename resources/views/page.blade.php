<html><head>
<link rel=stylesheet href="{{ asset('css/style.css') }}" type='text/css'>
<title>Резюме и вакансии </title></head><body>

<div class="header"><!--*****************Логотип и шапка********************-->
Резюме и вакансии
<div id="logo"></div>
	</div>
 <div class="leftcol"><!--**************Основное содержание страницы************-->
@if(count($errors)>0)
<div style=”color:red”><ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul></div>
@endif

@foreach ($men as $one)
<p class="pinline second" style="border: 1px solid green; padding:10px">{{$one->FIO}},
Телефон: {{$one->Phone}}
<span class="pinline third">
Стаж: {{$one->Stage}} лет</span>
<a href="{{route('showfirst',['id'=>$one->id])}}">Подробнее</a>
</p>
@endforeach
<br>
<p class="pinline second" style="border: 1px solid green; padding:10px"><strong>Стаж больше 5 лет:</strong>
@foreach ($firstquery as $query)
    <span class="pinline third">{{ $query->FIO }}</span>
@endforeach</p>
<p class="pinline second" style="border: 1px solid green; padding:10px"><strong>Программисты:</strong>
@foreach ($secondquery as $query)
    <span class="pinline third">{{ $query->FIO }}, стаж: {{$query->Stage}}</span>
@endforeach
</p>
<p class="pinline second" style="border: 1px solid green; padding:10px"><strong>Записей в таблице:</strong>
    <span class="pinline third">{{ $thirdquery }}</span>
</p>
<p class="pinline second" style="border: 1px solid green;width:350px; padding:10px"><strong>Профессии, представители которых имеются в резюме:</strong>
@foreach ($fourthquery as $query)
   <span class="pinline third"> {{ $query->staff }} </span>
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
<div class="footer">&copy; Copyright 2017(page.blade.php)</div>

</body></html>