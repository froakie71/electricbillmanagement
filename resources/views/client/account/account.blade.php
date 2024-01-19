@extends('client.defualtlayout.clientlayout')
@include('client.css.client_account')
@section('content')
<div class ="exitlogo">
    <a href="{{ route('mainpageuser',$AccountNo) }}">
        <img src="/imgs/exit.jpg" alt="image of a person" height="50px">
    </a>
</div>
    <body>
        <table class="account-table">
            <thead>
                <h1>
                       MY ACCOUNT  
                </h1>
                <div class="flex-box">
                    <div></div>
                </div>
                <tr>
                    <th>Account No.</th>
                    <th>Email</th>
                    <th>Previous Bill</th>
                    <th>Current Bill</th>
                    <th>Wattage</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->AccountNo }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->PreviousBill }}</td>
                        <td>{{ $item->CurrentBill }}</td>
                        <td>{{ $item->Wattage }}</td>
                        <td>{{ $item->Status }}</td>    
                    </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </body>

    {{-- </html> --}}

@stop
