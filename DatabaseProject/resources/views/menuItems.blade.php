<h1>Menu items</h1>

<ul>
    @foreach ($menuItems as $item)
        <li>
            {{ $item->name }} <!-- Toon de naam van het menu-item -->

            <!-- Verwijderknop -->
            <form action="{{ route('menu-items.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE') <!-- Dit geeft aan dat het een DELETE-verzoek is -->
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ url('/menu-items/create') }}">Add Menu Item</a>