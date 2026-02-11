# FSTS Faculty Website | Site Web de la Faculté FSTS

<p align="center">
  <strong>🇫🇷 FRANÇAIS | 🇬🇧 ENGLISH</strong>
</p>

---

## 🇫🇷 Version Française

### À Propos du Projet

**Site Web Dynamique de la Faculté FSTS** est une application web moderne développée avec **Laravel 11** pour gérer et présenter le contenu institutionnel d'une faculté des sciences et techniques. Le site offre une interface publique pour les utilisateurs et un tableau de bord administratif complet pour la gestion du contenu.

### Objectif

Le projet vise à créer une plateforme centralisée pour:
- Publier et gérer les **actualités** et **annonces**
- Organiser les **événements** et les **calendriers**
- Gérer les **conseils et commissions** avec leurs membres
- Afficher les **départements** et **formations** proposées
- Publier les **conventions** et **accords** partenaires
- Regrouper les **laboratoires** et **équipes de recherche**
- Afficher les **statistiques** et **chiffres clés** de la faculté

### Fonctionnalités Principales

#### 🌐 Interface Publique
- **Accueil dynamique** avec actualités et annonces en vedette
- **Vue détaillée** des annonces et événements
- **Répertoire complet** des conseils et commissions avec membres
- **Section "À propos"** : histoire, chiffres clés, mot du doyen
- **Gestion des images** et médias associés aux contenus

#### 🔐 Panneau d'Administration
- **Authentification sécurisée** (auth & verified middleware)
- **Gestion complète du contenu**:
  - Ajouter, modifier, supprimer annonces, événements, membres
  - Créer et gérer conseils et commissions
  - Attribuer les membres aux commissions
- **Interface interactive** avec Livewire pour une expérience fluide
- **Tableau de bord** centralisé pour la gestion

### Stack Technologique

**Backend:**
- Laravel 11.9
- PHP 8.2+
- Eloquent ORM
- Laravel Breeze (authentification)
- Livewire 3.4 (composants interactifs)

