

<div class="container" style="margin-top: 20px;">
    <h3>Transactions</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Emetteur</th>
            <th scope="col">Bénéficiaire</th>
            <th scope="col">Motif</th>
            <th scope="col">Montant</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->emetteur->name }}</td>
                <td>{{ $transaction->beneficiaire->name }}</td>
                <td>{{ $transaction->motif }}</td>
                <td>{{ $transaction->montant }}</td>
                <td>{{ $transaction->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
