<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte - Interface de Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #1f2937 0%, #374151 100%);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-orange-500 p-8 rounded-2xl shadow-2xl max-w-md w-full">
        <div class="bg-gray-900 rounded-xl p-8 text-white">
            <h1 class="text-2xl font-bold text-center mb-8">Maxit-<span class="text-orange-500">SA</span> </h1>
            
            <form class="space-y-6">
                <div>
                    <label for="telephone" class="block text-sm font-medium mb-2">Téléphone</label>
                    <input 
                        type="tel" 
                        id="telephone" 
                        name="telephone"
                        class="w-full px-4 py-3 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        placeholder="Entrez votre numéro de téléphone"
                    >
                </div>
                
                <div>
                    <label for="code-secret" class="block text-sm font-medium mb-2">Code secret</label>
                    <input 
                        type="password" 
                        id="code-secret" 
                        name="code-secret"
                        class="w-full px-4 py-3 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        placeholder="Entrez votre code secret"
                    >
                </div>
                
                <button 
                    type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2 focus:ring-offset-gray-900"
                >
             <a href="/projet_maxitsa/public/dashboard" class="text-orange-400 hover:underline font-semibold">

                    Connecter
                </button>
            </form>
            
            <div class="mt-6 text-center">
                <a href="/projet_maxitsa/public/register" class="text-orange-400 hover:underline font-semibold">
                    Créer un compte
                </a>
            </div>
        </div>
    </div>

    <script>
        // Ajout d'une animation au focus des champs
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.classList.add('transform', 'scale-105');
            });
            
            input.addEventListener('blur', function() {
                this.classList.remove('transform', 'scale-105');
            });
        });

        // Gestion du formulaire
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const telephone = document.getElementById('telephone').value;
            const codeSecret = document.getElementById('code-secret').value;
            
            if (!telephone || !codeSecret) {
                alert('Veuillez remplir tous les champs');
                return;
            }
            
            // Animation du bouton lors de la soumission
            const button = this.querySelector('button');
            button.textContent = 'Connexion...';
            button.disabled = true;
            
            setTimeout(() => {
                button.textContent = 'Connecter';
                button.disabled = false;
                alert('Connexion simulée réussie !');
            }, 2000);
        });
    </script>
</body>
</html>