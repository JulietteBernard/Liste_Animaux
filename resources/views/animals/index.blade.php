@extends('layouts.default') @section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left ">

            <h2>Liste d'animaux</h2>

        </div>

    </div>

</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<table class="table table-bordered">

    <tr>


        <th>Nom</th>

        <th>Description</th>

        <th width="100px" class="text-center">

            <a class="btn btn-success btn-sm" href="{{ route('animals.create') }}"><i class="glyphicon glyphicon-plus"></i></a>

        </th>

    </tr>
    {{-- ceci permet de recupére un par un les lignes du tabeau et de faire ceci jusqu'a que tout les ligne sois faite --}} @foreach ($animals as $animal)

    <tr bgcolor="{{$animal->color}}">

        {{-- ceci permet récupéré les valeur d'un des ligne et de les afficher --}}
        <td>{{ $animal->nom }}</td>

        <td>{{$animal->description}}</td>

        <td>

            {{-- ceci va permet accèder au fonction du contrôle --}}
            <a class="btn btn-primary btn-sm" href="{{ route('animals.edit',$animal->id) }}"><i class="glyphicon glyphicon-pencil"></i></a> {!! Form::open(['method' => 'DELETE','route' => ['animals.destroy', $animal->id],'style'=>'display:inline']) !!}

            <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>

            {!! Form::close() !!}

        </td>

    </tr>


    @endforeach
    <tr>


        <th>Nom</th>

        <th>Description</th>

        <th width="100px" class="text-center">

            <a class="btn btn-success btn-sm" href="{{ route('animals.create') }}"><i class="glyphicon glyphicon-plus"></i></a>

        </th>

    </tr>

</table>



@endsection
