<?php namespace Inkwell\Transport
{
	interface GatewayInterface
	{
		/**
		 *
		 */
		public function populate(Message $message);


		/**
		 *
		 */
		public function transport(Message $message);
	}
}
