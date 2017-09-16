@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des licences supprimées
                        <a href="{{ route('licences.index') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-list"></i> Toutes les licences</a>
                    </div>

                    <div class="panel-body">

                        <table class="table dtable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Revendeur</th>
                                <th>Enseigne</th>
                                <th>Durée d'utilisation</th>
                                <th>Licence</th>
                                <th>Code Licence</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($licences as $e)
                                <tr class="danger">
                                    <td>{{ $e->id }}</td>
                                    @if($e->revendeur && $e->revendeur->role == "revendeur")
                                        <td>{{ $e->revendeur->name }}</td>
                                    @else
                                        <td>CleaNetwork</td>
                                    @endif
                                    <td>{{ $e->enseigne }}</td>
                                    <td>{{ ($e->duree_utilisation) ? $e->duree_utilisation . ' mois' : 'Indéterminée' }}</td>
                                    <td>{{ $e->licence }}</td>
                                    <td>{{ $e->code_licence }}</td>
                                    <td>
                                        <a href="{{ route('licences.restore', [$e->id, 'token' => csrf_token()]) }}"
                                           class="btn btn-xs btn-success"><i class="fa fa-refresh"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(function () {
            $('.dtable').dataTable({
                "language": {
                    "url": "{{ asset('js/French.json') }}"
                },
                "pageLength": 100
            });
        });
    </script>
@endsection