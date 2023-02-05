<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <header>
            <nav>
                <div class="nav-wrapper">
                <ul>
                    <li><a href="/">Domů</a></li>
                    <li><a href="/register">Zaregistruj se</a></li>
                </ul>
                </div>
            </nav>
        </header>
    </div>
    <main class="main-login">
        <h2>Přihlášení</h2>
        <p>Přihlaš se k ukládání úkolů</p>
        <div>
            <form method="POST" action="/users/authenticate" class="login-form">
                @csrf
                <div>
                    <label class="login-label" for="email">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" />
            
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="login-label" for="password">
                    Heslo
                    </label>
                    <input type="password" name="password" value="{{old('password')}}" />
            
                    @error('password')
                        <p>{{$message}}</p>
                    @enderror
                </div>   
                <div>
                <button type="submit" class="login-button">
                    Přihlaš se
                </button>
                </div>
            </form>
            <div>
                <p>
                  Ještě nemáš účet?
                  <a href="/register" class="login-a">Zaregistruj se</a>
                </p>
            </div>
        </div>
    </main>
    <div class="footer">
        <footer>
            <p>© Task Webapp</p>
        </footer>
    </div>
</body>