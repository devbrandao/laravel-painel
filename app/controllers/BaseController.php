<?php

class BaseController extends Controller {

	protected $layout = 'layouts.default';

	public function __construct()
	{	
		# Styles
		Asset::add('style', 'assets/css/style.css');
		Asset::add('style-responsive', 'assets/css/style-responsive.css');

		# Scripts
		Asset::add('jquery', 'assets/js/jquery-1.10.2.min.js');
		Asset::add('jquery-ui', 'assets/js/jquery-ui-1.9.2.custom.min.js');
		Asset::add('jquery-migrate', 'assets/js/jquery-migrate-1.2.1.min.js');
		Asset::add('bootstrap', 'assets/js/bootstrap.min.js');
		Asset::add('modernizr', 'assets/js/modernizr.min.js');
		Asset::add('nicescroll', 'assets/js/jquery.nicescroll.js');
		Asset::add('scripts', 'assets/js/scripts.js');
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	 * Abstrai a forma de retornar a view, tendo que cada controller tenha sua pasta
	 * @param string $view
	 * @param string $folder
	 * @return View::make()
	 */
	public function setView($view = "", $folder = "")
	{
		$routeAction = Route::currentRouteAction();

		$pathRoute = explode('@', $routeAction);

		if($folder == "")
			$folder = strtolower(str_replace('Controller', '', $pathRoute[0]));

		if($view == "")
			$view = strtolower(str_replace('show', '', $pathRoute[1]));

		return View::make($folder . '.' . $view);
	}

}
