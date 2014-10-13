<?php namespace Inkwell\Transport\Resource
{
	use Inkwell\Transport;

	class Request extends Transport\Message implements Transport\RequestInterface
	{
		/**
		 *
		 */
		protected $url = NULL;


		/**
		 *
		 */
		public function getURL()
		{
			return $this->url;
		}


		/**
		 *
		 */
		public function setURL($url)
		{
			$this->url = $url;
		}
	}
}
