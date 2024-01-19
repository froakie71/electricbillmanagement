@extends('client.defualtlayout.clientmainpage')
@section('content')
    {{-- <input type="checkbox" id="drawer-toggle" name="drawer-toggle" />
<label for="drawer-toggle" id="drawer-toggle-label"></label>
<header></header> --}}
    <ul>

        <li>
            <li>
                <div>
                    <img src="/imgs/person.png" alt="image of a person" height="50px">
                </div>
    
                   
                </div>
                <a href="{{ route('account', $credentials) }}">Account</a>
                </div>
            </li>
        </li>
        

        <li>
            <div>
                <img src="/icons/icons8-support-50.png" alt="image of a person" height="50px">
            </div>
            <div>
                <a href="{{ route('supportpage',$credentials) }}">Support</a>
            </div>
        </li>
        <li>
            <div>
                <img src="/imgs/payment1.png" alt="image of a person" height="50px">
            </div>
            <div>
                <p style="color:white;">
                    <a href="{{ route('view.paymentpage',$credentials) }}">Payment</a>
                </p>
            </div>
        </li>

        <li>
            </div>
                <img src="/imgs/person.png" alt="image of a person" height="50px">
                <a href="{{ route('view.history', $credentials) }}">history</a>
            </div>
        </li>

        <li>
            <div>
                <img src="/imgs/log_out.png" alt="image of a person" height="50px">
            </div>
            <div>
                <a href="{{ route('logout') }}">Log out</a>
            </div>

        </li>

    </ul>
@stop
