<header class="relative px-6 py-4">
    <nav class="row justify-content-between">
        <ul class="col-auto row list-unstyled mb-0">
            @foreach($menuItems as $menuItem)
                @auth
                    <li class="col-auto"><a href="{{ route($menuItem->link) }}">{{ $menuItem->name }}</a></li>
                @else
                    @if (!$menuItem->auth)
                        <li class="col-auto"><a href="{{ route($menuItem->link) }}">{{ $menuItem->name }}</a></li>
                    @endif
                @endauth
            @endforeach
        </ul>

        @if (Route::has('account/login'))
            <ul class="col-auto row list-unstyled mb-0">
                @auth
                    <li class="col-auto">Welcome {{ Auth::user()->email }}</li>
                    <li class="col-auto"><a href="{{ route('account/logout') }}">Logout</a></li>
                @else
                    <li class="col-auto"><a href="{{ route('account/login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                    @if (Route::has('account/register'))
                        <li class="col-auto"><a href="{{ route('account/register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                    @endif
                @endauth
            </ul>
        @endif
    </nav>
</header>
