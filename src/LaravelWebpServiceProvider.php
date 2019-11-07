<?php
namespace Pcosta94\LaravelCheckWebpSupport;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
class LaravelWebpServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {

        Blade::directive('webp', function() {
            return '<?php if (supportsWebp()): ?>';
        });
        Blade::directive('endwebp', function() {
            return '<?php endif; ?>';
        });
    }
    /**
     * @return void
     */
    public function register()
    {
        //
    }
}