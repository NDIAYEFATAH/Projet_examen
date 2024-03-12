@extends('admin')
@section('guichet')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Liste des transactions</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Emetteur</th>
                                    <th>Beneficiaire</th>
                                    <th>Montant</th>
                                    <th>Motif</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comptes as $compte)
                                    <tr>
                                        <td>{{ $compte->id }}</td>
                                        <td>{{ $compte->type_compte }}</td>
                                        <td>{{ $compte->rib }}</td>
                                        <td>{{ $compte->solde }}</td>
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
