# Étape 4 — Analyser et comparer les résultats

[← Sommaire](README.md)

## 1. Point de départ : le site actuel d'Alto

`site-altodesignsolution.mystrikingly.com` — Lighthouse mobile, mesure de l'équipe

| Performances | Accessibilité | Bonnes pratiques | SEO |
|:---:|:---:|:---:|:---:|
| **50** | **93** | **50** | **85** |

- **12 problèmes en console**, dont 2 erreurs
- **Requêtes bloquées** : CORS + erreur 403 (New Relic)
- **6 polices préchargées**, mais inutilisées

> **Verdict :** un template lent (50/100 sur mobile), aucune immersion, aucune langue autre que l'anglais. Tout est à reconstruire.

*Sources : [1] entretien client · mesures Lighthouse et console Chrome du site actuel*

## 2. Concurrents : qui fait quoi ?

| Fonctionnalité | Yodezeen | Algedra | Studia 54 | Alto actuel | ★ Alto cible |
|----------------|:---:|:---:|:---:|:---:|:---:|
| Bilingue anglais / arabe | ✕ | ✓ | ✕ | ✕ | V2 |
| Vidéo sur les pages projet | ✕ | ✕ | ✕ | ✕ | ✓ |
| Vues 360° | ✕ | ✕ | ✕ | ✕ | ✓ |
| Parcours immersif au scroll | ✕ | ✕ | ✕ | ✕ | ✓ |
| Images optimisées (WebP / CDN) | ✓ | ✓ | ? | ? | ✓ |
| Framework moderne identifié | ? | ✓ | ? | ✕ | ✓ |
| Chiffres clés mis en avant | ✕ | ✕ | ✓ | ✕ | ✓ |
| Appel à l'action clair | ✓ | ✓ | ✓ | ✕ | ✓ |

*Légende : ✓ présent · ✕ absent · ? non identifiable · V2 prévu dans une deuxième version*

*Sources : [21] yodezeen.com · [22] algedra.ae · [23] studia-54.com · captures du 16/11/2026*

## 3. Forces et faiblesses

| Concurrent | Forces | Faiblesses |
|------------|--------|------------|
| Yodezeen | Grands visuels, données projet (lieu, style, surface) | Images fixes, meta description vide |
| Algedra | Anglais + arabe, Next.js, images Cloudinary | Textes longs, aucune vidéo ni 360° en page projet |
| Studia 54 | Chiffres clés (1 200 m², 32 pays), double CTA | Rendu catalogue, pas d'immersion |

> **Opportunité :** personne ne propose d'immersion. Vitesse + immersion = le terrain d'Alto.

*Sources : [21] yodezeen.com · [22] algedra.ae · [23] studia-54.com*

## 4. Performance : du site actuel à la cible

| Indicateur | Seuil max | Mesure |
|------------|:---:|--------|
| LCP | **2,5 s** | affichage principal |
| INP | **200 ms** | réactivité |
| CLS | **0,1** | stabilité |

Concurrents : scores à relever avec le même protocole ([étape 3](04-etape3-collecte.md)).

*Sources : [19] corewebvitals.io · mesure Lighthouse du site actuel*

## 5. Quel CMS ? Notation pondérée

| Critère (poids) | WordPress | Payload | Strapi | Webflow |
|-----------------|:---:|:---:|:---:|:---:|
| Architecture · 15 % | 4 | 4 | 3 | 3 |
| Technologies · 15 % | 4 | 4 | 4 | 2 |
| Performance · 20 % | 4 | 5 | 4 | 4 |
| Sécurité · 15 % | 3 | 4 | 4 | 4 |
| Scalabilité · 15 % | 4 | 3 | 3 | 3 |
| Coûts · 20 % | 5 | 3 | 2 | 2 |
| **Score pondéré** | **4,05** | 3,85 | 3,30 | 3,00 |

*Notes de 1 à 5 attribuées par l'équipe ; poids issus de l'entretien (vitesse et coûts d'abord). Les scores pondérés de Payload, Strapi et Webflow sont recalculés à partir du tableau (seul celui de WordPress figure sur la diapositive).*

> **WordPress l'emporte (4,05)** : Payload est plus rapide, mais WordPress gagne sur le coût et l'autonomie des associés.

*Sources : [1] entretien client · [8] W3Techs · [9] Patchstack · notation de l'équipe*

## 6. Hébergement et diffusion vers le Golfe

**Chaîne retenue :** Infomaniak (Suisse) → Bunny CDN → PoP Dubaï · Fujairah

- **Infomaniak · Suisse** — 100 % renouvelable · PUE 1,09
- **Bunny CDN** — 13 PoP Afrique / Moyen-Orient
- **PoP Dubaï · Fujairah** — images servies au plus près des clients

### Comparatif environnemental des hébergeurs

| Hébergeur | Énergie |
|-----------|---------|
| Infomaniak | 100 % renouvelable, sans clim |
| o2switch | Énergie renouvelable |
| PlanetHoster | FR pas encore 100 % renouvelable |
| OVHcloud | Non précisé |

*Sources : [14] Infomaniak · [15] Futura-Sciences · [16] LEPTIDIGITAL · [17] Digitiz (OVH, PlanetHoster : HT) · [18] bunny.net, CDNPlanet*

## 7. Quatre façons de créer l'immersion

| Technique | Outil | Poids | Décision |
|-----------|-------|-------|:---:|
| 3D temps réel | WebGL | Dizaines de Mo par villa | ✕ Écarté |
| Rendus au scroll | GSAP, gratuit | AVIF −50 % vs JPEG | ✓ Retenu |
| Vidéos courtes | `<video>` différée | Quelques Mo | ✓ Retenu |
| Vues 360° | Photo Sphere Viewer | Chargée au clic | ✓ Retenu |

**Déjà produit par le studio :**
- **Enscape** — panoramas 360°
- **Twinmotion** — 2K à 8K
- **Format** — équirectangulaire 2:1

*Sources : [2] Enscape · [3] Twinmotion · [4] Digital Spaces · [5] Photo Sphere Viewer · [6] Webflow · [7] WordPress.org*

## 8. Standards et bonnes pratiques du marché

| Chiffre | Signification |
|:---:|---------------|
| **2,5 s** | LCP maximum (Core Web Vitals) |
| **91 %** | des failles WordPress viennent des extensions |
| **5 h** | délai médian avant exploitation de masse |
| **−50 %** | de poids : AVIF vs JPEG |
| **40,2 %** | du web tourne sur WordPress |
| **8/12** | sortie de WordPress 7.2 |

*Sources : [7] WordPress.org · [8] W3Techs · [9] Patchstack · [10] DEV Community · [13] WordPress.org · [19] corewebvitals.io*
