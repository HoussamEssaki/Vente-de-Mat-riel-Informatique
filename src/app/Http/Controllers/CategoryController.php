<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Liste des catégories
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Formulaire d'ajout
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Enregistrement catégorie
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Catégorie ajoutée avec succès');
    }

    /**
     * Page détails (optionnel)
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Formulaire de modification
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Mise à jour
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Catégorie mise à jour avec succès');
    }

    /**
     * Suppression
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', 'Catégorie supprimée avec succès');
    }
}
