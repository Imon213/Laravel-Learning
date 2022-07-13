<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           th {
  background-color: #04AA6D;
  color: white;
}
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<title>Document</title>
  
    
<table border="1" class="table table-striped table-hover text-center">
    <tr class="table-primary">
   
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Product Status</th>
        <th>Ordered Quantity</th>
        <th>Total Amount</th>
        <th>Action</th>
        
    </tr>
    @foreach($detail as $item)
    <tr>
        <td>{{$item->order->p_name}}</td>
        <td>{{$item->order->p_type}}</td>
        <td>{{$item->order->status}}</td>
        <td>{{$item->qty}}</td>
        <td>{{$item->totalamount}}</td>
        
        
    </tr>
   @endforeach
</table>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>