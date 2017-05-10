@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des revendeurs
                        <a href="{{ route('revendeurs.index') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-list"></i> Tous les revendeurs</a>
                    </div>

                    <div class="panel-body">
                        <table class="table dtable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Date d'inscription</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($revendeurs as $e)
                                <tr>
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->name }}</td>
                                    <td>{{ $e->email }}</td>
                                    <td>{{ $e->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('revendeurs.restore', [$e->id, 'token' => csrf_token()]) }}"
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