@extends('admin')
@section('guichet')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Liste des comptes</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type de compte</th>
                                    <th>RIB</th>
                                    <th>Solde</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comptes as $compte)
                                <tr>
                                    <td>{{ $compte->id }}</td>
                                    <td>{{ $compte->type_compte }}</td>
                                    <td>{{ $compte->rib }}</td>
                                    <td>{{ $compte->solde }}</td>
                                    <td>
                                        @if($compte->statut)
                                            <span class="badge bg-success">Actif</span>
                                        @else
                                            <span class="badge bg-danger">Bloqué</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($compte->statut)
                                            <a href="#" class="btn btn-sm btn-danger">Bloquer</a>
                                        @else
                                            <a href="#" class="btn btn-sm btn-success">Débloquer</a>
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
</div>
@endsection
