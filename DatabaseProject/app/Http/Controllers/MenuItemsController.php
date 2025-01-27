<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\MenuItems;
use Illuminate\View\View;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{
    public function show(): View
    {
        $model = new MenuItems();
        return view('menuItems', ['menuItems' => $model->get()]);
    }

    // Toon het formulier
    public function create()
    {
        return view('menuItems-create');
    }

    // Verwerk de invoer en sla op in de database
    public function store(Request $request)
    {
        // Valideer de gegevens
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Voeg het record toe
        MenuItems::create($validated);

        // Redirect met een succesbericht
        return redirect()->route('menu-items')->with('success', 'Menu item added successfully!');
    }

    public function destroy($id)
    {
        // Zoek het menu-item op basis van het ID en verwijder het
        $item = MenuItems::find($id);
        $item->delete();

        // Redirect terug naar de lijst van menu-items met een succesbericht
        return redirect()->route('menu-items')->with('success', 'Menu item deleted successfully!');
    }
}

