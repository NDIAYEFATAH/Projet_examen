@include('layouts.navigation')
    

    <div class="card">
        <div class="card-header">
            <h2 class="mb-0 center">Dépôt Client </h2>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="clientName" class="form-label">Nom du Client :</label>
                    <input type="text" class="form-control" id="clientName" placeholder="Entrez le nom du client" required>
                </div>
                <div class="mb-3">
                    <label for="accountNumber" class="form-label">Numéro de Compte :</label>
                    <input type="text" class="form-control" id="accountNumber" placeholder="Entrez le numéro de compte" required>
                </div>
                <div class="mb-3">
                    <label for="depositAmount" class="form-label">Montant du Dépôt :</label>
                    <input type="text" class="form-control" id="depositAmount" placeholder="Entrez le montant du dépôt" required>
                </div>
                <button type="submit" class="btn btn-success">Effectuer le Dépôt</button>
            </form>
        </div>
       
    </div>

@include('layouts.footer')