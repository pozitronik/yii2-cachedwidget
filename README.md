CachedWidgets
===========================
Caching support for Yii2 widgets

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).


Add

```
{
	"type": "vcs",
	"url": "https://github.com/pozitronik/yii2-cachedwidget"
} 
```

to the repositories section of your `composer.json` file.

Either run

```
php composer.phar require --prefer-dist pozitronik/yii2-cachedwidget "*"
```

or add

```
"pozitronik/yii2-cachedwidget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply inherit any widgets from  
pozitronik\widgets\CachedWidget
class instead of yii\base\Widget in your code.

Example
-------

```php
 class MyWidget extends  \pozitronik\widgets\CachedWidget {
 // it is all, mostly
 }
 ```
