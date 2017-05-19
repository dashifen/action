<?php

namespace Dashifen\Action;

use Dashifen\Response\ResponseInterface;

/**
 * Interface ActionInterface
 *
 * @package Dashifen\Action
 */
interface ActionInterface {
	/**
	 * @param array $parameter
	 *
	 * @return ResponseInterface;
	 */
	public function execute(array $parameter = []): ResponseInterface;
}
