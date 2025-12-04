@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Header -->
    <div class="bg-white/80 backdrop-blur-sm border-b border-gray-200">
        <div class="container mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('categories.index') }}" 
                       class="bg-gray-100 hover:bg-gray-200 p-2 rounded-lg transition-colors duration-200">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </a>
                    <div>
                        <h1 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                            Modifier la catégorie
                        </h1>
                        <p class="text-gray-600 mt-1">Modifiez les informations de "{{ $category->name }}"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <!-- Main Form Card -->
            <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 overflow-hidden">
                <!-- Header Section -->
                <div class="bg-gradient-to-r from-amber-500 to-orange-600 p-8 text-white">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold">Modifier "{{ $category->name }}"</h2>
                            <p class="text-orange-100 mt-1">Mettez à jour les informations ci-dessous</p>
                        </div>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="p-8">
                    <form action="{{ route('categories.update', $category) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <!-- Name Field -->
                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    <span>Nom de la catégorie</span>
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       name="name" 
                                       id="name" 
                                       value="{{ old('name', $category->name) }}"
                                       class="w-full px-4 py-4 text-lg border-2 border-gray-200 rounded-2xl focus:border-amber-500 focus:ring-4 focus:ring-amber-100 transition-all duration-300 bg-white/50 backdrop-blur-sm @error('name') border-red-400 focus:border-red-500 focus:ring-red-100 @enderror"
                                       placeholder="Ex: Électronique, Vêtements, Sport...">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('name')
                                <div class="flex items-center space-x-2 mt-2">
                                    <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-red-600 text-sm font-medium">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <!-- Original Info -->
                        <div class="bg-amber-50/70 backdrop-blur-sm rounded-2xl p-4 border border-amber-100">
                            <h3 class="font-semibold text-amber-900 mb-2 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Informations actuelles
                            </h3>
                            <div class="text-amber-800 text-sm space-y-1">
                                <p><strong>Nom actuel:</strong> {{ $category->name }}</p>
                                <p><strong>Créée le:</strong> {{ $category->created_at ? $category->created_at->format('d/m/Y à H:i') : 'N/A' }}</p>
                                <p><strong>Modifiée le:</strong> {{ $category->updated_at ? $category->updated_at->format('d/m/Y à H:i') : 'N/A' }}</p>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6">
                            <button type="submit" 
                                    class="flex-1 bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-600 hover:to-orange-700 text-white font-semibold py-4 px-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mettre à jour</span>
                            </button>
                            <a href="{{ route('categories.show', $category) }}" 
                               class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-4 px-6 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span>Annuler</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="mt-8 bg-red-50/70 backdrop-blur-sm rounded-2xl p-6 border border-red-100">
                <h3 class="font-semibold text-red-900 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Zone de danger
                </h3>
                <p class="text-red-800 text-sm mb-4">Cette action est irréversible. Assurez-vous que c'est ce que vous voulez faire.</p>
                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center space-x-2"
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer définitivement cette catégorie ?')">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        <span>Supprimer définitivement</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection