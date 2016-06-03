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
	 */
	class Request extends Transport\Message implements Transport\RequestInterface
	{
		/**
		 * The target for the request
		 *
		 * @access protected
		 * @var string|Object
		 */
		protected $target = NULL;


		/**
		 * Get the target for the request
		 *
		 * @access public
		 * @return mixed A string or object (with `__toString`) representing the target
		 */
		public function getTarget()
		{
			return $this->target;
		}


		/**
		 * Set the target for the request
		 *
		 * @access public
		 * @param string|Object $target A string or object (with `__toString`) representing the target
		 * @return RequestInterface The called instance for method chaining
		 */
		public function setTarget($target)
		{
			$this->target = $target;

			return $this;
		}
	}
}
