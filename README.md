Internationalisation with FINE
==============================

Fine is a PHP internationalisation package. It will help you develop applications that support several languages.
FINE means: Fine is not English :).

By default, translation is performed using PHP mapping files, but other implementation (database storage) can also by used.
Fine is a [Mouf package](http://mouf-php.com).
This means you will have a nice graphical interface inside the Mouf framework to write your own translated messages.

In this document, we will describe how to use FINE to support several languages in your application.

TODO SCREENSHOT INTERFACE !!!

Install
=======

Dependencies
------------

Fine comes as a *Composer* package and requires the "Mouf" framework to run.
The first step is therefore to [install Mouf](http://www.mouf-php.com/).

Once Mouf is installed, you can process to the Fine installation.

Install Fine
--------------

Edit your *composer.json* file, and add a dependency on *mouf/utils.i18n.fine*.

A typical *composer.json* file might look like this:

```
    {
        "require": {
            "mouf/mouf": "~2.0.0",
            "mouf/utils.i18n.fine.translation-interface": "~4.0",
            "mouf/utils.i18n.fine.language-detection": "~4.0",
            "mouf/utils.i18n.fine.file-translation": "~4.0",
            "mouf/utils.i18n.fine.manage.bo": "~4.0",
            "mouf/utils.i18n.fine.common": "~4.0"
        },
        "autoload": {
            "psr-4": {
                "Test\\": "src/"
            }
        }
    }
```

As you can see, there are a number of packages included:

- [**mouf/utils.i18n.fine.translation-interface**](http://mouf-php.com/packages/mouf/utils.i18n.fine.translation-interface/README.md): Fine is a modular package. You can replace any part of it (language detection, translation system, etc...)
  This package contains the interfaces for language detection and translation system implemented by the other packages.
- [**mouf/utils.i18n.fine.language-detection**](http://mouf-php.com/packages/mouf/utils.i18n.fine.language-detection/README.md): This package contains the classes used to detect the language of the user (based on the browser, or the session, etc...)
- [**mouf/utils.i18n.fine.file-translation**](http://mouf-php.com/packages/mouf/utils.i18n.fine.file-translator/README.md): There is many solution to store the translation. By default, the file storage is enabled. There is other package:
    - [**mouf/utils.i18n.fine.bd-translation**](http://mouf-php.com/packages/mouf/utils.i18n.fine.bd-translation/README.md): Store translation in database.
- [**mouf/utils.i18n.fine.manage.bo**](http://mouf-php.com/packages/mouf/utils.i18n.fine.manage.bo/README.md): To manage translations, this package adds a human interface in Mouf to add, edit or delete a translation. 
- [**mouf/utils.i18n.fine.common**](http://mouf-php.com/packages/mouf/utils.i18n.fine.common/README.md): This package contains the installer to help the user to install all the great packages to start and all the interface, function or trait to use fine or implement it

To install the package. After yout composer, you must going to the Mouf interface and select Project -> Installation tasks
![Fine task menu](images/1_task_menu.png)

You could see the list of fine package that must install to use it.
![Fine task installtion](images/2_task.png)

Click on button Run the x tasks.

The installation create all the instance to use fine:

- The FineCacadingTranslator class is to cascading all your translator. If the first doesn't have the translation, the second is requested.... 
The first translator how has the response is returned. So the order of translators is very important.

- Found the defaultTranslationService instance in Mouf, click on it.
There is a table of TranslatorInterface
![Fine default instance screenshot](images/3_default_instance.png)

- To add a new instance, please click on add an instance, don't forget to configure it!
![Fine add instance screenshot](images/4_add_instance.png)

- To change the order, just drag and drop the instance before or after another
![Fine instance order screenshot](images/5_instance_order.png)

Your package is ready for the code!




Using interface
---------------

### Create a translation

This interface can be use to add, edit or delete a translation.
You can access to this interface with the menu HTML -> Fine -> Manage Translation.
![Fine install menu screenshot](images/06_menu.png)

On this interface there is a button to add a new translation.
![Fine install interface screenshot](images/07_interface.png)

A modal appears, in the title input you can set your fine key, in this example it's "test.key".
Select you language, for example english and add it ith the "add" button.
![Fine install new translation screenshot](images/08_new_translation.png)

Enter a message in the text zone. And click on the "Save all Translations" button.
![Fine install message screenshot](images/09_message.png)

In this page you can see your translation.
![Fine install display screenshot](images/10_display.png)

The top right select is to diplay the language at the bottom of the modal. With this translation you can easily translate all message.
![Fine install translation screenshot](images/11_translation.png)

### Edit translation

To edit a translation click on the key or directly on the translation.
You can add a new language with the "add" tab in the modal.

### Remove a translation

You can remove a translation with the cross on the language.
After you can validate to remove only this language
![Fine install remove translation screenshot](images/12_remove_translation.png)

To remove the full key, click on the bottom button "remove key" and validate it.
![Fine install remove key screenshot](images/13_remove_key.png)


In your code
------------

In your code, you can use the functions. There are bind automatically to the defaultTranslationService:

- iMsg function: Return the translation of the key, parameters (in option) and LanguageDetection (in option)
- eMsg function: Do an echo of iMsg

Example:
```php
$string = iMsg('mykey', array('parameter1' => 'value'));
eMsg('mykey', array('parameter1' => 'value'));
```
The messagethe key mykey is: "A test with {parameter1}"

It's possible to add an instance of LanguageDetectionInterface (for exemple to change the language in the middle of your code).
Example:
In this controller you have bind an instance of LanguageDetetionInterface named $fixEnglishLanguage
So you can call the function with
```
iMsg('myKey', array('parameter1' => 'value'), $this->fixEnglishLanguage);
```

Interface Implementation
========================

If you want to create your own package, you can see [the implementation](doc/implementation.md)
