<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Atte</title>
</head>
<body>
  <header class="header">
    <div class="header_inner">
      <a class="header_logo" href="/register">
        Atte
      </a>
    </div>
  </header>
  <main>
   <div class="member-form_content">
    <div class="member-form_heading">
     <h2>ログイン</h2>
    </div>
    <form class="form">
      <div class="form__group">
       <div class="from__input--text">
        <input type="email" name="email" placeholder="メールアドレス">
       </div>
       <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
       </div>
      </div>

      <div class="form__group">
       <div class="from__input--text">
        <input type="password" name="password" placeholder="パスワード">
       </div>
       <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
       </div>
      </div>

      <div class="from__button">
       <button class="from__button-submit" type="submit">ログイン</button>
      </div>
      <div class="account-link">
       <div class="account-link__heading">
        <p>アカウントをお持ちでない方はこちらから</p>
       </div>
       <a href="/login" class="login-link">会員登録</a>
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