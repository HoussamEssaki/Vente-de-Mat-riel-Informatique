@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">{{ $category->name }}</h1>
            <a href="{{ route('categories.index') }}" 
               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Retour à la liste
            </a>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nom de la catégorie:</label>
                <p class="text-gray-900 text-lg">{{ $category->name }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Créée le:</label>
                <p class="text-gray-600">{{ $category->created_at ? $category->created_at->format('d/m/Y à H:i') : 'Non défini' }}</p>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Dernière modification:</label>
                <p class="text-gray-600">{{ $category->updated_at ? $category->updated_at->format('d/m/Y à H:i') : 'Non défini' }}</p>
            </div>

            @auth
                @if(auth()->user()->role === 'admin')
                    <div class="flex space-x-2">
                        <a href="{{ route('categories.edit', $category) }}" 
                           class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            Modifier
                        </a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">
                                Supprimer
                            </button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</div>
@endsection