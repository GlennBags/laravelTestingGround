<aside id="left-panel">
    <div class="login-info">
        @if(isset(auth()->user()))
            <span>
                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="" alt="{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}">
                        <span>{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </span>
        @endif
    </div>
    <nav>
        @section('menu')
            @if (!Auth::guest() && isset(auth()->user()))
                <ul>

                </ul>
            @else
                <ul>
                    {{--provide link to login--}}
                </ul>
            @endif
        @show
    </nav>

</aside>
