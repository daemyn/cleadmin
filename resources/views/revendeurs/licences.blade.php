@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mes licences</div>

                    <div class="panel-body">
                        <table class="table dtable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Enseigne</th>
                                <th>Licence</th>
                                <th>Durée d'utilisation</th>
                                <th>Code Licence</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($licences as $e)
                                <tr class="{{ ($e->etat) ? 'success' : '' }}">
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->enseigne }}</td>
                                    <td>{{ $e->licence }}</td>
                                    <td>{{ $e->duree_utilisation }} mois</td>
                                    <td>{{ $e->code_licence }}</td>
                                    <td>
                                        <a href="{{ route('licences.show', $e) }}"
                                           class="btn btn-xs btn-default">Voir</a>
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
        $(function(){
            $('.dtable').dataTable({
                "language": {
                    "url": "{{ asset('js/French.json') }}"
                }
            });
        });
    </script>
@endsection