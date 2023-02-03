<form method="post" action="/users">
    @csrf
    <label for="username">Uživatelské jméno:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="password">Heslo:</label>
    <input type="password" id="password" name="password" required>
    
    <label for="confirm_password">Potvrď heslo:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    
    <input type="submit" value="Odeslat">
  </form>