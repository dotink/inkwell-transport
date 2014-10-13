<?php namespace Inkwell\Transport\Resource
{
	use Inkwell\Transport;

	class Request extends Transport\Message
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