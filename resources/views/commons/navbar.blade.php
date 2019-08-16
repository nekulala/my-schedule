<header class="mb-5">
    <nav class="navbar navbar-light" style="background-color: #ffffe0;">
      <a class="navbar-brand" href="#">My Schedule</a>
      
          <ul class="nav justify-content-end">
            <li class="nav-item dropdown">
              @if(Auth::check())
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {!! Auth::user()->name !!}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  {!! link_to_route('logout.get','ログアウト',['class' => 'nav-link']) !!}
                  <a class="nav-link" href="#">ユーザー詳細</a>
                  <a class="nav-link" href="#">お気に入り済ユーザー一覧</a></a>
              </div>
              @else
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ゲスト様
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div>{!! link_to_route('signup.get','新規登録',['class' => 'dropdown-item']) !!}</div>
                  <div>{!! link_to_route('login','ログイン',['class' => 'dropdown-item']) !!}</div>
              </div>
              @endif
            </li>
          </ul>
    </nav>
</header>