**Frontend:**
- Tailwind CSS 3.1
- Vite 5.3 (bundler)
- Blade templating
- Alpine.js (pour l'interactivité)

**Base de Données:**
- Support SQLite / MySQL / PostgreSQL
- Migrations versionnées
- Relations Many-to-Many (Membres ↔ Commissions)

### Structure du Projet

```
site_web_fac/
├── app/
│   ├── Http/Controllers/        # Contrôleurs (AccueilController, etc.)
│   ├── Livewire/                # Composants Livewire (gestion dynamique)
│   │   ├── ComConsGestion.php   # Gestion des commissions
│   │   ├── MemberSelection.php  # Sélection des membres
│   │   ├── MembersTable.php     # Tableau des membres
│   │   └── MemberViewMore.php   # Détails des membres
│   ├── Models/                  # Modèles Eloquent
│   │   ├── Announcement.php
│   │   ├── Members.php
│   │   ├── Commissions_Conseil.php
│   │   ├── Evenement.php
│   │   ├── FstsChiffres.php
│   │   └── ComCons_Member.php
│   └── Providers/               # Service providers
├── database/
│   ├── migrations/              # Schéma de base de données
│   ├── seeders/                 # Population de données
│   └── factories/               # Factories de test
├── resources/
│   ├── views/                   # Templates Blade
│   │   ├── livewire/            # Composants Livewire
│   │   ├── view_admin/          # Pages admin
│   │   └── view_user/           # Pages publiques
│   ├── css/                     # Styles Tailwind
│   └── js/                      # Assets JavaScript
├── routes/
│   ├── web.php                  # Routes principales
│   └── auth.php                 # Routes d'authentification
└── public/
    ├── images/                  # Média uploadés
    └── index.php                # Point d'entrée
```

### Modèles de Données

**Announcement** (Annonce)
- Actualités et annonces avec images
- Affichables publiquement

**Members** (Membres)
- Professeurs et personnels
- Informations: nom, prénom, email, fonction, téléphone

**Commissions_Conseil** (Commissions & Conseils)
- Structures de gouvernance
- Relation many-to-many avec Members

**Evenement** (Événements)
- Calendrier d'événements
- Détails et dates

**FstsChiffres** (Statistiques)
- Données institutionnelles clés

### Lancer le Projet

**Prérequis:**
- PHP 8.2+
- Composer
- Node.js 18+
- Git

**Installation:**

```bash
# Cloner le projet
git clone <repository>
cd site_web_fac

# Installer les dépendances PHP
composer install

# Installer les dépendances JavaScript
npm install

# Configurer l'environnement
cp .env.example .env
php artisan key:generate

# Configurer la base de données dans .env
# DB_CONNECTION=sqlite / mysql / postgresql

# Lancer les migrations
php artisan migrate --seed

# Compiler les assets
npm run build

# Lancer le serveur local
php artisan serve
```

**Mode Développement:**

```bash
# Terminal 1: Serveur Vite (hot reload)
npm run dev

# Terminal 2: Serveur Laravel
php artisan serve
```

Accédez à l'application sur `http://localhost:8000`

### Accès Administration

- **URL**: `/dashboard`
- **Authentification**: Requise (login/register)
- **Fonctionnalités**: Gestion complète du contenu

### Statut du Projet

**En développement** - Fonctionnalités principales implémentées:
- ✅ Gestion des annonces
- ✅ Gestion des événements
- ✅ Gestion des commissions et membres
- ✅ Authentification admin
- ✅ Interface Livewire reactive
- 🔄 À compléter: formations doctorales, intégrations supplémentaires

### Auteurs

Développement collaboratif pour la Faculté FSTS

---

---

## 🇬🇧 English Version

### About the Project

**FSTS Faculty Dynamic Website** is a modern web application developed with **Laravel 11** to manage and present institutional content for a faculty of science and technology. The site offers a public interface for users and a complete administrative dashboard for content management.

### Objective

The project aims to create a centralized platform for:
- Publishing and managing **news** and **announcements**
- Organizing **events** and **calendars**
- Managing **councils and commissions** with their members
- Displaying **departments** and **offered programs**
- Publishing **conventions** and **partnership agreements**
- Grouping **laboratories** and **research teams**
- Displaying **statistics** and **key facts** about the faculty

### Main Features

#### 🌐 Public Interface
- **Dynamic homepage** with featured news and announcements
- **Detailed view** of announcements and events
- **Complete directory** of councils and commissions with members
- **"About" section** : history, key figures, dean's message
- **Image management** and media associated with content

#### 🔐 Administration Panel
- **Secure authentication** (auth & verified middleware)
- **Full content management**:
  - Add, edit, delete announcements, events, members
  - Create and manage councils and commissions
  - Assign members to commissions
- **Interactive interface** with Livewire for smooth experience
- **Centralized dashboard** for management

### Technology Stack

**Backend:**
- Laravel 11.9
- PHP 8.2+
- Eloquent ORM
- Laravel Breeze (authentication)
- Livewire 3.4 (interactive components)

**Frontend:**
- Tailwind CSS 3.1
- Vite 5.3 (bundler)
- Blade templating
- Alpine.js (for interactivity)

**Database:**
- SQLite / MySQL / PostgreSQL support
- Versioned migrations
- Many-to-Many relationships (Members ↔ Commissions)

### Project Structure

```
site_web_fac/
├── app/
│   ├── Http/Controllers/        # Controllers (AccueilController, etc.)
│   ├── Livewire/                # Livewire components (dynamic management)
│   │   ├── ComConsGestion.php   # Commission management
│   │   ├── MemberSelection.php  # Member selection
│   │   ├── MembersTable.php     # Members table
│   │   └── MemberViewMore.php   # Member details
│   ├── Models/                  # Eloquent models
│   │   ├── Announcement.php
│   │   ├── Members.php
│   │   ├── Commissions_Conseil.php
│   │   ├── Evenement.php
│   │   ├── FstsChiffres.php
│   │   └── ComCons_Member.php
│   └── Providers/               # Service providers
├── database/
│   ├── migrations/              # Database schema
│   ├── seeders/                 # Data population
│   └── factories/               # Test factories
├── resources/
│   ├── views/                   # Blade templates
│   │   ├── livewire/            # Livewire components
│   │   ├── view_admin/          # Admin pages
│   │   └── view_user/           # Public pages
│   ├── css/                     # Tailwind styles
│   └── js/                      # JavaScript assets
├── routes/
│   ├── web.php                  # Main routes
│   └── auth.php                 # Auth routes
└── public/
    ├── images/                  # Uploaded media
    └── index.php                # Entry point
```

### Data Models

**Announcement**
- News and announcements with images
- Publicly displayable

**Members**
- Professors and staff
- Information: name, first name, email, role, phone

**Commissions_Conseil** (Commissions & Councils)
- Governance structures
- Many-to-many relationship with Members

**Evenement** (Events)
- Event calendar
- Details and dates

**FstsChiffres** (Statistics)
- Key institutional data

### Running the Project

**Requirements:**
- PHP 8.2+
- Composer
- Node.js 18+
- Git

**Installation:**

```bash
# Clone the project
git clone <repository>
cd site_web_fac

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Configure database in .env
# DB_CONNECTION=sqlite / mysql / postgresql

# Run migrations
php artisan migrate --seed

# Compile assets
npm run build

# Start local server
php artisan serve
```

**Development Mode:**

```bash
# Terminal 1: Vite server (hot reload)
npm run dev

# Terminal 2: Laravel server
php artisan serve
```

Access the application at `http://localhost:8000`

### Admin Access

- **URL**: `/dashboard`
- **Authentication**: Required (login/register)
- **Features**: Full content management

### Project Status

**In development** - Main features implemented:
- ✅ Announcement management
- ✅ Event management
- ✅ Commission and member management
- ✅ Admin authentication
- ✅ Reactive Livewire interface
- 🔄 To complete: doctoral programs, additional integrations

### Authors

Collaborative development for FSTS Faculty
