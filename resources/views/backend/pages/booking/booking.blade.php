@extends('backend.master')



@section('content')

@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif

<a class="btn btn-success"href="#">Booking</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">House Name</th>
        <th scope="col">Customer Name</th>
        <th scope="col">flat_price</th>
        <th scope="col">Date</th>
        <th scope="col">Contact</th>
        <th scope="col">details</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

      </tr>
    </thead>

    <tbody>
  @foreach($allbooking as $key=>$data)

  <tr>
      <td>{{ $key+1 }}</td>
      <td>{{$data->houseinfo->house_name}}</td>
      <td>{{$data->user->name}}</td>
      <td>{{$data->flat_price}}</td>
      <td>{{$data->bookingdate->format('Y-m-d')}}</td>
      <td>{{$data->emargencyContactnumber}}</td>
      <td>{{$data->bookingdetails}}</td>
      <td>
          @if($data->status == 'pending')
                <span class="btn btn-info">Pending</span>
          @elseif($data->status == 'approved')
                <span class="btn btn-success">Approved</span>
          @else
                <span class="btn btn-danger">Rejected</span>
         @endif
    </td>
      <td>
        <div class="btn-group dropup">
            <button type="button" class="btn btn-primary dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Action
            </button>
            <div class="dropdown-menu" x-placement="top-start"
                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -2px, 0px);">
                <a class="dropdown-item"
                   href="{{route('booking.status',['id'=>$data->id,'status'=>'approved'])}}">Approved</a>
                <a class="dropdown-item"
                   href="{{route('booking.status',['id'=>$data->id,'status'=>'rejected'])}}">Reject</a>
                   <a class="dropdown-item"
                   href="{{route('booking.status',['id'=>$data->id,'status'=>'pending'])}}">Pending</a>
            </div>

        </div>

      </td>
      



  </tr>
@endforeach
    </tbody>

</table>



@endsection
