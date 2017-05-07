<?php

namespace Dashifen\Action;

use Dashifen\Response\ResponseInterface;
use Interop\Container\ContainerInterface;

/**
 * Interface ActionInterface
 *
 * @package Dashifen\Action
 */
interface ActionInterface {
	/**
	 * @param string             $parameter
	 * @param ContainerInterface $container
	 *
	 * @return ResponseInterface;
	 */
	public function execute(string $parameter = "", ContainerInterface $container = null): ResponseInterface;
}
