
.htaccess
´´´
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule api/v1/(.*)$ api/v1/api.php?request=$1 [QSA,NC,L]
´´´
