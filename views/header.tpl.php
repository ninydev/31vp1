<html>
	<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

<body>
	<header><h2> <?=$this->data["header"]["pagetitle"]?> </h2> 
	<nav>
		<ul>
			<li><a href="/"> Главная </a> </li>
			<li><a href="/?controller=array"> Массивы  </a> </li>
			<li><a href="/?controller=user"> Пользователи </a> </li>
            <li><a href="/?controller=contacts"> Обратная связь </a> </li>
		</ul>
	</nav>
	</header>
	<main>
	
	<?php //include ("forms/login.tpl.php");
