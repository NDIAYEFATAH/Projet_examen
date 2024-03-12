@include('Guichetier.navGuichet')
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
            <h2 class="mb-0 center">Dépôt Client</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('saveDepot') }}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="clientName" class="form-label">Nom du Client :</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Entrez le nom du client" required>
                </div>
                <div class="mb-3">
                    <label for="accountNumber" class="form-label">Numéro de Compte :</label>
                    <input type="text" class="form-control" id="rib" name="rib" placeholder="Entrez le numéro de compte" required>
                </div>
                <div class="mb-3">
                    <label for="depositAmount" class="form-label">Montant du Dépôt :</label>
                    <input type="text" class="form-control" id="montant" name="montant" placeholder="Entrez le montant du dépôt" required>
                </div>
                <button type="submit" class="btn btn-success">Effectuer le Dépôt</button>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')
