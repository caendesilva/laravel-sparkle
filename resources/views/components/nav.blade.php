<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    @if(request()->is('/'))
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    @else
                        <a class="nav-link" href="/">Home</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
