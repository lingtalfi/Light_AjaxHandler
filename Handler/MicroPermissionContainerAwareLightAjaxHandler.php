<?php


namespace Ling\Light_AjaxHandler\Handler;


use Ling\Light_AjaxHandler\Exception\LightAjaxHandlerException;

/**
 * The MicroPermissionContainerAwareLightAjaxHandler class.
 */
abstract class MicroPermissionContainerAwareLightAjaxHandler extends ContainerAwareLightAjaxHandler
{


    /**
     * Checks whether the current user has the given micro-permission, and if not throws an exception.
     *
     * @param string $microPermission
     * @throws \Exception
     */
    public function checkMicroPermission(string $microPermission)
    {
        if (false === $this->getContainer()->get("micro_permission")->hasMicroPermission($microPermission)) {
            throw new LightAjaxHandlerException("Permission denied! You don't have the micro permission $microPermission.");
        }
    }

}