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
        <h2 class="text-grey-400 text-2xl font-extrabold text-center"> Bonjour! choisir votre option:</h2><br><br>
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

        <!-- Section contenant les formulaires -->
        <div class="space-y-10">
            <!-- Formulaire pour Package -->
            <div id="formulaire-package" class="max-w-xl mx-auto bg-white rounded-xl shadow-lg p-8 hidden">
                <h2 class="text-3xl font-extrabold text-indigo-600 mb-6 text-center">Ajouter un Package</h2>
                <form action="" method="POST" class="space-y-6">
                    <input type="hidden" name="type" value="package">
                    <div>
                        <label for="Nom_Package" class="block text-sm font-medium text-gray-700 mb-1">Nom du Package</label>
                        <input type="text" name="Nom_Package" id="Nom_Package" placeholder="Entrez le nom du package"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm" required>
                    </div>
                    <div>
                        <label for="Desc_Package" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="Desc_Package" id="Desc_Package" rows="4" placeholder="Décrivez le package"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm" required></textarea>
                    </div>
                    <!-- Sélection de l'auteur -->
                    <div>
                        <label for="id_auteur" class="block text-sm font-medium text-gray-700 mb-1">Auteur</label>
                        <select name="id_auteur" id="id_auteur" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm" required>
                            <option value="">-- Sélectionnez un auteur --</option>
                            <?php
                            // Récupération des auteurs depuis la base de données
                            $conn = new mysqli('localhost', 'root', '', 'packages');
                            if ($conn->connect_error) {
                                die("Connexion échouée: " . $conn->connect_error);
                            }
                            $result = $conn->query("SELECT id_auteur, nom_auteur FROM auteur");
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['id_auteur']}'>{$row['nom_auteur']}</option>";
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                                class="bg-green-500 hover:bg-indigo-600 text-white font-medium px-6 py-2 rounded-lg shadow-md">
                            Ajouter le Package
                        </button>
                    </div>
                </form>
            </div>

            <!-- Formulaire pour Auteur -->
            <div id="formulaire-auteur" class="max-w-xl mx-auto bg-white rounded-xl shadow-lg p-8 hidden">
                <h2 class="text-3xl font-extrabold text-indigo-600 mb-6 text-center">Ajouter un Auteur</h2>
                <form action="" method="POST" class="space-y-6">
                    <input type="hidden" name="type" value="auteur">
                    <div>
                        <label for="nom_Auteur" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" name="nom_Auteur" id="nom_Auteur" placeholder="Entrez le nom de l'auteur"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm" required>
                    </div>
                    <div>
                        <label for="email_Auteur" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email_Auteur" id="email_Auteur" placeholder="Entrez l'email de l'auteur"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm" required>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                                class="bg-green-500 hover:bg-indigo-600 text-white font-medium px-6 py-2 rounded-lg shadow-md">
                            Ajouter l'Auteur
                        </button>
                    </div>
                </form>
            </div>

            <!-- Formulaire pour Version -->
            <div id="formulaire-version" class="max-w-xl mx-auto bg-white rounded-xl shadow-lg p-8 hidden">
                <h2 class="text-3xl font-extrabold text-indigo-600 mb-6 text-center">Ajouter une Version</h2>
                <form action="" method="POST" class="space-y-6">
                    <input type="hidden" name="type" value="version">
                    <div>
                        <label for="id_package" class="block text-sm font-medium text-gray-700 mb-1">Package</label>
                        <select name="id_package" id="id_package" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm" required>
                            <option value="">-- Sélectionnez un package --</option>
                            <?php
                            // Récupération des packages depuis la base de données
                            $conn = new mysqli('localhost', 'root', '', 'packages');
                            if ($conn->connect_error) {
                                die("Connexion échouée: " . $conn->connect_error);
                            }
                            $result = $conn->query("SELECT id_package, nom FROM package");
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['id_package']}'>{$row['nom']}</option>";
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div>
                        <label for="numero_version" class="block text-sm font-medium text-gray-700 mb-1">Numéro de Version</label>
                        <input type="text" name="numero_version" id="numero_version" placeholder="Entrez le numéro de version"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm" required>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                                class="bg-green-500 hover:bg-indigo-600 text-white font-medium px-6 py-2 rounded-lg shadow-md">
                            Ajouter la Version
                        </button>
                    </div>
                </form>
            </div>
        </div>
         <!-- Tableau des packages -->
         <div class="mt-8">
                    <h3 class="text-xl font-bold text-indigo-600 mb-4 ">Liste des Packages</h3>
                    <table class=" bg-white rounded-lg shadow">
                        <thead>
                            <tr class="bg-indigo-600 text-white">
                                <th class="px-4 py-2 text-left">Nom</th>
                                <th class="px-4 py-2 text-left">Description</th>
                                <th class="px-4 py-2 text-left">Auteur</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'packages');
                            $result = $conn->query("SELECT p.nom, p.description, a.nom_auteur FROM package p INNER JOIN auteur a ON p.id_auteur = a.id_auteur");
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td class='px-4 py-2'>{$row['nom']}</td><td class='px-4 py-2'>{$row['description']}</td><td class='px-4 py-2'>{$row['nom_auteur']}</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
    </main>
    
    <!-- JavaScript -->
    <script>
        const btnPackage = document.getElementById('btn-package');
        const btnAuteur = document.getElementById('btn-auteur');
        const btnVersion = document.getElementById('btn-version');
        const formPackage = document.getElementById('formulaire-package');
        const formAuteur = document.getElementById('formulaire-auteur');
        const formVersion = document.getElementById('formulaire-version');

        btnPackage.addEventListener('click', () => {
            formPackage.classList.remove('hidden');
            formAuteur.classList.add('hidden');
            formVersion.classList.add('hidden');
        });

        btnAuteur.addEventListener('click', () => {
            formAuteur.classList.remove('hidden');
            formPackage.classList.add('hidden');
            formVersion.classList.add('hidden');
        });

        btnVersion.addEventListener('click', () => {
            formVersion.classList.remove('hidden');
            formPackage.classList.add('hidden');
            formAuteur.classList.add('hidden');
        });
    </script>
 
   
    <?php  
     //Script PHP pour gérer les données
    include 'db.php';
    ?>
    
</body>
</html>
