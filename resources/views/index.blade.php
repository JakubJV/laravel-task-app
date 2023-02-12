<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>  
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
      
        <title>Domovská stránka</title>
       
    </head>
    <body class="index">
        <header>
        <nav>
            <div>
              <ul>
                @auth
                <li>
                  <span class="welcome">
                    Vítej {{auth()->user()->name}}
                  </span>
                </li>
                <li>
                  <form class="logout" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="logout-button">
                     Odhlášení
                    </button>
                  </form>
                </li>
                @else
                <li>
                  <a href="/register">Zaregistruj se</a>
                </li>
                <li>
                  <a href="/login">Přihlaš se</a>
                </li>
                @endauth
              </ul>
            </div>
          </nav>
        </header>
        <main class="index">
            <div>
                @auth
                <div class="task-form">
                    <h1>Seznam úkolů</h1>

                    @foreach ($listTasks as $listTask)
                    <div>
                        <p>Úkol: {{ $listTask->name }}</p>

                        <form method="post"  action="{{ route('finishedMark', $listTask->id) }}" accept-charset="UTF-8">
                            {{ csrf_field() }}
                        <button type="submit" class="task-finished">Označ dokončený</button>
                        </form>
                    </div>
                    @endforeach

                        
                    <form method="post" action="{{route ('saveTask')}}" accept-charset="UTF-8">
                        {{  csrf_field() }}

                        <label class="task-label" for="listTask">Nový úkol</label><br>
                        <input type="text" name="listTask"><br>
                        <button type="submit" class="task-button">Uložit úkol</button>

                    </form>
                </div>  
                @else
                <div>
                    <h2>Pro zobrazení a úpravu seznamu úkolů se musíte přihlásit.<h2>
                </div>
            </div>
              @endauth
        </main>
        <div class="footer">
          <footer>
              <p>© Task Webapp</p>
          </footer>
      </div>
      @if(session()->has('message'))
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="flash-message">
        <p>
          {{ session('message') }}
        </p>
      </div>
    @endif
    </body>
</html>
