<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Test</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="card">
        <div class="card-header">Even Numbers</div>
        <div class="card-body">
            @foreach (range(1, 100) as $i)
            @if($i%2==0)
            <span class="badge bg-primary">{{$i}}</span>
            @else
            <span class="badge bg-secondary">{{$i}}</span>
            @endif
            @endforeach
        </div>
    </div>
</body>

</html>
