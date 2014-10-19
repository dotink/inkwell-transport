<?php namespace Inkwell\Transport
{
	class Message
	{
		/**
		 *
		 */
		protected $data = NULL;


		/**
		 *
		 */
		public function get()
		{
			return $this->data;
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
		public function set($data)
		{
			$this->data = $data;
		}
	}
}
