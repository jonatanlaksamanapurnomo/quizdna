<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam</title>
</head>
<body>
<p>Exam Name : {{$examName}}</p>
@foreach($questions as $item)
    {{$item->question}}

@endforeach
</body>
</html>
