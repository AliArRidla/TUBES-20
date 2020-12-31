<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>   
     <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
 
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: rgb(19, 110, 170);
            color: white;
        }
        tr:hover {background-color: #f5f5f5;}
    </style>  
</head>
<body>
      
      <h1>Daftar Movie</h1>
      <table>
          <tr>
            <th>Movies ID</th>
            <th>judul</th>                                
            <th>kategori</th>
            <th>deskripsi</th>                                
          </tr>
   
          @foreach ($movie as $item)
          <tr>
            <td>
             ID-PRO-{{$item->id}}
            </td>
            <td>{{$item->judul}}</td>                                
            <td>{{$item->kategori}}</td>
            <td>{{$item->deskripsi}}</td>                                
          </tr>    
          @endforeach
      </table>
    </div>
</body>
</html>