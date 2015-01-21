<?php namespace Inkwell\Transport
{
	/**
	 * A bare bones interface for request objects
	 *
	 * @copyright Copyright (c) 2015, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.md file at the root of this distribution
	 *
	 * @package Dotink\Inkwell
	 */
	Interface RequestInterface
	{
		/**
		 * Get the URL for the request
		 *
		 * @access public
		 * @return string|Object A string or object (implementing `__toString`) URL
		 */
		public function getUrl();


		/**
		 * Set the URL for the request
		 *
		 * @access public
		 * @param string|Object $url A string or object (implementing `__toString`) URL
		 * @return RequestInterface The called instance for method chaining
		 */
		public function setUrl($url);
	}
}
