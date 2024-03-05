<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />

<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Transfert</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('saveTransaction') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nom Beneficiaire</label>
                        <input type="text" class="form-control" id="username" name="name" placeholder="Nom" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prenom Beneficiaire</label>
                        <input type="text" class="form-control" id="password" name="prenom" placeholder="Prenom" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">N° Compte</label>
                        <input type="text" class="form-control" id="password" name="rib" placeholder="N° Compte" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Montant</label>
                        <input type="number" class="form-control" id="password" name="montant" placeholder="Montant" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Motif du transfert</label>
                        <input type="text" class="form-control" id="password" name="motif" placeholder="Motif" />
                    </div>
                    <div class="modal-footer d-block">
                        <button type="submit" class="btn btn-warning float-end">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
