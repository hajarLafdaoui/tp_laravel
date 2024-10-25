@props(['newNotes'])

<div class="container mt-4">
    <h1>Liste des Notes</h1>

    <!-- Search Form -->
    <form method="get" action="/notes" class="mb-4">
        @csrf
        <input type="text" name="search" placeholder="Entrez un nom" class="form-control mb-3" value="{{ request('search') }}" />
        <button class="btn btn-primary w-100">Rechercher</button>
    </form>

    <!-- Notes Table -->
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($newNotes) && !isset($newNotes['message']))
                @foreach($newNotes as $nom => $note)
                    <tr>
                        <td>{{ $nom }}</td>
                        <td>{{ $note }}</td>
                    </tr>
                @endforeach
            @elseif (isset($newNotes['message']))
                <tr>
                    <td colspan="2">{{ $newNotes['message'] }}</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
