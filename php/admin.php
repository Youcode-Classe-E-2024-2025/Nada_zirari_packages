<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Gestion des Packages</title>
</head>
<body class="bg-gradient-to-r from-blue-50 to-indigo-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <h1 class="text-2xl font-extrabold text-indigo-600">Gestion des Packages</h1>
            </div>
        </div>
    </header>

    <main class="py-10 bg-blue-200">
        <!-- Conteneur des boutons -->
        <div class="flex space-x-4 mb-6 justify-center">
            <button type="button" id="btn-package"
                    class="bg-green-500 hover:bg-indigo-600 text-white font-medium px-6 py-2 rounded-lg shadow-md">
                Ajouter le Package
            </button>
            <button type="button" id="btn-auteur"
                    class="bg-green-500 hover:bg-indigo-600 text-white font-medium px-6 py-2 rounded-lg shadow-md">
                Ajouter l'Auteur
            </button>
            <button type="button" id="btn-version"
                    class="bg-green-500 hover:bg-indigo-600 text-white font-medium px-6 py-2 rounded-lg shadow-md">
                Ajouter une Version
            </button>
        </div>

      
    
</body>
</html>
