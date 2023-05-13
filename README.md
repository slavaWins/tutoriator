<p align="center">
<img src="info/logo.jpg">
</p>
 
## Tutoriator
Кароч изи пакет 
   

## Установка из composer

```  
composer require slavawins/tutoriator
```

 Опубликовать js файлы, вью и миграции необходимые для работы пакета.
Вызывать команду:
```
php artisan vendor:publish --provider="Tutoriator\Providers\TutoriatorServiceProvider"
``` 

 В роутере routes/web.php удалить:
 добавить
 ```
    \Tutoriator\Library\TutoriatorRoute::routes();
 ```

Выполнить миграцию
 ```
    php artisan migrate 
 ``` 
