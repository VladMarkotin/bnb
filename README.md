# bnb
                                                            Краткая инструкция:

ВАЖНО!
Для изменения параметров подключения к бд, перейдите в каталог core/db/ в файл init_file.php измените указанные параметры. Если подключение будет производиться не к локальному хосту, то в файле core/db/DBClass.php в методе init() нужно изменить строку "new \PDO('mysql:host=127.0.0.1:3306;dbname=' . DB, USER, PASS);", заменив <mysql:host=127.0.0.1:3306> на mysql:host="your host":"your port"

В папке core хранятся классы ядра проекта (классы работы с бд, классы работы с шаблонизатором(Twig), классы работы с роутером и классы исключений).

Чтобы создать новый роут, необходимо в файле core/router/web_routes.php в массив routes добавить новый элемент следующего содержания:
'<имя роута>' => array(
            'route' => '<имя роута>',
            'file' => 'app/controllers/<путь к файлу контроллера>',
            'class' => '<namespace\название класса>',
            'function' => '<название вызываемого метода>',
            'method' => '<метод передачи данных (get или post)>',
            'middleware' => '<данная настройка позволяет ограничить досьуп к роуту(в данном проекте указывайте anyone)>',
            'view' => '<файл с видом для контроллера (нужен только если метод передачи данных get)>',
        ),
 .htaccess файл перехватывает все запросы и отправляет их на index.php. Кроме того, .htaccess файл закрывает прямой доступ к папкам и файлам проекта (т.е пользователь не сможет получить доступ/скачать файлы с сервера, просто прописав путь к файлу/папке в адресной строке).      

Все контроллеры должны хранииться по адресу <app/controllers>
Имена всех контроллеров должны следовать следующим правилам:
<имя контроллера>Controller.php

Все модели должны храниться по адресу <app/models>
Для выполнения sql-запросов используется библиотека PDO. ORM в проекте не используется (хотя вполне можно было задействовать Eloquent). Я решил показать, что сам вполне могу писать sql-запросы разной сложности.

Все представления должны храниться по адресу <app/views/templates> (Этот путь можно изменить.Для этого необходимо перейти в core/template/TemplateClass.php и в методе init() поменять адрес хранения шаблонов)
