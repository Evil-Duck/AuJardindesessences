@extends('default')
@section('content')
  <div class="grid-container">
    <div class="panel grid-80 suffix-10 prefix-10">
      <div class="panel-banner" style="background-image: url('{{ elixir('images/Prestations.jpg') }}")>
        <div class="opacity">
          <h1>Préstations</h1>
        </div>
      </div>
      <div class="panel-content">
        <i>Voici la liste de tout les soins que je prodigue</i>
      </div>
    </div>
    <div class="panel grid-80 suffix-10 prefix-10" id="cPrest">
      <h1 id="titre" >Massage aux huiles essentielles</h1>
      <div class="panel-content">
        <div class="panel grid-80 suffix-10 prefix-10" id="Prest">
          <div class="panel-content" >
            <img class="img-circle" src="images/MassageVisage.jpeg" alt="pic" height="160" width="160">
            <h2>Massage du visage</h2>
            <p>
               Consectetur adipiscing elit. Aliquam a mauris quis ligula congue convallis. Sed nec lobortis tellus. Phasellus non sem maximus nunc bibendum feugiat. Etiam quis volutpat nisi, ac luctus dui. Vivamus ultrices cursus faucibus. Fusce auctor hendrerit condimentum. Suspendisse semper tellus a metus viverra, euismod fermentum leo laoreet. Donec in lacus auctor, pulvinar quam sed, semper felis. Cras at odio semper, euismod nisl id, faucibus nulla. Mauris quis accumsan ex. Integer neque dolor, molestie vel nibh eget, sodales vulputate sem. Phasellus at justo interdum, lobortis ligula vulputate, fringilla libero. Quisque vitae odio at nibh congue euismod.
            </p>
            <i class="prix">120.- pour deux heures</i>
          </div>
        </div>
      </div>
      <div class="panel-content" >
        <div class="panel grid-80 suffix-10 prefix-10" id="Prest">
          <div class="panel-content">
            <img class="img-circle"src="images/MassageDos.jpg" alt="pic" height="160" width="160">
            <h2>Massage du corps</h2>
            <p>
               Consectetur adipiscing elit. Aliquam a mauris quis ligula congue convallis. Sed nec lobortis tellus. Phasellus non sem maximus nunc bibendum feugiat. Etiam quis volutpat nisi, ac luctus dui. Vivamus ultrices cursus faucibus. Fusce auctor hendrerit condimentum. Suspendisse semper tellus a metus viverra, euismod fermentum leo laoreet. Donec in lacus auctor, pulvinar quam sed, semper felis. Cras at odio semper, euismod nisl id, faucibus nulla. Mauris quis accumsan ex. Integer neque dolor, molestie vel nibh eget, sodales vulputate sem. Phasellus at justo interdum, lobortis ligula vulputate, fringilla libero. Quisque vitae odio at nibh congue euismod.
            </p>
            <i class="prix">120.- pour deux heures</i>
          </div>
        </div>
      </div>
    </div>
      <div class="panel grid-80 suffix-10 prefix-10" id="cPrest">
        <h1 id="titre" >Soins aux onguent naturels </h1>
        <div class="panel-content">
          <div class="panel grid-80 suffix-10 prefix-10" id="Prest">
            <div class="panel-content">
              <img class="img-circle" src="images/MassageVisage.jpeg" alt="pic" height="160" width="160">
              <h2>Massage du visage</h2>
              <p>
                 Consectetur adipiscing elit. Aliquam a mauris quis ligula congue convallis. Sed nec lobortis tellus. Phasellus non sem maximus nunc bibendum feugiat. Etiam quis volutpat nisi, ac luctus dui. Vivamus ultrices cursus faucibus. Fusce auctor hendrerit condimentum. Suspendisse semper tellus a metus viverra, euismod fermentum leo laoreet. Donec in lacus auctor, pulvinar quam sed, semper felis. Cras at odio semper, euismod nisl id, faucibus nulla. Mauris quis accumsan ex. Integer neque dolor, molestie vel nibh eget, sodales vulputate sem. Phasellus at justo interdum, lobortis ligula vulputate, fringilla libero. Quisque vitae odio at nibh congue euismod.
              </p>
              <i class="prix">120.- pour deux heures</i>
            </div>
          </div>
        </div>
        <div class="panel-content">
          <div class="panel grid-80 suffix-10 prefix-10" id="Prest" >
            <div class="panel-content">
              <img class="img-circle"src="images/MassageDos.jpg" alt="pic" height="160" width="160">
              <h2>Massage du corps</h2>
              <p>
                 Consectetur adipiscing elit. Aliquam a mauris quis ligula congue convallis. Sed nec lobortis tellus. Phasellus non sem maximus nunc bibendum feugiat. Etiam quis volutpat nisi, ac luctus dui. Vivamus ultrices cursus faucibus. Fusce auctor hendrerit condimentum. Suspendisse semper tellus a metus viverra, euismod fermentum leo laoreet. Donec in lacus auctor, pulvinar quam sed, semper felis. Cras at odio semper, euismod nisl id, faucibus nulla. Mauris quis accumsan ex. Integer neque dolor, molestie vel nibh eget, sodales vulputate sem. Phasellus at justo interdum, lobortis ligula vulputate, fringilla libero. Quisque vitae odio at nibh congue euismod.
              </p>
              <i class="prix">120.- pour deux heures</i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
