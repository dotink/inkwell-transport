<?php namespace Inkwell\Transport
{
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
