<h1>diko</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="/css/moonbase.css" rel="stylesheet" />
</head>
<body>

  <h1>Display</h1>

  <table border="1px" align="center">
    <tr>
      <td> Student name</td>
    </tr>

    @foreach($data as $student)

    <tr>
      <td>{{ $student->name}}</td>
    </tr>

    @endforeach



  </table>

  <div style="padding: 10px; background: yellow">
    <a href="/home">View result</a>
  </div>

</body>
</html>
