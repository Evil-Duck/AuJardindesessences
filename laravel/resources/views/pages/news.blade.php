<?php
$TextNews="";
$handle = fopen('bdd/News.txt', 'r');
if ($handle)
{
	while (!feof($handle))
	{
		$buffer = fgets($handle);
		$TextNews .=$buffer."<br></br>";
	}
	fclose($handle);
}
?>

@extends('default')
@section('content')
  <div class="grid-container">
    <div class="panel grid-80 suffix-10 prefix-10"">
      <div class="panel-banner" style="background-image: url('{{ elixir('images/News.jpg') }}"')>
        <div class="opacity">
          <h1>Mes offres du moment</h1>
        </div>
      </div>
      <div class="panel-content">
        <h2>Mes offres du moment</h2>
        <p><?=$TextNews ?></p>
      </div>
    </div>
  </div>
  <style>
  footer {
     position:fixed;
     left:0px;
     bottom:0px;
     height:30px;
     width: 100%;
}
#content-login{
  padding-top:150px;
}
  </style>
@stop
