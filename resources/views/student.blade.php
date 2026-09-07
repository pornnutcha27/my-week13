<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัตินักศึกษา</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#4facfe,#6a11cb);
        }

        .card{
            width:500px;
            background:rgba(255,255,255,.95);
            border-radius:20px;
            padding:35px;
            box-shadow:0 15px 35px rgba(0,0,0,.25);
            text-align:center;
        }

        .profile{
            width:120px;
            height:120px;
            border-radius:50%;
            border:5px solid #4facfe;
            object-fit:cover;
            margin-bottom:15px;
        }

        h1{
            color:#333;
            margin-bottom:25px;
        }

        .info{
            text-align:left;
            margin-top:20px;
        }

        .info p{
            background:#f8f9fa;
            padding:12px 18px;
            margin:12px 0;
            border-left:5px solid #4facfe;
            border-radius:8px;
            font-size:17px;
        }

        .info strong{
            color:#0d6efd;
        }

        .btn{
            display:inline-block;
            margin-top:25px;
            padding:12px 30px;
            text-decoration:none;
            background:#4facfe;
            color:#fff;
            border-radius:30px;
            font-weight:bold;
            transition:.3s;
        }

        .btn:hover{
            background:#6a11cb;
            transform:translateY(-3px);
            box-shadow:0 8px 18px rgba(0,0,0,.2);
        }
    </style>

</head>
<body>

<div class="card">

    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
         class="profile"
         alt="Student">

    <h1>🎓 ประวัตินักศึกษา</h1>

    <div class="info">
        <p><strong>ID :</strong> {{ $student['id'] }}</p>

        <p><strong>ชื่อ :</strong> {{ $student['name'] }}</p>

        <p><strong>รหัสนักศึกษา :</strong> {{ $student['student_id'] }}</p>

        <p><strong>สาขา :</strong> {{ $student['major'] }}</p>

        <p><strong>คณะ :</strong> {{ $student['faculty'] }}</p>
    </div>

    <img src="{{ asset('imegs/2.png') }}" class="profile" alt="Student">
    <img src="{{ asset('imegs/1.png') }}" class="profile" alt="Student">
    <img src="{{ asset('imegs/3.png') }}" class="profile" alt="Student">

    <a href="/" class="btn">🏠 กลับหน้าแรก</a>

</div>

</body>
</html>