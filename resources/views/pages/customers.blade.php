@extends('/layouts.app')

@section('content')
    <h1>Customers</h1>
    @foreach ($customerList as $customer)
        <a href="/customers/{{$customer->custID}}">{{$customer->firstName}}</a><br>
    @endforeach
@endsection