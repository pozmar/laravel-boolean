
        <div class="preview">
        </div>
        <div class="navbar">
            <img src="img/logo.png" alt="logo">
                <div class="navigation">
                    <ul>
                    @foreach(config('main.routes') as $route)
                    <li class="{{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}">
                        <a href="{{ route($route['pathId']) }}">{{$route['displayText']}}</a>
                    </li>
                    @endforeach
                    </ul>
                    <button class="bottone">Candidati Ora</button>
                </div>
        </div>