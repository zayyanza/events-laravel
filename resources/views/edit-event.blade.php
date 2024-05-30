<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Event</h1>
    <form action="/edit-event/{{$event->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama_event" value="{{$event->nama_event}}">
        <input type="text" name="tempat" value="{{$event->tempat}}">
        <input type="datetime-local" name="waktu" value="{{$event->waktu}}">
        <button>Save</button>
    </form>
</body>
</html>