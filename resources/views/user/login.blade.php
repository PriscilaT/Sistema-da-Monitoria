<!DOCTYPE html>
<html>
<!--Código frontend, inverface de login para o usuário -->
	<head>
    	<meta charset="UTF-8"/>
    	<title>Login | Sistema de monitoria</title>
			<link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
			<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	</head>
	<body>

			<div class="background">

			</div>

    	<section id="conteudo-view" class="login">
				<h1>Monitoria</h1>
				<h3>O sistema de seleção de monitores</h3>

				{!! Form::open(['route'=> 'user.login','method'=> 'post']) !!}
						<p>Acesse o sistema</p>

						<label>
							{!! Form::text('username', null, ['class'=> 'input','placeholder'=> "Usuário"]) !!}
						</label>

						<label>
							{!! Form::password('password', ['placeholder'=> "Senha"]) !!}
						</label>

						{!! Form::submit('Entrar') !!}
				{!! Form::close() !!}

				<form class="" action="index.html" method"post">
				</form>

			</section>
	</body>
</html>
