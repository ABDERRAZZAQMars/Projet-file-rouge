# Projet-fil-rouge
## Application de gestion des transports privé

# Contexte Du Projet
Je veux créer un site Web où les utilisateurs peuvent créer un compte, puis se connecter pour demander un transport privé. 
Le site Web utilisera des bases de données pour stocker les données de connexion des utilisateurs, ainsi que pour stocker les infos de transporteur.

# Les Pages Requises Sont Les Suivantes :
<li>	Page d'accueil.</li>
<li>	Pages de connexion et d'inscription.</li>
<li>	Page de profil.</li>
<li>	Page admin.</li>
<li>	Page Liste des transporteurs et formulaire de demande un service.</li> 
<li>	Page de suivi.</li>
<li>	Page transporteurs.</li>

# Mise En Page Et Briefing
### La mise en page est la suivante :

##	Page d'accueil.
Cette page contiendra les infos de site web et nos services.

##	Pages de connexion :
La connexion est basée sur le nom d'utilisateur et le mot de passe, le contenu est donc un simple formulaire de connexion, avec des champs pour le nom d'utilisateur et le mot de passe, et un bouton de connexion. La dernière phrase est un lien d'appel à l'action "S'inscrire".
Après s'être connecté, l'utilisateur est redirigé vers la page Profil.

##	Pages d'inscription :
Le contenu est le formulaire d'inscription, avec les entrées suivantes :
<li>Nom d'utilisateur.</li>
<li>Email.</li>
<li>Téléphone.</li>
<li>Mot de passe.</li>
<li>Vérification du mot de passe.</li>
</br>
Les comptes enregistrés doivent également conserver la date d'inscription. Après s'être inscrit, l'utilisateur est redirigé vers la page Profil.

## Page de profil :
Cette page contiendra une salutation, les données du profil et l'heure de connexion à la session. Alors que le nom d'utilisateur et la date d'inscription sont stockés dans la base de données, l'heure de connexion à la session peut être stockée dans la session actuelle.

## Le formulaire de contact aura les noms de champs suivants :
<li>Nom : obligatoire - au moins deux caractères..</li>
<li>Téléphone : obligatoire..</li>
<li>E-mail : obligatoire - doit être validé.</li>
<li>Adresse : obligatoire - 255 caractères maximum.</li>

## Page de suivi :
L'utilisateur saisit le numéro de commande puis regarde l'étape du service.


## Page admin :
<li>Création de profil du chauffeur (d'ajout/modification/supprimer).</li>
<li>Gérer les commande.</li>
<li>Supprimer les comptes de utilisateurs.</li>

## Page transporteurs:
Accepter ou refuser les commandes.

# Exigences Technologiques
<li>Conception UML (diagramme use case, séquence et classe).</li>
<li>Bootstrap pour le front.</li>
<li>PHP OOP pour le backend (pensez à utiliser regex pour la validation du formulaire).</li>
<li>JavaScript pour la validation des formulaires, modal ...</li>
<li>Base de donnée relationnelle pour le type de base de donnée (MySQL).</li>









