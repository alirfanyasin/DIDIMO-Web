# DIDIMO WEBSITE

## Instalation
Setelah di clone repositorynya silahkan tulis perintah dibawah ini.
```sh
composer install
```
dan
```sh
npm install
```

Lalu copy file .env 
```sh
cp .env.example .env
```

Setelah itu lakukan generate key
```sh
php artisan key:generate
```

Jalankan migration dan seeder
```sh
php artisan migrate

php artisan db:seed

php artisan migrate:fresh --seed
```

## Running Project
```sh
php artisan serve
```

jika ingin menjalan kan vitenya
```sh
npm run dev
```


## Running Project with IoT
```sh
php artisan serve --host=ip_address
```

## Usage
Demo akun <br/><br/>
Email    : admin@didimo.test <br/>
Password : password <br/><br/>

Email    : user@didimo.test <br/>
Password : password
