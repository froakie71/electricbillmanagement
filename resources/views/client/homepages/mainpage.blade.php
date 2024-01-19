@extends('client.defualtlayout.clientmainpage')
@section('content')
    {{-- <input type="checkbox" id="drawer-toggle" name="drawer-toggle" />
<label for="drawer-toggle" id="drawer-toggle-label"></label>
<header></header> --}}
    <ul>
        <li>
            <div>
                <img src="/imgs/person.png" alt="image of a person" height="50px">
            </div>
            <div>
                <a href="{{ route('view.user') }}" target="_blank">User</a>
            </div>
        </li>

        <li>
            <div>
                <img src="/imgs/history.png" alt="image of a person" height="50px">
            </div>
            <div>
                <a href="{{ route('view.historymain') }}">History</a>
            </div>
        </li>

        {{-- <li> --}}
            {{-- <div> --}}
                {{-- <img src="/imgs/settings.png" alt="image of a person" height="50px"> --}}
            {{-- </div> --}}
            {{-- <div> --}}
                {{-- <a href="{{ route('view.profile') }}">Settings</a> --}}
            {{-- </div> --}}
        {{-- </li> --}}

        {{-- <li>
            <div>
                <img src="/icons/icons8-support-50.png" alt="image of a person" height="50px">
            </div>
            <div> --}}
                {{-- <a href="{{ route('view.supportpage') }}">Support</a> --}}
            {{-- </div>
        </li> --}}

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
