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
       <span id="previous-date">&lt;</span>
       <span id="current-date">2021-11-01</span>
       <span id="next-date">&gt;</span>
    </div>
    <div class="work">
      <div class="work__container">
        <div class="table-container">
          <table>
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
        </div>
        <div class="pagination">
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
  <script>
      function changeDate(offset) {
          var currentDate = new Date(document.getElementById("current-date").textContent);
          currentDate.setDate(currentDate.getDate() + offset);

          var formattedDate = currentDate.toISOString().split("T")[0];
          document.getElementById("current-date").textContent = formattedDate;
      }

      document.getElementById("previous-date").addEventListener("click", function() {
          changeDate(-1);
      });

      document.getElementById("next-date").addEventListener("click", function() {
          changeDate(1);
      });
  </script>
</body>
</html>
