@extends('layouts.default')

 

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Editer</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('animals.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>
{{-- ceci permet de modifier un animal pour cela on recupère id --}}
{!! Form::model($animal, ['method' => 'PATCH','route' => ['animals.update', $animal->id]]) !!}

    @include('animals.form')

{!! Form::close() !!}

@endsection