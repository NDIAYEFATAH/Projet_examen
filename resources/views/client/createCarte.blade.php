@include('layout.partials.header')
<style>
    /* Adjustments for centering */
    .centered {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Adjust as needed */
    }
    .card {
        width: 30rem; /* Adjust as needed */
    }
</style>

<div class="container centered">
    <div class="card ml-5 mr-5">
        <div class="card-header">
            <h2 class="mb-0 center">Creation Cartes</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('saveCarte') }}" method="post">
            @csrf

                <div class="mb-3">
                    <label for="depositAmount" class="form-label">Montant :</label>
                    <input type="text" class="form-control" id="montant" name="montant" placeholder="Entrez le montant du dépôt" required>
                </div>
                <div class="mb-3">
    <label for="cvv" class="form-label">Code CVV :</label>
    <input type="text" class="form-control" id="cvv" name="cvv" value="{{ str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT) }}" readonly>
</div>
                <button type="submit" class="btn btn-success">Generer la carte</button>
            </form>
        </div>
    </div>
</div>
