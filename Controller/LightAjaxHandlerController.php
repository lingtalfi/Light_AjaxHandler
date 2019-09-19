<?php


namespace Ling\Light_AjaxHandler\Controller;


use Ling\Light\Controller\LightController;
use Ling\Light\Http\HttpJsonResponse;
use Ling\Light\Http\HttpResponseInterface;
use Ling\Light_AjaxHandler\Service\LightAjaxHandlerService;


/**
 * The LightAjaxHandlerController class.
 */
class LightAjaxHandlerController extends LightController
{


    /**
     * Calls the handler identified by the given handlerId, with the given actionId and params,
     * and returns its output as a HttpResponseInterface.
     *
     * We use the @page(ajax communication protocol), meaning the response is of type json.
     *
     *
     *
     * @return HttpResponseInterface
     */
    public function handle(string $handlerId, string $actionId, array $params = []): HttpResponseInterface
    {

        try {

            /**
             * @var $service LightAjaxHandlerService
             */
            $service = $this->getContainer()->get("ajax_handler");
            $handler = $service->getHandler($handlerId);
            $response = $handler->handle($actionId, $params);

        } catch (\Exception $e) {
            $response = [
                "type" => "error",
                "error" => $e->getMessage(),
            ];
        }
        return HttpJsonResponse::create($response);

    }
}