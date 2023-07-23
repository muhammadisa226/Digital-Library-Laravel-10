<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>
<style>
#Books {
  border-collapse: collapse;
  width: 100%;
}

#Books td, #Books th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Books tr:hover {background-color: #ddd;}

#Books th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0096FF;
  color: white;
}
</style>
</head>
<body>

<h1>Data Book</h1>

<table id="Books">
  <tr>
    <th>No</th>
    <th>Title</th>
    <th>Category</th>
    <th>Jumlah</th>
    <th>Description</th>
  </tr>
  @foreach($books as $book)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $book->title }}</td>
    <td>{{ $book->category->name }}</td>
    <td>{{ $book->amount }}</td>
    <td>{{ $book->description }}</td>
</tr>
@endforeach
</table>
</body>
</html>
