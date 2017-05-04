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
	 * @param string $parameter
	 *
	 * @return ResponseInterface;
	 */
	public function execute(string $parameter = ""): ResponseInterface;
}
