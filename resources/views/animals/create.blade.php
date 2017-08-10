@extends('layouts.default')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Ajouter un nouvelle animal</h2>

        </div>

        <div class="pull-right">

        	<br/>

            <a class="btn btn-primary" href="{{ route('animals.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>
{{-- ceci permet de crée le formulaire et donner la method (ici post) et aussi on va appel a fonction store qui ce situe dans le contrôleur --}}

{!! Form::open(array('route' => 'animals.store','method'=>'POST')) !!}
{{-- ceci permet appeler les élements de notre formulaire  --}}

     @include('animals.form')

{!! Form::close() !!}

@endsection