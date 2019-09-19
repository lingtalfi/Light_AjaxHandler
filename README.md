Light_AjaxHandler
===========
2019-09-19



A global ajax handler for the [Light](https://github.com/lingtalfi/Light) framework.


This is a [Light framework plugin](https://github.com/lingtalfi/Light/blob/master/doc/pages/plugin.md).

This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).


Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import Ling/Light_AjaxHandler
```

Or just download it and place it where you want otherwise.






Summary
===========
- [Light_AjaxHandler api](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler.md) (generated with [DocTools](https://github.com/lingtalfi/DocTools))
- Pages
    - [Conception notes](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/pages/conception-notes.md)
- [Services](#services)





Services
=========


This plugin provides the following services:

- ajax_handler (returns a LightAjaxHandlerService instance)



Here is an example of the service configuration:

```yaml
ajax_handler:
    instance: Ling\Light_AjaxHandler\Service\LightAjaxHandlerService

```







History Log
=============

- 1.0.0 -- 2019-09-19

    - initial commit