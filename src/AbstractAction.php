<?php

namespace Dashifen\Action;

use Dashifen\Domain\DomainInterface;
use Dashifen\Request\RequestInterface;
use Dashifen\Response\ResponseInterface;
use Interop\Container\ContainerInterface;

abstract class AbstractAction implements ActionInterface {
	/**
	 * @var RequestInterface $request
	 */
	protected $request;
	
	/**
	 * @var DomainInterface $domain
	 */
	protected $domain;
	
	/**
	 * @var ResponseInterface $response
	 */
	protected $response;
	
	/**
	 * AbstractAction constructor.
	 *
	 * @param RequestInterface  $request
	 * @param DomainInterface   $domain
	 * @param ResponseInterface $response
	 */
	public function __construct(
		RequestInterface $request,
		DomainInterface $domain,
		ResponseInterface $response
	) {
		$this->request = $request;
		$this->domain = $domain;
		$this->response = $response;
	}
	
	/**
	 * @param array              $parameter
	 * @param ContainerInterface $container
	 *
	 * the purpose of passing the $container into the execute method is so
	 * that the method can access any services that have been defined for the
	 * application.  e.g., some actions might need to send an email, but we
	 * don't want to add that behavior to all actions.  instead, we'll just
	 * provide the $container so that an action can request access to a
	 * predefined service therein.
	 *
	 * @return ResponseInterface
	 */
	abstract public function execute(array $parameter = [], ContainerInterface $container = null): ResponseInterface;
}
