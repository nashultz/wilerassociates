<?php

	class BaseForm {

		protected $input;
		protected $rules = [];
		protected $messages = [];

		protected $validator;

		public function validate()
		{	
			$this->validator = Validator::make(Input::only($this->input), $this->rules, $this->messages);
			return $this->validator->passes();
		}

		public function getErrors()
		{
			return $this->validator->messages();
		}

		public function getFirstError()
		{
			$messages = $this->getErrors();
			return $messages->first();
		}

		public function getLastError()
		{
			$messages = $this->getErrors();
			return $messages->last();
		}

	}

?>