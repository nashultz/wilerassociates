<?php namespace Wiler\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'Wiler\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'Wiler\Http\Filters\AuthFilter',
		'auth.basic' => 'Wiler\Http\Filters\BasicAuthFilter',
		'csrf' => 'Wiler\Http\Filters\CsrfFilter',
		'guest' => 'Wiler\Http\Filters\GuestFilter',
	];

}