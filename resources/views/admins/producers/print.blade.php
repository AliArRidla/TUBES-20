<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
</head>
<body>
  
    <div class="container">
      <h1>Daftar Produser</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Producer ID</th>
            <th>Name</th>                                
            <th>Birth Date</th>
            <th>Birth City</th>                                
          </tr>
        </thead>
        <tbody>
          @foreach ($producer as $item)
          <tr>
            <td>
             ID-PRO-{{$item->id}}
            </td>
            <td>{{$item->nama}}</td>                                
            <td>{{$item->ttl}}</td>
            <td>{{$item->kota}}</td>                                
          </tr>    
          @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>