
##.htaccess
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule dinner/api/(.*)$ dinner/api/main.php?request=$1 [R=307,NC,L]
```
## API
Get JSON array of all users
```
GET dinner/api/users/
// Output
// ["Anders", "Jens", "Kristine"]
```
Get user object
```
GET dinner/api/user/[name]
// Output
// {"name":"Anders","balance":200}
```
Update user object
```
PUT dinner/api/user/[name]
// Input
// {"name":"Anders","balance":-10000}
```

