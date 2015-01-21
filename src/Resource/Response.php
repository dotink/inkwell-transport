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
	 *
	 * @package Dotink\Inkwell
	 */
	class Response extends Transport\Message implements Transport\ResponseInterface
	{
		/**
		 *
		 */
		protected $request = NULL;


		/**
		 *
		 */
		public function getRequest()
		{
			return $this->request;
		}


		/**
		 *
		 */
		public function setRequest(Request $request)
		{
			$this->request = $request;

			return $this;
		}
	}
}
