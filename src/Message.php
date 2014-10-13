<?php namespace Inkwell\Transport
{
	class Message
	{
		/**
		 *
		 */
		protected $body = NULL;


		/**
		 *
		 */
		public function getBody()
		{
			return $this->body;
		}


		/**
		 *
		 */
		public function send(GatewayInterface $gateway)
		{
			$gateway->transport($this);
		}


		/**
		 *
		 */
		public function setBody($body)
		{
			$this->body = $body;
		}
	}
}
