{{-- ceci permet de dire a l'utilisateur qu'il y a une erreur avec ce qui a rentrer dans le formulaire --}} @if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>oups!</strong> Il y a des problème avec ce que vous avez ajouté.
    <br>
    <br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nom:</strong> {{-- ceci permet de crée un input de type text et récuper les élèments du formulaire pour ajouter dans la base --}} {!! Form::text('nom', null, array('placeholder' => 'nom','class' => 'form-control')) !!}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="radio">

            <strong>Type:</strong>
            <label>{!! Form::radio('type_animaux', 'Oiseau', array('placeholder' => 'type_animaux') )!!} Oiseau
            </label>
            <label>
                {!! Form::radio('type_animaux', 'Mammifère', array('placeholder' => 'type_animaux') )!!} Mammifère
            </label>
            <label>
                {!! Form::radio('type_animaux', 'Reptile', array('placeholder' => 'type_animaux') )!!} Reptile
            </label>
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Caracteristique du plumage/ de la fourrure/ des écailles:</strong> {!! Form::text('caracteristique', null, array('placeholder' => 'caracteristique','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Valider</button>

    </div>

</div>
