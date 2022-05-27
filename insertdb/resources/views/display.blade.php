<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

  <h1>Display</h1>

  <table border="1px" align="center">
    <tr>
      <td> Student name</td>
      <td> Email </td>
      <td> image </td>
    </tr>

    @foreach($data as $student)

    <tr>
      <td>{{ $student->name}}</td>
      <td>{{ $student->email}}</td>
      <td>
        <img src="student/{{ $student->image}}" alt="" height="150" width="150">

      </td>
    </tr>

    @endforeach



  </table>

</body>
</html>
