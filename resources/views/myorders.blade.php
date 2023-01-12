@extends('master')
@section('content')

<div class="m-4">
    <table id="dtBasicExample" class="table table-striped table-bordered table-hover table-sm">
        <thead>
            <tr>
                <th class="th-sm">item Name</th>
                <th class="th-sm">Price</th>
                <th class="th-sm">Description</th>
                <th class="th-sm">Payment Status</th>
                <th class="th-sm">Payment Method</th>
                <th class="th-sm">Delivery Status</th>
                <th class="th-sm">Address</th>
                <th class="th-sm">Order Date</th>
            </tr>
        </thead>
        <h4> My Orders List</h4>
        <tbody>
            @foreach ($orders as $item)
            <tr >
                

                <td class="table-primary">{{$item->name}}</td> 
                <td class="table-secondary">{{$item->price}}</td> 
                <td class="table-success">{{$item->description}}</td> 
                <td class="table-info">{{$item->status }}</td> 
                <td class="table-warning">{{$item->payment_method }}</td> 
                <td class="table-danger">{{$item->payment_status }}</td> 
                <td class="table-light">{{$item->address }}</td> 
                <td class="table-light">{{$item->created_at }}</td> 
            </tr>
            
            @endforeach
    
          
          
    
        </tbody>
        
    </table>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>


@endsection


