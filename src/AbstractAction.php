<?php

namespace Dashifen\Action;

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
   * AbstractAction constructor.
   *
   * @param RequestInterface   $request
   * @param DomainInterface    $domain
   * @param ResponseInterface  $response
   */
  public function __construct (
    RequestInterface $request,
    DomainInterface $domain,
    ResponseInterface $response
  ) {
    $this->request = $request;
    $this->domain = $domain;
    $this->response = $response;
  }

  /**
   * @param array $parameter
   *
   * @return ResponseInterface
   */
  abstract public function execute (array $parameter = []): ResponseInterface;
}
