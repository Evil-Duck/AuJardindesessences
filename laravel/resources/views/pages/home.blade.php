@extends('default')
@section('content')
  <div class="banner">
    <div class="opacity">
        <h1>Au jardin des essences</h1>
        <h2>Salon de massage ayurveda</h2>
    </div>
  </div>
  <div class="grid-container">
    <div class="panel grid-80 suffix-10 prefix-10"">
      <div class="panel-banner" style="background-image: url('{{ elixir('images/info.jpg') }}"')>
        <div class="opacity">
          <h1>informations</h1>
        </div>
      </div>
      <div class="panel-content">
        <h2>Qui suis-je ?</h2>
        <p>Bienvenue, à vous. Je m'appelle Marinka Huguenin, je suis mariée et ai un enfant encore petit. Je suis Esthéticienne diplômée (Apprentissage dans un institut
          ) pour enfin, pratiquer ma passion: Masseuse en Ayurveda (diplôme de Thérapeute ayurvédique), ainsi qu'une connaissance de l'aromathérapie, afin de vous offrir le
          meilleur, pour un bien-être absolu.</p><p> Je travaille à la maison, qui se trouve dans un quartier calme et reposant;
          Une cabine est à votre entière disposition, aux couleurs douces et aux parfums de mille essences, pour vivre un voyage féerique au pays du bien-être, et, pour atterrir en douceur, une tasse de thé, vous est offerte
          à la fin de chaque soin.</p>
          <p>Je vous accueille dans un doux plaisir, dans mon univers féerique, pour un agréable voyage...</p>
      </div>
    </div>
    <div class="panel grid-80 suffix-10 prefix-10"">
      <div class="panel-banner" style="background-image: url('{{ elixir('images/desc.jpg') }}"')>
        <div class="opacity">
          <h1>entreprise</h1>
        </div>
      </div>
      <div class="panel-content">
        <h2>Description de mes soins</h2>
        <p>Les massages, sont avec des huiles essentielles pures et des huiles végétales bio. Ce sont de doux massages aux huiles chaudes préparées selon vos besoins et votre Dosha à soigner</p><p>
Au premier massage, on prend contact avec le corps, on l'écoute, on le laisse s'exprimer...et ...l'âme voyage gentiment ... Cela dure 2h00 pour atterrir en douceur, un thé des fées vous est offert à la fin.</p>
      </div>
    </div>
  </div>
@stop
