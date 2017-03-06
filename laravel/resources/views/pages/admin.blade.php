@extends('default')
@section('content')
  <div class="grid-container" id="content-login">
    <div class="panel grid-80 suffix-10 prefix-10" id="content-login">
      <div class="panel-content" id="content-login">
        <h2 id="TitreLog-in" >Connexion à la page d'administration</h2>
        <form action="/admin" method="post">
          {{ csrf_field() }}
          <input type="email" name="mail" value="" placeholder="adresse mail" class="input-50" /required>
          <input type="password" name="password" value="" placeholder="mot de passe" class="input-50" /required>
          <button name="submit" type="submit">Connexion</button>
        </form>
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
