<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
Имя: {{ $name }}
Email: {{ $email or 'Не указан'}}
Телефон: {{ $tel }}
Комментарий: {{ $comment }}
</div>
</body>
</html>