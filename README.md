What is this package
====================

This package contains two interfaces shared by all translation services. The `LanguageDetectionInterface` is used to detect the current language for the user while the `TranslatorInterface` is used to translate strings.

A list of packages using those interfaces:
TODO link
- [Fine](http://mouf-php.com/packages/mouf/utils.i18n.fine.file-translator/README.md): Fine Is Not English, the default translation package for the Mouf framework.
- [Fine](http://mouf-php.com/packages/mouf/utils.i18n.fine.language-detection/README.md): Fine Is Not English, the default translation package for the Mouf framework.

Mouf package
------------

This package is part of Mouf (http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.

Dependencies
------------

Fine comes as a *Composer* package and requires the "Mouf" framework to run.
The first step is therefore to [install Mouf](http://www.mouf-php.com/).

Once Mouf is installed, you can process to the Fine installation.

Install Fine
--------------

This package is automatically added with the utils.i18n.fine.common
Edit your *composer.json* file, and add a dependency on *mouf/utils.i18n.fine.language-interface.

A minimal *composer.json* file might look like this:
```
	{
	    "require": {
	        "mouf/mouf": "~2.0",
	        "mouf/utils.i18n.fine.language-interface": "4.0.*"
	    },
	    "autoload": {
	        "psr-0": {
	            "Test": "src/"
	        }
	    },
	    "minimum-stability": "dev"
	}
```
As explained above, Fine is a package of the Mouf framework. Mouf allows you (amoung other things) to visualy "build" your project's dependencies and instances.

To install the dependency, run
	php composer.phar install
