@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Catégories</h1>
        @auth
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('categories.create') }}" 
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ajouter une catégorie
                </a>
            @endif
        @endauth
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($categories as $category)
            <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow">
                <h2 class="text-xl font-semibold text-gray-800 mb-3">{{ $category->name }}</h2>
                <div class="flex space-x-2">
                    <a href="{{ route('categories.show', $category) }}" 
                       class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-3 rounded text-sm">
                        Voir
                    </a>
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ route('categories.edit', $category) }}" 
                               class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-3 rounded text-sm">
                                Modifier
                            </a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded text-sm"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">
                                    Supprimer
                                </button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        @endforeach
    </div>

    @if($categories->isEmpty())
        <div class="text-center py-8">
            <p class="text-gray-500 text-lg">Aucune catégorie trouvée.</p>
        </div>
    @endif
</div>
@endsection