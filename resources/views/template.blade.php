<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ItSchool</h1> 
    <h2>{{ $name }}</h2> 
    <table>
        @foreach($posts as $key => $post)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
            </tr>
        @endforeach
    </table>

    <form action="contacts" method="POST">
        @csrf
        <button>Отправить</button>
    </form>
</body>
</html>