<?php

	class Example_root_Controller extends Controller_Core {

		public function index() {
			$this->load_view('example_root', $this->model, $this->assets);
		}

	}
	