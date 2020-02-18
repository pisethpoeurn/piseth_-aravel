

@if(count($customers) > 0)
    @foreach ($customers as $customer)
        {{$customer}}
    @endforeach
@else
    Empty Customer!!!
@endif