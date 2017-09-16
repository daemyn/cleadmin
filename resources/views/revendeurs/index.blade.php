@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des revendeurs
                        <a href="{{ route('revendeurs.index', ['trash' => 1]) }}" class="btn btn-xs btn-danger pull-right"><i class="fa fa-trash"></i> Corbeille</a>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <a href="{{ route('revendeurs.create') }}" class="btn btn-primary">Ajouter</a>
                        </div>
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
                                        <a href="{{ route('revendeurs.edit', $e) }}"
                                           class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                        <form action="{{ route('revendeurs.destroy', $e->id) }}" class="form-inline form-delete" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
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