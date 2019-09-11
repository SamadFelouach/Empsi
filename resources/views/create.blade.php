@extends('layouts.app')



@section('content')



@if(count($errors))
<div class="alert alert-danger" role="alert">
  
    <ul>
       @foreach($errors->all() as $message)
        <li> {{$message}} </li>
        @endforeach
    </ul>
</div>
@endif






<div class="container">
  <div class="row">
    <div class="row-md-12">
      
  <form action="{{url('store')}}" method="post">

{{csrf_field()}}

    <div class="form-group"><label for =""> Titre </label>
      <input type ="text" name="titre" class="form-control"  value="{{old('titre')}}">
    </div>

    <div class="form-group"> <label for =""> Element </label>
      <input type ="text" name="element"  class="form-control" value="{{old('element')}}">
    </div>

    <div class="form-group"><label for ="">  Professuer </label>
      <input type ="text" name="professeur" class="form-control" value="{{ old('professeur')}}">
    </div>

     <div class="form-group"><label for =""> Date séance  </label>
      <input type ="text" name="date_seance" class="form-control" value="{{old('date_seance')}}">
    </div>

    <div class="form-group"><label for =""> Heure  de debut de la seance  </label>
      <input type ="text" name="heure_debut" class="form-control" value="{{ old('heure_debut')}}">
    </div>

    <div class="form-group"><label for =""> Heure  de fin de la seance   </label>
      <input type ="text" name="heure_fin" class="form-control" value="{{old('heure_fin')}}">
    </div>

     <div class="form-group"><label for =""> Sommaire  </label>
      <textarea name="sommaire" class="form-control"></textarea value="{{old('sommaire')}}"> 
    </div>


    <div class="form-group">
    	<input type="submit"  class="form-control btn btn-primary" value="Creer Un Module ">
    </div>

  </form>



@endsection