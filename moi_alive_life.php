<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入後不登出</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

        
        

        $(function(){
            $("#send_sid").click(function(){
                refreshContent();
                //setInterval(refreshContent, 5000); // 每 5 秒更新一次
                setInterval(refreshContent, 30000); // 每 30 秒更新一次
            });
        });
    </script>
    
</head>
<body>
    <div style="padding:10px"><h1>登入後不被登出</h1></div>
    <div style="padding:10px"><h2>使用說明如下</h2></div>
    <div style="padding:15px" class="text-warning bg-dark">請先到已經登入的後台網站頁面下查找SessionID (Chrome按下F12)->再到應用程式標籤下->左邊選單下Cookie->https://moi-mgr.moi.gov.tw->右邊ASP.NET_SessionId的值->將值複製下來再貼上到SessionID的輸入框按下確定等待訊息出現即可,此頁不要關</div>
    <div style="padding:2px"><img src="img/demo.png"  alt="這是圖片" title="oxxo"></div>

    <div style="padding:2px">如出現<img src="img/demo2.png"  alt="這是圖片" title="oxxo">代表成功使用</div>

    <div style="padding:15px" class="text-warning bg-dark">以下請開始輸入SessionID後按下確定</div>
    <hr>
    <div style="padding:15px"><font color="red">請填入SessionID:</font><input type="text" name="sid" id="sid" style="font-size:14px;font-family:serif;padding:6px;">&nbsp;<input type="button" class="btn btn-warning" id="send_sid" value="確定"></div>

    <hr>
    <div style="padding:15px" id="time-container">等待SessionID載入中...</div>

    
</body>
</html>