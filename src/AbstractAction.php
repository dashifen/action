<?php

namespace Dashifen\Action;

use Aura\Di\Container;
use Dashifen\Domain\DomainInterface;
use Dashifen\Request\RequestInterface;
use Dashifen\Response\ResponseInterface;

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
	 * @var Container $container
	 */
	protected $container;
	
	/**
	 * AbstractAction constructor.
	 *
	 * @param RequestInterface   $request
	 * @param DomainInterface    $domain
	 * @param ResponseInterface  $response
	 * @param Container $container
	 */
	public function __construct(
		RequestInterface $request,
		DomainInterface $domain,
		ResponseInterface $response,
		Container $container
	) {
		$this->request = $request;
		$this->domain = $domain;
		$this->response = $response;
		$this->container = $container;
	}
	
	/**
	 * @param array $parameter
	 *
	 * @return ResponseInterface
	 */
	abstract public function execute(array $parameter = []): ResponseInterface;
}
