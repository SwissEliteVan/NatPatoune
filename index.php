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

    <div id="topMenu">
        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#services">Formules</a>
            <a href="#checklist">Checklist</a>
            <a href="#blog">Conseils</a>
            <a href="#contact" class="btn-reserve">Réserver</a>
        </nav>
    </div>

    <div id="accueil" class="wrapper">
        <div class="inner text-center">
            <span style="background:rgba(255,255,255,0.2); padding:5px 15px; border-radius:20px; font-size:0.8em; text-transform:uppercase;">Service Premium Vaud</span>
            <br><br>
            <h1>Garde de chats à domicile</h1>
            <p>Partez l'esprit tranquille. Soins, jeux et affection pour votre chat.<br>
            Morges, Ouest lausannois, Lausanne et Échallens.</p>
            <br>
            <a href="#services" class="button">Voir les tarifs</a>
            <a href="#contact" class="button outline">Me contacter</a>
        </div>
    </div>

    <div id="services" class="wrapper dark">
        <div class="inner">
            <h2>Mes Formules</h2>
            <div class="grid-3">
                <div class="card text-center">
                    <span class="card-icon"><i class="fas fa-cat"></i></span>
                    <h3>Visite Essentielle</h3>
                    <p>30 minutes. Idéal pour les chats indépendants.</p>
                    <ul class="checklist-list" style="text-align:left; margin:20px 0;">
                        <li><i class="fas fa-check"></i> Eau & Nourriture</li>
                        <li><i class="fas fa-check"></i> Litière propre</li>
                        <li><i class="fas fa-check"></i> Nouvelles par message</li>
                    </ul>
                    <strong>dès 25 CHF</strong>
                </div>
                <div class="card text-center" style="background:rgba(255,255,255,0.25); border:2px solid #fff;">
                    <span class="card-icon"><i class="fas fa-heart"></i></span>
                    <h3>Visite Câlins</h3>
                    <p>45 minutes. Le favori des chats joueurs !</p>
                    <ul class="checklist-list" style="text-align:left; margin:20px 0;">
                        <li><i class="fas fa-check"></i> Tout l'essentiel</li>
                        <li><i class="fas fa-check"></i> Jeux & Caresses</li>
                        <li><i class="fas fa-check"></i> Brossage si apprécié</li>
                    </ul>
                    <strong>dès 35 CHF</strong>
                </div>
                <div class="card text-center">
                    <span class="card-icon"><i class="fas fa-pills"></i></span>
                    <h3>Soins Spécifiques</h3>
                    <p>Pour chats âgés ou médicalisés.</p>
                    <ul class="checklist-list" style="text-align:left; margin:20px 0;">
                        <li><i class="fas fa-check"></i> Prise de médicaments</li>
                        <li><i class="fas fa-check"></i> Surveillance accrue</li>
                        <li><i class="fas fa-check"></i> Douceur & Patience</li>
                    </ul>
                    <strong>Sur Devis</strong>
                </div>
            </div>
        </div>
    </div>

    <div id="checklist" class="wrapper">
        <div class="inner">
            <h2>Prêts pour le départ ?</h2>
            <p class="text-center">Voici les essentiels à préparer pour un cat-sitting serein.</p>
            
            <div class="grid-2">
                <div class="card">
                    <h3><i class="fas fa-home"></i> Logement</h3>
                    <ul class="checklist-list">
                        <li><i class="fas fa-check"></i> Clés testées ou code d'accès</li>
                        <li><i class="fas fa-check"></i> Coordonnées d'un proche (ami/voisin)</li>
                        <li><i class="fas fa-check"></i> Consignes pour les plantes / courrier</li>
                    </ul>
                </div>
                <div class="card">
                    <h3><i class="fas fa-paw"></i> Pour votre Chat</h3>
                    <ul class="checklist-list">
                        <li><i class="fas fa-check"></i> Carnet de santé à disposition</li>
                        <li><i class="fas fa-check"></i> Stock suffisant (litière, nourriture)</li>
                        <li><i class="fas fa-check"></i> Caisse de transport accessible</li>
                        <li><i class="fas fa-check"></i> Jouets préférés sortis</li>
                    </ul>
                </div>
            </div>
            <div class="text-center" style="margin-top:30px;">
                <a href="checklist.html" target="_blank" class="button">Ouvrir la checklist interactive</a>
            </div>
        </div>
    </div>

    <div id="blog" class="wrapper dark">
        <div class="inner">
            <h2>Le Guide du Chat Heureux</h2>
            <p class="text-center">Mes conseils d'experte pour le bien-être de vos compagnons.</p>
            <div class="grid-3">
                <article class="card">
                    <h3>Garde à domicile vs Pension</h3>
                    <p>Pourquoi le chat préfère rester chez lui ? Moins de stress, pas de transport, et ses repères conservés.</p>
                    <button onclick="openModal('art1')" style="background:none; border:none; color:#fff; text-decoration:underline; cursor:pointer; font-weight:bold; padding:0;">Lire l'article</button>
                </article>
                <article class="card">
                    <h3>Vacances tranquilles</h3>
                    <p>La garde à domicile dans le canton de Vaud permet de profiter de ses vacances sans se soucier de son animal.</p>
                    <button onclick="openModal('art2')" style="background:none; border:none; color:#fff; text-decoration:underline; cursor:pointer; font-weight:bold; padding:0;">Lire l'article</button>
                </article>
                <article class="card">
                    <h3>Chat âgé ou anxieux</h3>
                    <p>Les chats âgés ont des habitudes ancrées. Un changement de routine peut accentuer des pathologies.</p>
                    <button onclick="openModal('art3')" style="background:none; border:none; color:#fff; text-decoration:underline; cursor:pointer; font-weight:bold; padding:0;">Lire l'article</button>
                </article>
            </div>
        </div>
    </div>

    <div id="contact" class="wrapper">
        <div class="inner">
            <h2>Me Contacter</h2>
            <div style="max-width:700px; margin:0 auto;">
                <form action="#" method="POST">
                    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                        <input type="text" name="nom" placeholder="Nom & Prénom" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                        <input type="text" name="ville" placeholder="Ville" required>
                        <input type="tel" name="telephone" placeholder="Téléphone" required>
                    </div>
                    <select name="chats">
                        <option>1 chat</option>
                        <option>2 chats</option>
                        <option>3+ chats</option>
                    </select>
                    <textarea name="message" rows="4" placeholder="Votre message..." required></textarea>
                    <div class="text-center">
                        <button type="submit" class="button">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="newsletter" class="wrapper dark text-center">
        <div class="inner">
            <div style="background:rgba(255,255,255,0.1); padding:30px; border-radius:15px; max-width:600px; margin:0 auto;">
                <h3>Restons en contact</h3>
                <p>Recevez mes conseils félins (1 email/mois max).</p>
                <form action="#">
                    <input type="email" placeholder="Votre email" required>
                    <label style="font-size:0.9em; display:block; text-align:left; margin-bottom:10px;">
                        <input type="checkbox" style="width:auto; margin-right:10px;" required> J'accepte de recevoir l'infolettre.
                    </label>
                    <button type="submit" class="button" style="width:100%;">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="inner">
            <p>&copy; 2026 Nat'Patoune - Tous droits réservés.</p>
            <p><a href="mailto:miaou@nat-patoune.ch">miaou@nat-patoune.ch</a> | <a href="tel:+41787685047">+41 78 768 50 47</a></p>
        </div>
    </footer>

    <div id="art1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('art1')">&times;</span>
            <h2>Garde à domicile vs Pension</h2>
            <p>Le chat est un animal territorial. Pour lui, son domicile est son repère de sécurité principal.</p>
            <p><strong>Avantages du domicile :</strong></p>
            <ul>
                <li>Pas de stress lié au transport (caisse, voiture).</li>
                <li>Pas de confrontation avec d'autres animaux inconnus.</li>
                <li>Maintien de ses habitudes alimentaires et de sommeil.</li>
            </ul>
        </div>
    </div>

    <div id="art2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('art2')">&times;</span>
            <h2>Vacances tranquilles</h2>
            <p>Partir en vacances ne devrait pas être source d'angoisse. Dans le canton de Vaud, je propose un service sur-mesure.</p>
            <p>Au-delà de l'eau et des croquettes, mes visites incluent :</p>
            <ul>
                <li>Des sessions de jeu pour dépenser son énergie.</li>
                <li>Des câlins s'il est demandeur.</li>
                <li>L'envoi de photos et vidéos quotidiennes.</li>
                <li>La relève du courrier.</li>
            </ul>
        </div>
    </div>

    <div id="art3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('art3')">&times;</span>
            <h2>Chats âgés ou anxieux</h2>
            <p>Avec l'âge, les chats deviennent moins tolérants au changement. Un chat senior peut cesser de manger s'il est déplacé.</p>
            <p>Mon approche : douceur, patience, et administration de traitements médicaux sur ordonnance si nécessaire.</p>
        </div>
    </div>

    <script>
        function openModal(id) { document.getElementById(id).style.display = "flex"; }
        function closeModal(id) { document.getElementById(id).style.display = "none"; }
        window.onclick = function(e) { if(e.target.className == 'modal') e.target.style.display = "none"; }
    </script>

</body>
</html>
