# Digital_builders

Benchmark technique Alto Design Solution (Atelier 11) : voir [benchmark_md/README.md](benchmark_md/README.md).

## Environnement de développement

La stack retenue dans le benchmark est WordPress 7.1, PHP 8.3, un thème `alto` et un plugin `alto-core`. En local, le site tourne avec [WordPress Playground CLI](https://wordpress.github.io/wordpress-playground/developers/local-development/wp-playground-cli). Il utilise SQLite, donc ni Docker ni MySQL ne sont nécessaires.

### Prérequis

- Node.js 20 ou plus récent

### Démarrer

```bash
npm install
npm run dev
```

Le site s'ouvre sur http://127.0.0.1:9400, avec une session administrateur déjà connectée.

Au démarrage, [blueprint.json](blueprint.json) :

- passe le site en français et active les permaliens ;
- installe Secure Custom Fields, Polylang et SEOPress ;
- active le thème `alto` et le plugin `alto-core`.

### Arborescence

```
wordpress/
├── themes/alto/          thème bloc (theme.json, templates, parts, assets)
└── plugins/alto-core/    type « Projet », champs SCF en JSON (acf-json/)
```

Ces deux dossiers sont montés directement dans WordPress. Toute modification est prise en compte quand on recharge la page.

### À savoir

- La base de données est recréée à chaque `npm run dev`. Les contenus de test ne sont pas conservés. En revanche, les groupes de champs SCF sont enregistrés dans `wordpress/plugins/alto-core/acf-json/` et versionnés avec Git.
- Le benchmark fixe une limite de 6 extensions au maximum.
