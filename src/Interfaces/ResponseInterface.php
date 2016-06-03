<?php namespace Inkwell\Transport
{
	/**
	 * A bare bones interface for response objects
	 *
	 * @copyright Copyright (c) 2015, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.md file at the root of this distribution
	 */
	Interface ResponseInterface
	{
		/**
		 * Get the request associated with this response
		 *
		 * @access public
		 * @return RequestInterface The original request object to which this response responds
		 */
		public function getRequest();


		/**
		 * Set the original request object which triggered the response
		 *
		 * @access public
		 * @param Request $request The original request object to which this response responds
		 * @return ResponseInterface The called instance for method chaining
		 */
		public function setRequest(RequestInterface $request);
	}
}
