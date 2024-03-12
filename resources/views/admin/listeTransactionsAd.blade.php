@extends('admin')
@section('guichet')
    <br>
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
                                @foreach($transactions as $t)
                                    <tr>
                                        <td>{{ $t->id }}</td>
                                        <td>{{ $t->emetteur->prenom }} {{ $t->emetteur->name  }}</td>
                                        <td>{{ $t->beneficiaire->prenom }} {{ $t->beneficiaire->name }}</td>
                                        <td>{{ $t->montant }}</td>
                                        <td>{{ $t->motif }}</td>
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
