<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="top-left">
        <a class="app-brand" href="{{ url('/') }}">
            {{ config('app.name', 'MoucDia') }}
        </a>
    </div>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

</nav>
