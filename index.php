<?php
// Page d'accueil principale
?>
<!DOCTYPE html>
<html lang="fr-CH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nat'Patoune - Garde de chats Vaud</title>
    <link rel="stylesheet" href="themes/sky/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <?php include 'includes/nav.php'; ?>
    <?php include 'includes/hero.php'; ?>
    <?php include 'includes/services.php'; ?>
    <?php include 'includes/checklist.php'; ?>
    <?php include 'includes/blog.php'; ?>
    <?php include 'includes/contact.php'; ?>
    
    <footer class="wrapper text-center" style="background: rgba(0,0,0,0.3);">
        <div class="inner">
            <p>&copy; 2026 Nat'Patoune. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Script simple pour les modales
        function openModal(id) { document.getElementById(id).style.display = "flex"; }
        function closeModal(id) { document.getElementById(id).style.display = "none"; }
        window.onclick = function(e) { if(e.target.className == 'modal') e.target.style.display = "none"; }
    </script>

</body>
</html>
