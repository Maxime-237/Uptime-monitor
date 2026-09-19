# Uptime Monitor

<p align="center">
  <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1400&q=80" alt="Dashboard de monitoring" width="100%" />
</p>

<p align="center">
  <a href="#-fonctionnalites"><img src="https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white" alt="PHP 8.3" /></a>
  <a href="#-stack-technique"><img src="https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel&logoColor=white" alt="Laravel 13" /></a>
  <a href="#-stack-technique"><img src="https://img.shields.io/badge/Vue-3-4FC08D?logo=vue.js&logoColor=white" alt="Vue 3" /></a>
  <a href="#-stack-technique"><img src="https://img.shields.io/badge/Inertia-3-0B1026?logo=inertia&logoColor=white" alt="Inertia" /></a>
</p>

Uptime Monitor est un projet pédagogique conçu pour explorer les bases du monitoring de sites web avec Laravel, Vue.js et Inertia. L’objectif est de comprendre comment suivre l’état d’un service, enregistrer des historiques de vérification et offrir une interface simple pour gérer plusieurs sites.

Ce projet est pensé comme un support d’apprentissage, idéal pour pratiquer les concepts de :

- développement full-stack avec Laravel
- architecture MVC et modèles de données
- job queue et traitement asynchrone
- HTTP requests avec gestion des erreurs et timeouts
- UI moderne avec Vue.js / Inertia
- gestion utilisateur et authentification

---

## ✨ Fonctionnalités

- ajout de sites à surveiller
- enregistrement de l’URL et du nom du site
- vérification de disponibilité HTTP
- collecte du statut : `up` ou `down`
- enregistrement du code HTTP et du temps de réponse
- historique des contrôles par site
- interface de tableau de bord simple et lisible
- système d’authentification utilisateur intégré
- architecture prête pour extension : alertes, graphiques, planification, notifications

---

## 🧠 Objectif pédagogique

Ce projet sert à illustrer les mécanismes fondamentaux de l’uptime monitoring :

1. un utilisateur ajoute un site à surveiller ;
2. un job vérifie périodiquement l’URL ;
3. la réponse HTTP est analysée ;
4. le résultat est stocké dans la base ;
5. l’interface affiche l’historique de l’état du service.

Il est particulièrement utile pour apprendre la logique de background jobs, les requêtes HTTP, les modèles Eloquent, ainsi que le flux de données entre backend et interface.

---

## 🛠️ Stack technique

- PHP 8.3
- Laravel 13
- Vue.js 3
- Inertia.js
- Tailwind CSS
- SQLite (configuration par défaut)
- Pest pour les tests
- Laravel Queue

---

## 📸 Captures d’écran

### Dashboard

![Dashboard Uptime Monitor](https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1400&q=80)

### Vue d’ensemble du projet

![Interface de surveillance](https://images.unsplash.com/photo-1558494949cc5c4b8a5f1d5a7d?auto=format&fit=crop&w=1400&q=80)

> Les captures ci-dessus sont des exemples visuels de style. Vous pouvez remplacer les liens par vos propres captures une fois le projet fini et prêt à être publié.

---

## 📁 Structure du projet

```bash
.
├── app/
│   ├── Http/
│   ├── Jobs/
│   ├── Models/
│   └── Providers/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   └── js/
├── routes/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
├── vite.config.ts
├── README.md
└── ...
```

---

## 🚀 Installation

### Prérequis

- PHP 8.3+
- Composer
- Node.js 18+
- npm ou pnpm
- Base de données SQLite (par défaut)

### Étapes

1. Clone le projet

```bash
git clone https://github.com/votre-utilisateur/uptime-monitor.git
cd uptime-monitor
```

2. Installez les dépendances PHP

```bash
composer install
```

3. Configurez l’environnement

```bash
cp .env.example .env
php artisan key:generate
```

4. Installez les dépendances front

```bash
npm install
```

5. Lancez les migrations

```bash
php artisan migrate
```

6. Démarrez le projet

```bash
composer run dev
```

Le projet est ensuite accessible sur :

```bash
http://localhost:8000
```

---

## 🧪 Scripts utiles

### Backend

```bash
php artisan serve
php artisan migrate
php artisan test
```

### Frontend

```bash
npm run dev
npm run build
npm run lint:check
```

### Vérification complète

```bash
composer run test
```

---

## 🧾 Modèle de données

Le projet repose principalement sur deux tables :

- `websites` : nom, URL, utilisateur associé
- `checks` : statut, code HTTP, temps de réponse, date de vérification

Cette logique permet d’analyser l’état d’un site dans le temps et d’ajouter plus tard des graphiques de disponibilité, des alertes ou un historique plus détaillé.

---

## 🔮 Améliorations possibles

- ajout de notifications email / Discord / Slack
- création de graphiques d’historique de disponibilité
- planification plus avancée des vérifications
- ajout d’alertes si un site reste en panne
- gestion des domaines et des catégories
- intégration de métriques sur la réactivité du site

---

## 🤝 Contribution

Ce projet étant avant tout éducatif, les contributions sont les bienvenues. Vous pouvez :

- corriger des bugs
- améliorer le design
- ajouter des fonctionnalités
- proposer des tests
- documenter le code

Pour proposer une modification :

```bash
git checkout -b feature/ma-modification
git commit -m "Ajout de ma fonctionnalité"
git push origin feature/ma-modification
```

---

## 📜 Licence

Ce projet est sous licence MIT.

---

## 🙌 À propos

Uptime Monitor est un projet de démonstration pensé pour apprendre les bases du monitoring web, du développement Laravel, de la gestion des jobs et de la création d’une application de suivi de service.

Si vous l’utilisez dans un cadre pédagogique ou de découverte technique, n’hésitez pas à le personnaliser et à l’étendre.

---

<p align="center">
  <strong>Projet éducatif • Laravel • Vue.js • Inertia</strong>
</p>
