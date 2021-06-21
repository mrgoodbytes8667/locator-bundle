<?php


namespace Bytes\LocatorBundle\Handler;


/**
 * Interface LocatorInterface
 * @package Bytes\LocatorBundle\Handler
 */
interface LocatorInterface
{
    /**
     * Return the locator name
     * @return string
     */
    public static function getDefaultIndexName(): string;
}