<div class="card-menu">
    <ul class="card-list">
        @foreach ($comics as $link)
            <li class="card">
                <img src="{{asset($link['thumb'])}}" alt="" class="card-img">
                <h3 class="card-title">{{$link['series']}}</h3>
            </li>
        @endforeach
    </ul>
</div>
