<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Création de Compte Bancaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <center><h2>Création de Compte Bancaire</h2></center>
    <form action="{{ route('saveCompte') }}" method="post" id="signup-form" >
        @csrf
        <div class="form-group">
            <label for="type-compte">Type de Compte </label>
            <select id="type-compte" name="type_compte">
                <option selected>Veuillez Choisir le type de compte</option>
                <option value="epargne">Épargne</option>
                <option value="courant">Courant</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pack">Pack </label>
            <select id="pack" name="table_pack_id">
                <option selected>Veuillez Choisir le pack</option>
                @foreach($table_pack as $pack)
                    <option value="{{ $pack->id }}">{{ $pack->nom_pack }}</option>
                @endforeach
            </select>
        </div>
{{--        <input type="submit" value="Créer le Compte">--}}
        <button type="submit" class="btn btn-secondary">Créer le Compte</button>
    </form>
</div>

</body>
</html>
