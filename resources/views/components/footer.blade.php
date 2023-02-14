<footer class="bg-light text-center py-3 mt-3">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <p class="mb-1">
                &copy; Copyright {{ config('app.name') }}
            </p>
            <small>
                @env('local')
                    Laravel Sparkle v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                @else
                    Laravel Sparkle v{{ Illuminate\Foundation\Application::VERSION }}
                @endenv
                @if(defined('LARAVEL_START'))
                    - Request served in {{ round((microtime(true) - LARAVEL_START ?: 0) * 1000, 2) }}ms
                @endif
            </small>
        </div>
        <div class="col-lg-3"></div>
    </div>
</footer>
