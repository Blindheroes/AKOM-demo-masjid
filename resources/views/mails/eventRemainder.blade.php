<!DOCTYPE html>
<html>
<head>
    <title>Pengumuman Kegiatan {{$event->title }} </title>
</head>
<body>
    <h2>{{ $event->title }}</h2>
    <p>{{ $event->description }}</p>
    <p>Jadwal: {{ $event->schedule }}</p>
</body>
</html>
