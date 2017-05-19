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
	 * @var ContainerInterface $container
	 */
	protected $container;
	
	/**
	 * AbstractAction constructor.
	 *
	 * @param RequestInterface   $request
	 * @param DomainInterface    $domain
	 * @param ResponseInterface  $response
	 * @param ContainerInterface $container
	 */
	public function __construct(
		RequestInterface $request,
		DomainInterface $domain,
		ResponseInterface $response,
		ContainerInterface $container
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
