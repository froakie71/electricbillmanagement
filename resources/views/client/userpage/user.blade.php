@extends('client.defualtlayout.clientlayout')
@include('client.css.client_user')
@section('content')

    <body>
        <table class="account-table">
            <thead>
                <h1>
                    LIST OF USERS
                </h1>
                <div class="flex-box">
                    <div></div>
                    <a href="{{ route('view.adduser') }}"><img src="/imgs/plus.png" alt="plus-icon" width="30px"></a>
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
                @foreach ($table_data as $item)
                <!-- <p>{{$item}}</p> -->
                    <tr>
                        @if($item->Status == 'unpaid'){
                        <td>{{ $item->AccountNo }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->PreviousBill }}</td>
                        <td>{{ $item->CurrentBill }}</td>
                        <td>{{ $item->Wattage }}</td>
                        <td>{{ $item->Status }}</td>
                        <td>
                            <a href="{{ route('edituser', ['id' => encrypt($item->AccountNo)]) }}">
                                <img src="/imgs/edit.png" alt="edit-icon" width="30px">
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('delete', ['id' => encrypt($item->AccountNo)]) }}">
                                <img src="/imgs/delete.png" alt="delete-icon" width="30px">
                            </a>
                        </td> 
                        }
                        @endif
                    </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </body>

    {{-- </html> --}}

@stop
