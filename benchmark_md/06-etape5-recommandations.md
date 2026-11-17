# Étape 5 — Produire des recommandations

[← Sommaire](README.md)

## La stack recommandée

```
Visiteurs (Golfe et Europe)
        │
        ▼
Bunny CDN ─────────── images, CSS, JS
        │
        ▼
Infomaniak ────────── cache de pages, SSL, sauvegardes
        │
        ▼
WordPress 7.1 ─────── thème « alto » + plugin « alto-core »
        ▲
        │
Associés Alto ─────── back-office WordPress
```

### Briques retenues

- WordPress 7.1
- PHP 8.3
- Secure Custom Fields
- Polylang
- SEOPress
- GSAP
- Photo Sphere Viewer
- Brevo SMTP
- Webhook n8n

### Règles d'exploitation

- 6 extensions max.
- Mises à jour testées
- AVIF + lazy-load
- 2FA + HTTPS

## Verdict

**WordPress + Infomaniak + Bunny CDN**

| Indicateur | Valeur |
|------------|--------|
| Score pondéré | **4,05 / 5** (meilleur) |
| Coût | **< 25 € par mois** |
| Affichage principal visé (LCP) | **2,5 s** |
