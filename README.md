# YouTube Clone (youtube-clone)

### Tutorial series on how to build this

If you'd like a step by step guide on how to build this just **CLICK THE IMAGE BELOW**

[![GO TO JOHN WEEKS DEV TUTORIAL VIDEOS](https://user-images.githubusercontent.com/108229029/214010140-f6953878-5f55-4a6a-b2c8-b64014b16db5.png)](https://www.youtube.com/watch?v=KE5sQiHRZQg)

Come and check out my YOUTUBE channel for lots more tutorials -> https://www.youtube.com/@johnweeksdev

**LIKE**, **SUBSCRIBE**, and **SMASH THE NOTIFICATION BELL**!!!

## App Setup

```
git clone https://github.com/John-Weeks-Dev/youtube-clone.git

composer install 

cp .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate

composer require laravel/breeze vue --dev

php artisan breeze:install vue --ssr

php artisan serve
```

Create the DB
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=youtube-clone
DB_USERNAME=root
DB_PASSWORD=
```
Now migrate your DB
```
php artisan migrate

php artisan db:seed
```

Now run this command to start the project 
```
npm i

npm run dev
```

You should be good to go!

# Application Images
![Screenshot 2023-01-23 at 16 55 05](https://user-images.githubusercontent.com/108229029/214011782-719ff6ca-5307-4942-8ea2-2919e728a904.png)
![Screenshot 2023-01-23 at 16 55 23](https://user-images.githubusercontent.com/108229029/214011851-c528db5f-20d4-416f-852f-6091db17d106.png)
![Screenshot 2023-01-23 at 16 55 44](https://user-images.githubusercontent.com/108229029/214011872-8beb26da-569d-4713-a9f1-ced2c4aa7ffa.png)
![Screenshot 2023-01-23 at 16 55 54](https://user-images.githubusercontent.com/108229029/214011886-31f0546c-d16d-4654-880e-a80cd49f6bdf.png)
![Screenshot 2023-01-23 at 16 56 29](https://user-images.githubusercontent.com/108229029/214011897-31b94863-5394-40da-9e58-738df1d366bb.png)
![Screenshot 2023-01-23 at 16 56 43](https://user-images.githubusercontent.com/108229029/214011917-4a64f552-c809-45dc-aacb-d3caeb1b82bc.png)
![Screenshot 2023-01-23 at 16 56 58](https://user-images.githubusercontent.com/108229029/214011922-a05680ed-f85e-4137-8d2d-ce5b26070ef5.png)
![Screenshot 2023-01-23 at 16 57 47](https://user-images.githubusercontent.com/108229029/214011959-08c523d7-cac7-41a1-890f-4eba1a343dff.png)
![Screenshot 2023-01-23 at 16 57 57](https://user-images.githubusercontent.com/108229029/214011979-546cedb5-45b8-43da-a6f6-50d64376768d.png)

