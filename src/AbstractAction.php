<?php

namespace Dashifen\Action;

use Dashifen\Domain\DomainInterface;
use Dashifen\Request\RequestInterface;
use Dashifen\Response\Factory\ResponseFactoryInterface;
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
	 * @var ResponseFactoryInterface $responseFactory
	 */
	protected $responseFactory;
	
	/**
	 * AbstractAction constructor.
	 *
	 * @param RequestInterface  $request
	 * @param DomainInterface   $domain
	 * @param ResponseFactoryInterface $responseFactory
	 */
	public function __construct(
		RequestInterface $request,
		DomainInterface $domain,
		ResponseFactoryInterface $responseFactory
	) {
		$this->request = $request;
		$this->domain = $domain;
		$this->responseFactory = $responseFactory;
	}
	
	/**
	 * @return ResponseInterface
	 */
	abstract public function execute(): ResponseInterface;
}
