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
	 * @param array              $parameter
	 * @param ContainerInterface $container
	 *
	 * @return ResponseInterface;
	 */
	public function execute(array $parameter = [], ContainerInterface $container = null): ResponseInterface;
}
