# **Documentation du projet API REST Laravel pour la gestion des QR codes**

Ce projet est une API REST développée avec Laravel, permettant la gestion des QR codes avec des fonctionnalités de CRUD, de génération dynamique de QR codes, d'authentification des utilisateurs, et de recherche/pagination. Le projet utilise Docker pour une configuration homogène.

## **Prérequis**

- **Docker** et **Docker Compose** installés sur votre machine
- **Git** pour cloner le projet

---

## **Installation et Configuration**

### Étapes pour configurer l’environnement

1. **Cloner le dépôt** :
    ```bash
    git clone git clone https://github.com/ghost0143/apiCodeQR
    cd apiCodeQR
    ```

2. **Configuration de l’environnement** :
    - Le fichier .env n'est plus dans .gitignore! Du coup, vous y avez accès.

### **Docker et Docker-Compose**

3. **Lancer Docker Compose** :
    Dans le répertoire du projet, exécutez la commande suivante pour construire et démarrer les conteneurs :
    ```bash
    docker-compose up --build
    ```

4. **Exécuter les migrations et générer les clés** :
    ```bash
    php artisan migrate
    ```

---

## **Documentation**

### **1. Authentification des utilisateurs**

**Enregistrement**
- **Méthode** : `POST`
- **Route** : `/api/register`
- **Description** : Enregistre un nouvel utilisateur.

**Connexion**
- **Méthode** : `POST`
- **Route** : `/api/login`
- **Description** : Authentifie un utilisateur et renvoie un token JWT.

**Déconnexion**
- **Méthode** : `POST`
- **Route** : `/api/logout`
- **Description** : Déconnecte l'utilisateur en supprimant son token JWT.

### **2. Gestion des QR codes**

**Création d’un QR code**
- **Méthode** : `POST`
- **Route** : `/api/qrcodes`
- **Description** : Crée un nouveau QR code.

**Afficher tous les QR codes**
- **Méthode** : `GET`
- **Route** : `/api/qrcodes`
- **Description** : Renvoie la liste de tous les QR codes avec pagination.

**Afficher un QR code spécifique**
- **Méthode** : `GET`
- **Route** : `/api/qrcodes/{id}`
- **Description** : Renvoie les détails d’un QR code spécifique.

**Mettre à jour un QR code**
- **Méthode** : `PUT`
- **Route** : `/api/qrcodes/{id}`
- **Description** : Met à jour un QR code existant.

**Supprimer un QR code**
- **Méthode** : `DELETE`
- **Route** : `/api/qrcodes/{id}`
- **Description** : Supprime un QR code spécifique.

### **3. Recherche et Pagination**

**Rechercher un QR code**
- **Méthode** : `GET`
- **Route** : `/api/qrcodes/search`
- **Paramètre** : `?query=terme`
- **Description** : Effectue une recherche parmi les QR codes par auteur ou données.

**Pagination des QR codes**
- **Méthode** : `GET`
- **Route** : `/api/qrcodes?page={numero}`
- **Description** : Renvoie une liste de QR codes avec pagination.

### **4. Génération dynamique de QR Codes**

**Générer un QR code**
- **Méthode** : `GET`
- **Route** : `/api/qrcodes/generate/{data}`
- **Description** : Génère une image QR code en fonction des données fournies dans l'URL.

---

## **Structure du projet**

### **Contrôleurs**

- **AuthController** : pour l’authentification (`register`, `login`, `logout`)
- **QrcodeController** : pour les fonctionnalités CRUD de base des QR codes
- **QrcodeGenerationController** : pour la génération dynamique des QR codes
- **QrcodeSearchController** : pour les fonctions de recherche et de pagination

---

## **Exécuter les Tests**

Pour exécuter les tests de l'application, entrez dans le conteneur PHP et lancez :
```bash
php artisan test
```

## **Conclusion**

Cette API REST en Laravel est prête à l’emploi pour la gestion des QR codes, avec des fonctionnalités telles que le CRUD, la recherche, la pagination, la génération dynamique de QR codes et l'authentification. Utilisez cette documentation pour démarrer rapidement et gérer efficacement votre environnement avec Docker.





