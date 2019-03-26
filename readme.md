# Описание
данный пакет предназначе для интеграции диска Selectel в систему управления медиа файлами medialibrary для Laravel от spatie
он генерирует сылки на CDN если в базе указано disk = selectel

# install

    composer require pecherskiy-v/laravel-medialibrary-selectel-url-generator

добавить в config\medialibrary.php

    'selectel' => [
        /*
         * The domain that should be prepended when generating urls.
         */
        'domain' => 'https://' . env('SELECTEL_BUCKET') . '.selcdn.ru/' . env('SELECTEL_CONTAINER'),
    ],

добавить в config\filesystems.php

    'selectel' => [
        'driver' => 'selectel',
        'username' => env('SELECTEL_USERNAME'),
        'password' => env('SELECTEL_PASSWORD'),
        'container' => env('SELECTEL_CONTAINER'),
        'container_url' => env('SELECTEL_CONTAINER_URL'),
    ],

добавить в .env

    SELECTEL_BUCKET=ID CDN (https://{ID}.selcdn.ru/)
    SELECTEL_CONTAINER=container name
    SELECTEL_USERNAME=user name
    SELECTEL_PASSWORD=password
    SELECTEL_CONTAINER_URL=containet url

Laravel <= 5.4
Add ArgentCrusade\Flysystem\Selectel\SelectelServiceProvider::class to your providers list in config/app.php

    /*
    * Package Service Providers...
    */
    ArgentCrusade\Flysystem\Selectel\SelectelServiceProvider::class,


Info [laravel-medialibrary](https://docs.spatie.be/laravel-medialibrary/v7/introduction).
Info [flysystem-selectel](https://packagist.org/packages/argentcrusade/flysystem-selectel).