<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <title>Registrace</title>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">
          <ul>
            <li><a href="/">Domů</a></li>
            <li><a href="register">Zaregistruj se</a></li>
            <li><a href="login">Přihlaš se</a></li>
          </ul>
        </div>
      </nav>
</header>

<main class="main-register">
  <h2>Zaregistruj se</h2>
    <p>Vytvoř si účet k ukládání úkolů</p>
<form method="POST" action="/users" class="register-form">
  @csrf
  <div>
    <label class="register-label" for="name"> Jméno </label>
    <input type="text" name="name" value="{{old('name')}}" />



  @error('name')
  <p>{{$message}}</p>
  @enderror

  </div>
  <div>
    <label class="register-label" for="email">Email</label>
    <input type="email" name="email" value="{{old('email')}}" />



  @error('email')
    <p>{{$message}}</p>
  @enderror

  </div>
  <div>
    <label class="register-label" for="password">
      Heslo
    </label>
    <input type="password" name="password" value="{{old('password')}}" />



@error('password')
  <p>{{$message}}</p>
@enderror
</div>

  <div>
    <label class="register-label" for="password2">
      Potvrď heslo
    </label>
    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" />



  @error('password_confirmation')
    <p>{{$message}}</p>
  @enderror

  </div>
  <div>
    <button type="submit">
      Registruj se
    </button>
  </div>
  <div>
    <p>
      Už máš účet?
      <a href="/login">Přihlaš se</a>
    </p>
  </div>
</form>
</main>
</body>
