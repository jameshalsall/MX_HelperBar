<?php
namespace MX\HelperBar\Api;

interface CommandInterface
{
    /**
     * Gives the url that will handle this command
     *
     * @return string
     */
    public function getHandlerUrl();

    /**
     * Return an array where the value is displayed to the user as available option
     *
     * @return string[]
     */
    public function getOptions();

}
