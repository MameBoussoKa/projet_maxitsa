<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer Compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-4">
    <div class="bg-orange-500 p-6 rounded-2xl w-full max-w-2xl">
        <div class="bg-black p-8 rounded-xl">
            <h1 class="text-white text-3xl font-bold text-center mb-8">Créer Compte</h1>
            
            <form class="space-y-6" method="post">
                <!-- Première ligne: Prénom et Nom -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Prénom :</label>
                        <input type="text" name="prenom" placeholder="Prénom" class="w-full px-4 py-3 rounded-lg bg-white border-none outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200" required>
                    </div>
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Nom :</label>
                        <input type="text" name="nom" placeholder="Nom" class="w-full px-4 py-3 rounded-lg bg-white border-none outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200" required>
                    </div>
                </div>
                
                <!-- Deuxième ligne: Tél et Adresse -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Tél :</label>
                        <input type="tel" class="w-full px-4 py-3 rounded-lg bg-white border-none outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200">
                    </div>
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Adress :</label>
                        <input type="text" class="w-full px-4 py-3 rounded-lg bg-white border-none outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200">
                    </div>
                </div>
                
                <!-- Troisième ligne: CIN et Photos -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">CIN :</label>
                        <input type="text" class="w-full px-4 py-3 rounded-lg bg-white border-none outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200">
                    </div>
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Photos :</label>
                        <div class="flex gap-3">
                            <div class="w-16 h-16 bg-gray-300 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors duration-200 relative overflow-hidden">
                                <input type="file" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                                </svg>
                            </div>
                            <div class="w-16 h-16 bg-gray-300 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors duration-200 relative overflow-hidden">
                                <input type="file" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Champ Code secret -->
                <div>
                        <label class="block text-white text-sm font-medium mb-2">Code secret :</label>
                    <input type="password" name="code_secret" placeholder="Code secret" class="w-full px-4 py-3 rounded-lg bg-white border-none outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200" required>
                </div>

                <!-- Bouton Créer le compte -->
                <div class="flex justify-center pt-6">
                    <button type="submit" class="w-full bg-orange-500 text-white font-bold py-3 rounded hover:bg-orange-600 transition">
                    <a href="/projet_maxitsa/public/dashboard" class="text-orange-400 hover:underline font-semibold">

                        Créer le compte
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Gestion des uploads d'images
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const parent = input.parentElement;
                        parent.style.backgroundImage = `url(${e.target.result})`;
                        parent.style.backgroundSize = 'cover';
                        parent.style.backgroundPosition = 'center';
                        parent.querySelector('svg').style.display = 'none';
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        // Animation au focus des inputs
        document.querySelectorAll('input[type="text"], input[type="tel"]').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>