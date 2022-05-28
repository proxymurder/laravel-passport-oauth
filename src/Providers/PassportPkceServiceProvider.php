<?php

namespace WincOops\PassportPkce\Providers;

use WincOops\PassportPkce\HelloWorld;
use Illuminate\Support\ServiceProvider;

class PassportPkceServiceProvider extends ServiceProvider
{

	public function boot()
	{
		// $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
	}

	public function register()
	{
		$this->app->bind('passport-pkce', function () {
			return new HelloWorld;
		}, false);
	}
}