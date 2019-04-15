# Front-end-plugin med olika användbara funktioner

## Hur man använder Region Hallands plugin "region-halland-mixed-functions"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-mixed-functions".


## Användningsområde

Denna plugin innehåller flera användbara funktioner som gör nytta i front-end


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-mixed-functions.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-mixed-functions.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-mixed-functions": "1.0.0"
},
```


## Använda funktionen "region_halland_remove_shortcode" på en sida via "Blade"

```sh
<p>
  {{ region_halland_remove_shortcode($page->post_content) }}
</p>
```

## Använda funktionen "region_halland_switch_http_https" på en sida via "Blade"

- Beroende av värde för env-variabeln env('WP_ENV')
- Om denna är satt till 'production' ersätts alla http med https
- Är värdet något annan ersätts alla https med http

```sh
<p>
  {{ region_halland_switch_http_https($page->url) }}
</p>
```


## Versionhistorik

### 1.1.0
- Funktion för att ersätta http med https och tvärtom beroende på värde i env('WP_ENV')

### 1.0.0
- Första version
- Funktion för att ta bort shortcodes från en text
