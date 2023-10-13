<p align="center">
    <img src="docs/logo.png" alt="igitt logo">
</p>

# igitt api

igitt api is the demo project with igitt Laravel package

## Installation

- Clone repository
```
git clone https://github.com/hirenchhatbar/igitt-api.git
```
- Clone iggit Laravel package
```
cd igitt-api
git clone https://github.com/hirenchhatbar/igitt.git packages/hirenchhatbar/igitt
```
- Install PHP packages
```
php composer.phar install
```
- Import MySQL database
```sql
-- Create database
CREATE DATABASE igitt;
```

```sh
# import database
mysql -uroot -p igitt < packages/hirenchhatbar/igitt/src/database/dump/igitt.sql
```
- Setup MySQL connection
```sh
# .env

DB_CONNECTION=mysql
DB_HOST=172.28.0.50
DB_PORT=3306
DB_DATABASE=igitt
DB_USERNAME=root
DB_PASSWORD=root
DB_TABLE_PREFIX=igi_
```
- Start application
```
php artisan serve
```
- Check RESTful APIs on [Postman](https://www.postman.com/hirenchhatbar/workspace/igitt)