<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入後不登出</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
         function refreshContent() {
           
            const sid=$("#sid").val();

            fetch('moi_alive.php?sid='+sid)
            .then(response => response.text())
            .then(data => {
            document.getElementById('time-container').innerHTML = data;
            });
         }

        //setInterval(refreshContent, 5000); // 每 5 秒更新一次
        setInterval(refreshContent, 30000); // 每 30 秒更新一次
    </script>
    
</head>
<body>
    <div>請使用chrome(F12)->應用程式->左邊選單下Cookie->https://moi-mgr.moi.gov.tw->右邊ASP.NET_SessionId的值->將值複製下來再貼上</div>
    <div>請輸入SessionID:<input type="text" name="sid" id="sid"></div>

    <div id="time-container">資料載入中...</div>

    
</body>
</html>