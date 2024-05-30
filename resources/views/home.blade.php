<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Add Event</h2>
        <form action="/create-event" method="POST">
            @csrf
            <input type="text" name="nama_event" placeholder="nama event">
            <input type="text" name="tempat" placeholder="tempat">
            <input type="datetime-local" name="waktu" placeholder="waktu">
            <button>Add</button>
        </form>
    </div>

    <div>
        <h2>All Events</h2>
        @foreach ($events as $event)
        <div style="background-color: gray; padding: 10px; margin: 10px" >
            <h3>nama event : {{$event['nama_event']}}</h3>
            <h3>tempat     : {{$event['tempat']}}</h3>
            <h3>waktu      : {{$event['waktu']}}</h3>
            <p><a href="/edit-event/{{$event->id}}">Edit</a></p>
            <form action="/delete-event/{{$event->id}}">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
            <br>
        </div>    
        @endforeach
    </div>
</body>
</html>