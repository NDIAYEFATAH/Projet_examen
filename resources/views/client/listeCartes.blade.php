@include('layout.partials.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Liste des cartes générées</h4>
                    <a href="{{ route('addCarte') }}" class="btn btn-success float-right">Générer une carte</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Montant</th>
                                    <th>Date d'Expiration</th>
                                    <th>CVV</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartes as $carte)
                                    @if($carte->compte_id === $compteCourant->id)
                                    <tr>
                                        <td>{{ $carte->id }}</td>
                                        <td>{{ $carte->montant }}</td>
                                        <td>{{ $carte->dateExpiration }}</td>
                                        <td>{{ $carte->cvv }}</td>
                                        <td>
                                            <a href="{{ route('show', ['id' => $carte->id]) }}" class="btn btn-sm btn-success">Voir Détails</a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
