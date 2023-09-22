<?php use Symfony\Component\VarDumper\VarDumper;
?>
@extends('layout')

@section('content')
    <h1>Коллекция</h1>

	<?php $users = [
		[
			"id"     => 1,
			"name"   => "John",
			"status" => "ban"
		],
		[
			"id"     => 2,
			"name"   => "Jane",
			"status" => "ban"
		],
		[
			"id"     => 3,
			"name"   => "Misha",
			"status" => "active"
		],
	];

	$users = collect($users);

	// фильтруем по полю status == ban и берем обратное от id > 1
	$names = $users->filter(function ($user) {
		return $user["status"] == 'ban';
	})->reject(function ($user) {
		return $user['id'] > 1;
	});

    VarDumper::dump($names);
	?>

@endsection
