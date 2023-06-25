import pandas as pd

# Fonction pour enregistrer les identifiants et les mots de passe dans un fichier Excel
def enregistrer_utilisateur(nom_utilisateur, mot_de_passe):
    # Charger le fichier Excel existant ou créer un nouveau fichier
    try:
        df = pd.read_excel('comptes_utilisateurs.xlsx')
    except FileNotFoundError:
        df = pd.DataFrame(columns=['Nom d\'utilisateur', 'Mot de passe'])

    # Ajouter une nouvelle ligne avec les identifiants de l'utilisateur
    nouvelle_ligne = {'Nom d\'utilisateur': nom_utilisateur, 'Mot de passe': mot_de_passe}
    df = df.append(nouvelle_ligne, ignore_index=True)

    # Enregistrer les modifications dans le fichier Excel
    df.to_excel('comptes_utilisateurs.xlsx', index=False)

# Exemple d'utilisation de la fonction pour enregistrer un utilisateur
nom_utilisateur = 'johnDoe'
mot_de_passe = 'password123'
enregistrer_utilisateur(nom_utilisateur, mot_de_passe)
