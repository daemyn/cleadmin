@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des licences</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Enseigne</td>
                                <td>{{ $licence->enseigne }}</td>
                            </tr>
                            <tr>
                                <td>Siret</td>
                                <td>{{ $licence->siret}}</td>
                            </tr>
                            <tr>
                                <td>Nombre de postes</td>
                                <td>{{ $licence->nombre_poste }}</td>
                            </tr>
                            <tr>
                                <td>N° Magasin</td>
                                <td>{{ $licence->num_magasin}}</td>
                            </tr>
                            <tr>
                                <td>Durée d'utilisation</td>
                                <td>{{ $licence->duree_utilisation }}</td>
                            </tr>
                            <tr>
                                <td>Licence</td>
                                <td>{{ $licence->licence}}</td>
                            </tr>
                            <tr>
                                <td>Code licence</td>
                                <td>{{ $licence->code_licence}}</td>
                            </tr>
                            <tr>
                                <td>Date d'activation</td>
                                <td>{{ $licence->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                            <tr>
                                <td>Etat</td>
                                <td>
                                    @if($licence->etat)
                                        <a href="javascript:void(0)" class="btn btn-success">Confirmée</a>
                                    @else
                                        <a href="{{ route('licences.confirmer', $licence->id) }}" class="btn btn-warning">Non confirmée</a>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection