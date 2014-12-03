
.htaccess
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule dinner/api/(.*)$ dinner/main.php?request=$1 [QSA,NC,L]
```
