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
	 * @return ResponseInterface;
	 */
	public function execute(): ResponseInterface;
}
