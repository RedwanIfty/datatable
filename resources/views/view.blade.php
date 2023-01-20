<!DOCTYPE html>
<html>
<head>
  <title>Table Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <style>
    a.btn {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
    }

    a.btn:hover {
        background-color: darkblue;
        color: white;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #dddddd;
    }
  </style>
</head>
<body>
<a class='btn' href={{route('pdf')}}>Generate PDF</a><br><br><br>
<table id="myTable">
    <thead>
  <tr>
    <th>SL</th>
    <th>Start</th>
    <th>End</th>
    <th>Bill No</th>
    <th>Water</th>
    <th>VAT</th>
    <th>Charge</th>
    <th>Total</th>
    <th>Miscellaneous</th>
  </tr>
</thead>
<tbody>
  @foreach($customer as $c)
  <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->start}}</td>
    <td>{{$c->end}}</td>
    <td>{{$c->bill_no}}</td>
    <td>{{$c->water}}</td>
    <td>{{$c->vat}}</td>
    <td>{{$c->charge}}</td>
    <td>{{$c->total}}</td>
    <td>{{$c->miscellaneous}}</td>
  </tr>
  @endforeach
</tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
