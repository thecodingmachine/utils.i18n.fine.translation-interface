Implementation
==============

There are 2 interfaces in this package, one for language detection and one for translation.

Language detection
------------------

You must only implement one function named getLanguage(). This function return the language on 2 characters of the language found.
If the language is not found, please return null.

List of packages using those interfaces:
- [File Translator](http://www.mouf-php.com/)[https://mouf-php.com/packages/mouf/utils.i18n.fine.language-detection]

Translation
-----------

This function, getTranslation, has 3 parameters :
- $message: it's the key of message
- $parameters: It's the list of all parameter can be replace in the message. The key it's between {} in the message and it must be replace by the value
- $languageDetection: It's if the user want to change language, it's not mandatory, but the language can be force with this value

This function return the string of the value associates to the key. If the key is not found, please return null.

List of packages using those interfaces:
- [File Translator](http://www.mouf-php.com/)[https://mouf-php.com/packages/mouf/utils.i18n.fine.file-translator]