<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@100&display=swap" rel="stylesheet">
    <title>Atte</title>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/register">
        Atte
      </a>
    </div>
  </header>
  <main>
   <div class="member-form_content">
    <div class="member-form_heading">
     <h2>会員登録</h2>
    </div>
    <form class="form" action="/login" method="post">
     @csrf
     <div class="form__group">
      <div class="from__input--text">
       <input type="text" name="name" placeholder="名前">
      </div>
      <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
      </div>
     </div>
      <div class="form__group">
       <div class="from__input--text">
        <input type="email" name="email" placeholder="メールアドレス">
       </div>
       <div class="form__error">
           @error('email')
           {{ $message }}
           @enderror
       </div>
      </div>
      <div class="form__group">
       <div class="from__input--text">
        <input type="password" name="password" placeholder="パスワード">
       </div>
       <div class="form__error">
           @error('password')
           {{ $message }}
           @enderror
       </div>
      </div>
      <div class="form__group">
       <div class="from__input--text">
        <input type="password" name="password_confirm" placeholder="確認パスワード">
       </div>
       <div class="form__error">
           @error('password_confirm')
           {{ $message }}
           @enderror
       </div>
      </div>
      <div class="from__button">
       <button class="from__button-submit" type="submit">会員登録</button>
      </div>
      <div class="account-link">
        <p>アカウントをお持ちの方はこちらから</p>
       </div>
       <a href="/login" class="login-link">ログイン</a>
      </div>
    </form>
   </div>
  </main>
  <footer class="footer">
    <div class="footer-content">
      <p class="footer-text">Atte,inc.</p>
    </div>
  </footer>
</body>
</html>