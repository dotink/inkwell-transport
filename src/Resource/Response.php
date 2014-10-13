<?php namespace Inkwell\Transport\Resource
{
	use Inkwell\Transport;

	class Response extends Transport\Message implements Transport\ResponseInterface
	{
		protected $request = NULL;


		/**
		 *
		 */
		public function getRequest()
		{
			return $this->request;
		}


		/**
		 *
		 */
		public function setRequest($request)
		{
			$this->request = $request;
		}
	}
}
