<?php namespace Inkwell\Transport
{
	/**
	 * A bare bones interface for request objects
	 *
	 * @copyright Copyright (c) 2015, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.md file at the root of this distribution
	 */
	Interface RequestInterface
	{
		/**
		 * Get the target for the request
		 *
		 * @access public
		 * @return mixed A string or object (with `__toString`) representing the target
		 */
		public function getTarget();


		/**
		 * Set the target for the request
		 *
		 * @access public
		 * @param string|Object $target A string or object (with `__toString`) representing the target
		 * @return RequestInterface The called instance for method chaining
		 */
		public function setTarget($target);
	}
}
