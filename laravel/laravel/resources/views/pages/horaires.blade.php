@extends('default')
@section('content')
	<div class="grid-container">
		<div class="panel grid-80 suffix-10 prefix-10"">
	      <div class="panel-banner" style="background-image: url('{{ elixir('images/contact.jpeg') }}"')>
	        <div class="opacity">
	          <h1>horaires</h1>
	        </div>
	      </div>
	      <div class="panel-content">
	        <h2>Heures d'ouverture</h2>
	        <p>Ci-dessous vous trouverez les heures d'ouverture de salon</p>
	        <table>
	        	<thead>
	        		<tr>
	        			<th>Jours</th>
	        			<th>Heures</th>
	        		</tr>
	        	</thead>
	        	<tbody>
		        	<tr>
		        		<td>Lundi</td>
						<td>8:00 - 16:00</td>
		        	</tr>
		        	<tr>
		        		<td>Mardi</td>
						<td>10:00 - 16:00</td>
		        	</tr>
		        	<tr>
		        		<td>Mercredi</td>
	        			<td>8:00 - 16:00</td>
		        	</tr>
		        	<tr>
		        		<td>Jeudi</td>
	        			<td>8:00 - 16:00</td>
		        	</tr>
		        	<tr>
		        		<td>vendredi</td>
	        			<td>8:00 - 16:00</td>
		        	</tr>
		        	<tr>
		        		<td>Samedi</td>
	        			<td>12:00 - 16:00</td>
		        	</tr>
		        	<tr>
		        		<td>Dimanche</td>
	        			<td>Fermé</td>
		        	</tr>
	        	</tbody>
	        </table>
	      </div>
	    </div>
	</div>
@stop