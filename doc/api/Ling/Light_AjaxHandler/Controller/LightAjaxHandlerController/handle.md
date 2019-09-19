[Back to the Ling/Light_AjaxHandler api](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler.md)<br>
[Back to the Ling\Light_AjaxHandler\Controller\LightAjaxHandlerController class](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler/Controller/LightAjaxHandlerController.md)


LightAjaxHandlerController::handle
================



LightAjaxHandlerController::handle — and returns its output as a HttpResponseInterface.




Description
================


public [LightAjaxHandlerController::handle](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler/Controller/LightAjaxHandlerController/handle.md)(string $handlerId, string $actionId, array $params = []) : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)




Calls the handler identified by the given handlerId, with the given actionId and params,
and returns its output as a HttpResponseInterface.

We use the [ajax communication protocol](https://github.com/lingtalfi/AjaxCommunicationProtocol), meaning the response is of type json.




Parameters
================


- handlerId

    

- actionId

    

- params

    


Return values
================

Returns [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md).








Source Code
===========
See the source code for method [LightAjaxHandlerController::handle](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/Controller/LightAjaxHandlerController.php#L33-L53)


See Also
================

The [LightAjaxHandlerController](https://github.com/lingtalfi/Light_AjaxHandler/blob/master/doc/api/Ling/Light_AjaxHandler/Controller/LightAjaxHandlerController.md) class.



