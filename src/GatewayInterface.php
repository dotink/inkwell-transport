<?php namespace Inkwell\Transport
{
	/**
	 * A common gateway interface for receiving or sending messages over a transport protocol
	 *
	 * @copyright Copyright (c) 2015, Matthew J. Sahagian
	 * @author Matthew J. Sahagian [mjs] <msahagian@dotink.org>
	 *
	 * @license Please reference the LICENSE.md file at the root of this distribution
	 *
	 * @package Dotink\Inkwell
	 */
	interface GatewayInterface
	{
		/**
		 * Populates the message upon receiving
		 *
		 * @access public
		 * @param Message $message The message to populate
		 */
		public function populate($message);


		/**
		 * Transports a message to the other endpoint
		 *
		 * @access public
		 * @param Message $message The message to transport
		 */
		public function transport($message);
	}
}
