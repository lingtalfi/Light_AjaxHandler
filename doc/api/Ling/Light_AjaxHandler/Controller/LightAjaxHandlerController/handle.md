[Back to the Ling/Light_AjaxHandler api](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler.md)<br>
[Back to the Ling\Light_AjaxHandler\Controller\LightAjaxHandlerController class](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler/Controller/LightAjaxHandlerController.md)


LightAjaxHandlerController::handle
================



LightAjaxHandlerController::handle — and returns its output as a HttpResponseInterface.




Description
================


public [LightAjaxHandlerController::handle](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler/Controller/LightAjaxHandlerController/handle.md)(string $handlerId, string $actionId, array $params = []) : Ling\Light\Http\HttpResponseInterface




Calls the handler identified by the given handlerId, with the given actionId and params,
and returns its output as a HttpResponseInterface.

We use the ajax communication protocol, meaning the response is of type json.




Parameters
================



Return values
================

Returns Ling\Light\Http\HttpResponseInterface.








Source Code
===========
See the source code for method [LightAjaxHandlerController::handle](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/Controller/LightAjaxHandlerController.php#L30-L50)


See Also
================

The [LightAjaxHandlerController](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler/Controller/LightAjaxHandlerController.md) class.



