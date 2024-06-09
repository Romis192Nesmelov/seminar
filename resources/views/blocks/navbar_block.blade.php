<nav id="{{ $id }}" class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}-bar" aria-controls="{{ $id }}-bar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon-menu7 m-0"></i>
    </button>
    <div class="collapse navbar-collapse" id="{{ $id }}-bar">
        <ul class="navbar-nav">
            @foreach($menu as $menuKey)
                <li class="nav-item">
                    <a class="nav-link" data-scroll="{{ $menuKey }}" href="#">{{ trans('menu.'.$menuKey) }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
