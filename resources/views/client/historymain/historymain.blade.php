@extends('client.defualtlayout.clientlayout')
@include('client.css.client_history')
@section('content')

<body>
    <div class ="exitlogo">
        <a href="{{ route('view.mainpage') }}">
            <img src="/imgs/exit.jpg" alt="image of a person" height="50px">
        </a>
    </div>  
    <table class="account-table">
        <thead>
            <h1 class="center">
               HISTORY
            </h1>
            <H2>
                <h2 class="center">
                Addes Users
            </H2>
            <div class="flex-box">
                <div></div>
            </div>
            <tr>
                <th>Account No.</th>
                <th>Email</th>
                <th>Previous Bill</th>
                <th>Current Bill</th>
                <th>Wattage Bill</th>
                <th>Due date payment</th>
                <th>Paid date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($table_data as $item)
                <tr>
                    <td>{{ $item->AccountNo }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->PreviousBill }}</td>
                    <td>{{ $item->CurrentBill }}</td>
                    <td>{{ $item->Wattage }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
@stop
