# Начало работы

#### Установить зависимости npm:

```sh
$ cd my-project
$ npm install gulp -g // Если у вас установлен gulp глобально, можно пропустить данную комманду 
$ npm install
```

#### Запуск сервера и сборка в продакшн:

```sh
$ npm run start    // Запуск сервера
$ npm run build    // Сборка проекта
```
#### Также можно напрямую запускать gulp комманды:

```sh
$ gulp serve                 // Запуск сервера
$ gulp build --production    // Сборка проекта
```
Другие комманды можно посмотреть в `gulpfile.js`

## Структура приложения 
```sh 
app 
    |- fonts 
    |- images 
        |- samples
        |- svg-src 
    |- scripts 
    |- styles
        |- components 
    |- templates
        |- data
        |- layouts
        |- partials
        |- modules 
 ```

