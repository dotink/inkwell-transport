<?php namespace Inkwell\Transport\Resource
{
	use Inkwell\Transport;

	/**
	 * Basic implementation for the response interface
	 *
	 * @copyright Copyright (c) 2015, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.md file at the root of this distribution
	 */
	class Response extends Transport\Message implements Transport\ResponseInterface
	{
		/**
		 * The request object to which this is a response
		 *
		 * @access protected
		 * @var Transport\RequestInterface
		 */
		protected $request = NULL;


		/**
		 * Get the request object to which this is a response
		 *
		 * @access public
		 * @return Transport\RequestInterface The request object to which this is a response
		 */
		public function getRequest()
		{
			return $this->request;
		}


		/**
		 * Set the request object to which this is a response
		 *
		 * @access public
		 * @param Transport\RequestInterface $request The request object to which this is a response
		 * @return Response The called instance for method chaining
		 */
		public function setRequest(Transport\RequestInterface $request)
		{
			$this->request = $request;

			return $this;
		}
	}
}
