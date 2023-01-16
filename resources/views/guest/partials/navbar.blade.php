 <nav>
    <ul class="nav-links">
        @foreach ($menu as $link)
            <li class="link">
                <a href="{{$link['route']}}">{{$link['label']}}</a>
            </li>
        @endforeach
    </ul>
</nav>
