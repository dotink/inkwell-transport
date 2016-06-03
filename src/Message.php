<?php namespace Inkwell\Transport
{
	/**
	 * Common message class for transported data
	 *
	 * @copyright Copyright (c) 2015, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.md file at the root of this distribution
	 */
	class Message
	{
		/**
		 * The data for the message
		 *
		 * @access protected
		 * @var mixed
		 */
		protected $data = NULL;


		/**
		 * Get the message data
		 *
		 * @access public
		 * @return mixed The data for the message
		 */
		public function get()
		{
			return $this->data;
		}


		/**
		 * Set the message data
		 *
		 * @access public
		 * @param mixed $data The data for the message
		 * @return Message The called instance for method chaining
		 */
		public function set($data)
		{
			$this->data = $data;

			return $this;
		}
	}
}
