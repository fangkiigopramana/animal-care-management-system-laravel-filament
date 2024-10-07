<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Data Experience</h1>
  <p>Date: {{now()}}</p>

  <table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($experiences as $experience)
        <tr>
            <td>{{ $experience->company_name }}</td>
            <td>{{ $experience->job_title }}</td>
            <td>{{ $experience->start_date }}</td>
            <td>{{ $experience->end_date }}</td>
            <td>{{ $experience->description }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>