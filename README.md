Projekt-Nr. 10
# Mini-Twitter

## Inhalt
1. Beschreibung
2. Installation
3. Dateien
4. Links

## 1. Beschreibung
Eine responsive Mini-Twitter App mit Laravel als API im Backend und vue.js fürs Frontend.

## 2. Starten
### 2.1. Docker Container hochfahren
```bash
sail up
```

### 2.2. NPM Server starten
```bash
npm run dev
```

### 2.3. Website aufrufen
```bash
http://localhost
```

### 2.4. PHPMyAdmin aufrufen
```bash
http://localhost:8080
```
## 3. Dateien
README.md
RETROSPECTIVE.md
app/
  Http/Controllers/
    TweetController.php
  Models/
    Tweet.php
database/
  migrations/
    2024_03_14_080151_create_tweets_table.php
resources/
  js/
    router.js
    pages/
      All.vue
      Edit.vue
      New.vue
      Single.vue
routes/
  api.php
