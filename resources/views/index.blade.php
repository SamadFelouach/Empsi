@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1> Mes Modules </h1>
			<div class="pull_right ">
				<a href="{{url('index')}}"> Nouveau Module ?</a>
			</div>

			<table class="table">
				<head>
					<tr>
						<th>Titre</th>
						<th>Element</th>
						<th>Professeur</th>
						<th>Date de seance </th>
						<th>Date de debut </th>
						<th>Date de fin </th>
						<!--<th>Sommaire</th>-->
						<th> Actions </th>
					</tr>
				</head>

				<body>
					@foreach ($modules as $mod)
					<tr>
						<td> {{$mod->titre }} </td>
						<td> {{$mod->element }} </td>
						<td> {{$mod->professeur }} </td>
						<td> {{$mod->date_seance }} </td>
						<td> {{$mod->heure_debut }} </td>
						<td> {{$mod->heure_fin }} </td>
						<!--<td> {{$mod->sommaire }} </td>-->


					 <td>
                    <form action="{{ url('/actions/'.$mod->id.'/supprimer')}}" method="post">

                    	 {{ csrf_field() }}
                    	 {{ method_field('DELETE')}}

                       <a href="{{ url('') }}" class="btn btn-success"> Details</a>
					   <a href="{{ url('/actions/'.$mod->id.'/edite') }}" class="btn btn-warning"> Editer</a>
					   <button type="submit"  class="btn btn-danger" >Supprimer</button>

					</form>
					 </td>
				</tr>

				@endforeach

			</body>
		</table>
	</div>
</div>
</div>






@endsection  