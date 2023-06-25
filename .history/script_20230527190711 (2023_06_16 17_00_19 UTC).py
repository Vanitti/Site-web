import pandas as pd

def enregistrer_utilisateur(nom_utilisateur, mot_de_passe):
    # Vérifier si le fichier Excel existe déjà
    try:
        df = pd.read_excel('comptes_utilisateurs.xlsx')
    except FileNotFoundError:
        # Si le fichier n'existe pas, créer un DataFrame vide
        df = pd.DataFrame(columns=['Nom d\'utilisateur', 'Mot de passe'])
    
    # Ajouter une nouvelle ligne avec les identifiants de l'utilisateur
    nouvelle_ligne = {'Nom d\'utilisateur': nom_utilisateur, 'Mot de passe': mot_de_passe}
    df = df.append(nouvelle_ligne, ignore_index=True)
    
    # Enregistrer le DataFrame dans un fichier Excel
    df.to_excel('comptes_utilisateurs.xlsx', index=False)

# Exemple d'utilisation de la fonction pour enregistrer un utilisateur
nom_utilisateur = 'johnDoe'
mot_de_passe = 'password123'
enregistrer_utilisateur(nom_utilisateur, mot_de_passe)
