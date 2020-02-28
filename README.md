CachedWidget
============
Caching support for Yii2 widgets

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Run

```
php composer.phar require pozitronik/yii2-cachedwidget "dev-master"
```

or add

```
"pozitronik/yii2-cachedwidget": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply inherit any widgets from `pozitronik\widgets\CachedWidget` class instead of `yii\base\Widget` in your code.

CachedWidget has redefined `render()` method, that stores all rendered views in Yii2 global cache (with nested widgets, if its called in view file).

Widget handles correctly Yii2 view assets and inline resources, like js/css files or inline code inclusion.

Caching is **disabled** by default within YII_ENV_DEV environment (see $disable property).

Example
-------

```php
 class MyWidget extends \pozitronik\widgets\CachedWidget {
 // it is all, mostly
 }
 ```
