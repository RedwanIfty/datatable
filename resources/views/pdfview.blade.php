<!DOCTYPE html>
<html>
<head>
  <title>Table Example</title>
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
</body>
</html>
