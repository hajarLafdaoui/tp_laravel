<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Notes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center">Liste des Notes</h1>

        <!-- Search Form -->
        <form method="get" action="/notes" class="mb-4">
            @csrf
            <input type="text" name="search" placeholder="Entrez un nom" class="form-control mb-3" value="{{ request('search') }}" />
            <button class="btn btn-primary w-100">Rechercher</button>
        </form>

        <!-- Notes Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($notes) && !isset($notes['message']))
                    @foreach($notes as $nom => $note)
                        <tr>
                            <td>{{ $nom }}</td>
                            <td>{{ $note }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2" class="text-center">{{ $notes['message'] }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
