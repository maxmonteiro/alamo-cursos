<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h2 {
            font-size: 48px;
        }
        body .img {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url("assets/laravel-wall.jpg");
            background-color: #cccccc;
            opacity: 0.2;
        }
        .container {
            padding-top: 100px;
            text-align: center;
        }
        .container p {
            font-size: 28px;
        }
    </style>
</head>

<body>
    <div class="img"></div>
    <div class="container">
        <h2>CERTIFICADO</h2>
        <div class="pdf-body">
            <p>Certificamos que <strong>{{ $student->name }}</strong> concluiu o curso de </p>
            <p><strong>{{ $course->name }}</strong></p>
            <p>Duração de {{ $course->workload }} horas</p>
        </div>
    </div>
</body>
</html>