<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/data.css') }}" />
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
   <div class="data_content">
    <div class="data_heading">
       <span class="before"><</span>
       <span>2021-11-01</span>
       <span class="after">></span>
    </div>
    <div class="work">
      <div class="work__container">
        <div class="table-container">
          <table>
            @csrf
            <tr>
                <th class="th">名前</th>
                <th class="th">勤務開始</th>
                <th class="th">勤務終了</th>
                <th class="th">休憩開始</th>
                <th class="th">休憩終了</th>
            </tr>
            <tr>
                <td class="td">テスト太郎</td>
                <td class="td">10:00</td>
                <td class="td">20:00</td>
                <td class="td">00:30</td>
                <td class="td">09:30</td>
            <tr>
                <td class="td">テスト次郎</td>
                <td class="td">10:10</td>
                <td class="td">20:00</td>
                <td class="td">00:30</td>
                <td class="td">09:29:50</td>
            </tr>
            <tr>
                <td class="td">テスト三郎</td>
                <td class="td">10:10</td>
                <td class="td">20:00</td>
                <td class="td">00:30</td>
                <td class="td">09:29:50</td>
            </tr>
            <tr>
                <td class="td">テスト四郎</td>
                <td class="td">10:20</td>
                <td class="td">20:00</td>
                <td class="td">00:30</td>
                <td class="td">09:29:40</td>
            </tr>
            <tr>
                <td class="td">テスト五郎</td>
                <td class="td">10:20</td>
                <td class="td">20:00</td>
                <td class="td">00:30</td>
                <td class="td">09:29:40</td>
            </tr>
          </table>
          <div class="pagination">
            <div class="pagination-box">
                <div class="pagination-mark"><</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">1</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">2</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">3</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">4</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">5</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">6</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">7</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">8</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">9</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">10</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">11</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">12</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">13</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">14</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">15</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">16</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">17</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">18</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">19</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">20</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-number">21</div>
            </div>
            <div class="pagination-box">
                <div class="pagination-mark">></div>
            </div>
          </div>
        </div>
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
