# Description of the framework

## Project structure

#### - core -> all important default classes that enables application to work properly (Application, Controller etc.)

#### - controllers -> all of your controllers for the application should go here. Every route should have a dedicated controller.

#### - models -> all of your models for the application should go here

#### - public -> in this directory is stored index.php, which has all the routes that are necessary for the application, aswell as:

```php
$app->run();
```

#### which is necessary for running your application.

#### You can make your own routes, and give them a http method:

```php
$app->router->get('/', [ControllerName::class, 'methodName']);
```

#### or if you need a post method for you route:

```php
$app->router->post('/', [ControllerName::class, 'methodName']);
```

#### - views ->in this directory is where you store your views file with html, css, and javascript code. By default, project uses bootstrap.

#### There is also layout directory where you can store your layouts files. You can have multiple layouts, and to apply them for a page you can use this code in your page controller:

```php
$this->setLayout('layoutName');
```

#### A default or "main" layout should always be called "main.php" in layouts directory.


