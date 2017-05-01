@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des licences</div>

                    <div class="panel-body">

                        <div class="form-group">
                            <a href="{{ route('licences.create') }}" class="btn btn-primary">Créer une licence</a>
                        </div>

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
                                <tr class="{{ ($e->etat) ? 'success' : 'warning' }}">
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
                                        <a href="{{ route('licences.show', $e) }}"
                                           class="btn btn-xs btn-default"><i class="fa fa-file-text-o"></i></a>
                                        @if(!$e->etat)
                                            <a href="{{ route('licences.confirmer', [$e->id, 'token' => csrf_token()]) }}"
                                               class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>
                                        @endif
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
                }
            });
        });
    </script>
@endsection