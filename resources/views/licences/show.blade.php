@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Licence {{ $licence->id }}</div>

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
                                <td>{{ $licence->nombre_postes }}</td>
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
                                <td>{{ ($licence->etat) ? $licence->code_licence : '-' }}</td>
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
                                        @if(Auth::user()->role == 'admin')
                                            <a href="{{ route('licences.confirmer', $licence->id) }}"
                                               class="btn btn-warning">Non confirmée</a>
                                        @else
                                            <a href="javascript:void(0)"
                                               class="btn btn-warning">Non confirmée</a>
                                        @endif
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
