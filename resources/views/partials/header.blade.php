@php
    $links = config('navlinks');
@endphp

<header>
    <div class="container">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">
        </div>
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="{{ $link['current'] ? 'active' : '' }}">
                            {{ $link['label'] }}
                        </a>
                        <div class="mark"></div>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
