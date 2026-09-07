<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทความทั้งหมด</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#667eea,#764ba2);
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .container{
            width:90%;
            max-width:800px;
            background:#fff;
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,.2);
            text-align:center;
        }

        h1{
            color:#333;
            margin-bottom:20px;
            font-size:40px;
        }

        p{
            color:#666;
            font-size:18px;
            line-height:1.8;
            margin-bottom:35px;
        }

        .menu{
            display:flex;
            justify-content:center;
            gap:20px;
            flex-wrap:wrap;
        }

        .menu a{
            text-decoration:none;
            color:white;
            background:#667eea;
            padding:12px 28px;
            border-radius:30px;
            transition:.3s;
            font-weight:bold;
        }

        .menu a:hover{
            background:#764ba2;
            transform:translateY(-3px);
            box-shadow:0 8px 15px rgba(0,0,0,.2);
        }
    </style>

</head>
<body>

    <div class="container">

        <h1>📚 บทความทั้งหมด</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Magnam consectetur quos sapiente, quibusdam beatae velit sed,
            quia similique vel aperiam, officia consequuntur hic aut
            repudiandae cupiditate alias suscipit vero architecto?
        </p>

        <div class="menu">
            <a href="/about">👤 เกี่ยวกับฉัน</a>
            <a href="/blog">📖 บทความ</a>
            <a href="/student">🎓 Student</a>
        </div>

    </div>

</body>
</html>