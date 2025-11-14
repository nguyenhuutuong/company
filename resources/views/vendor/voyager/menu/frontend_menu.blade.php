<nav class="navbar navbar-expand-lg main-menu sticky-top">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                @foreach ($items as $item)
                    @php
                        $isActive = Request::is(trim($item->url, '/')) ? 'active' : '';
                        $children = $item->children;
                    @endphp

                    {{-- MỤC CÓ DROPDOWN --}}
                    @if($children->count() > 0)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ $isActive }}"
                               href="{{ url($item->url) }}"
                               id="dropdown-{{ $item->id }}"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ $item->title }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown-{{ $item->id }}">
                                @foreach($children as $child)
                                    <li>
                                        <a class="dropdown-item" href="{{ url($child->url) }}">
                                            {{ $child->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    {{-- MỤC BÌNH THƯỜNG --}}
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ $isActive }}" href="{{ url($item->url) }}">
                                {{ $item->title }}
                            </a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
    </div>
</nav>
