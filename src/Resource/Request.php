<?php namespace Inkwell\Transport\Resource
{
	use Inkwell\Transport;

	/**
	 * Basic implementation for the request interface
	 *
	 * @copyright Copyright (c) 2015, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.md file at the root of this distribution
	 *
	 * @package Dotink\Inkwell
	 */
	class Request extends Transport\Message implements Transport\RequestInterface
	{
		/**
		 *
		 */
		protected $url = NULL;


		/**
		 *
		 */
		public function getURL()
		{
			return $this->url;
		}


		/**
		 *
		 */
		public function setURL($url)
		{
			$this->url = $url;

			return $this;
		}
	}
}
