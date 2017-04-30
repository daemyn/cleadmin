@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form-group">
            <h1 class="text-center text-uppercase">Licences</h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Nouvelle licence</div>

                    <div class="panel-body">
                        <form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="{{ route('licences.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('enseigne') ? ' has-error' : '' }}">
                                <label for="enseigne" class="col-md-4 control-label">Enseigne</label>

                                <div class="col-md-6">
                                    <input id="enseigne" type="text" class="form-control" name="enseigne" value="{{ old('enseigne') }}" required autofocus>

                                    @if ($errors->has('enseigne'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('enseigne') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('siret') ? ' has-error' : '' }}">
                                <label for="siret" class="col-md-4 control-label">Siret</label>

                                <div class="col-md-6">
                                    <input id="siret" type="text" class="form-control" name="siret" value="{{ old('siret') }}" required>

                                    @if ($errors->has('siret'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('siret') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nombre_postes') ? ' has-error' : '' }}">
                                <label for="nombre_postes" class="col-md-4 control-label">Nombre de postes</label>

                                <div class="col-md-6">
                                    <input id="nombre_postes" type="text" class="form-control" name="nombre_postes" value="{{ old('nombre_postes') }}" required>

                                    @if ($errors->has('nombre_postes'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nombre_postes') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('duree_utilisation') ? ' has-error' : '' }}">
                                <label for="duree_utilisation" class="col-md-4 control-label">Durée d'utilisation</label>

                                <div class="col-md-6">
                                    <input id="duree_utilisation" type="number" class="form-control" name="duree_utilisation" value="{{ old('duree_utilisation') }}" required>

                                    @if ($errors->has('duree_utilisation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('duree_utilisation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
