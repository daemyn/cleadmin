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

                            <div class="form-group{{ $errors->has('site') ? ' has-error' : '' }}">
                                <label for="site" class="col-md-4 control-label">Site</label>

                                <div class="col-md-6">
                                    <input id="site" type="text" class="form-control" name="site" value="{{ old('site') }}" placeholder="Si Multi-Sites">

                                    @if ($errors->has('site'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('site') }}</strong>
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
                            <div class="form-group{{ $errors->has('code_naf') ? ' has-error' : '' }}">
                                <label for="code_naf" class="col-md-4 control-label">Code naf</label>

                                <div class="col-md-6">
                                    <input id="code_naf" type="text" class="form-control" name="code_naf" value="{{ old('code_naf') }}">

                                    @if ($errors->has('code_naf'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('code_naf') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('numero_tva') ? ' has-error' : '' }}">
                                <label for="numero_tva" class="col-md-4 control-label">Numéro tva</label>

                                <div class="col-md-6">
                                    <input id="numero_tva" type="text" class="form-control" name="numero_tva" value="{{ old('numero_tva') }}">

                                    @if ($errors->has('numero_tva'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numero_tva') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <label for="telephone" class="col-md-4 control-label">Téléphone</label>

                                <div class="col-md-6">
                                    <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}">

                                    @if ($errors->has('telephone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                                <label for="adresse" class="col-md-4 control-label">Adresse</label>

                                <div class="col-md-6">
                                    <input id="adresse" type="text" class="form-control" name="adresse" value="{{ old('adresse') }}">

                                    @if ($errors->has('adresse'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('code_postal') ? ' has-error' : '' }}">
                                <label for="code_postal" class="col-md-4 control-label">Code postal</label>

                                <div class="col-md-6">
                                    <input id="code_postal" type="text" class="form-control" name="code_postal" value="{{ old('code_postal') }}">

                                    @if ($errors->has('code_postal'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('code_postal') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                                <label for="ville" class="col-md-4 control-label">Ville</label>

                                <div class="col-md-6">
                                    <input id="siret" type="text" class="form-control" name="ville" value="{{ old('ville') }}">

                                    @if ($errors->has('ville'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('pays') ? ' has-error' : '' }}">
                                <label for="pays" class="col-md-4 control-label">Pays</label>

                                <div class="col-md-6">
                                    <input id="pays" type="text" class="form-control" name="pays" value="{{ old('pays') }}">

                                    @if ($errors->has('pays'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('pays') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nombre_postes') ? ' has-error' : '' }}">
                                <label for="nombre_postes" class="col-md-4 control-label">Nombre de postes</label>

                                <div class="col-md-6">
                                    <input id="nombre_postes" type="number" class="form-control" name="nombre_postes" value="{{ old('nombre_postes') }}" required>

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
