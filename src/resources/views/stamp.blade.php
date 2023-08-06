<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stamp.css') }}" />
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
      <nav class='nav-menu'>
        <ul>
          <li><a href="/register">ホーム</a></li>
          <li><a href="/date">日付一覧</a></li>
          <li><a href="/register">ログアウト</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
   <div class="stamp-box_content">
    <div class="stamp-box_heading">
     <h2>福場凛太郎さんお疲れ様です！</h2>
    </div>
    <div class="Box">
      <div class="Box__container">
       <div class="up-box">
        勤務開始
       </div>
       <div class="up-box">
        勤務終了
       </div>
       <div class="down-box">
        休憩開始
       </div>
       <div class="down-box">
        休憩終了
       </div>
    </div>
   </div>
  </main>
  <footer class="footer">
    <div class="footer-content">
      <p class="footer-text">Atte,inc.</p>
    </div>
  </footer>
</body>
</html>