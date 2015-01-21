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
		 *
		 */
		public function populate($message);


		/**
		 *
		 */
		public function transport($message);
	}
}
