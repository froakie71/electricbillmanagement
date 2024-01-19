@extends('client.defualtlayout.clientlayout')
@include('client.css.client_adduser')
@section('content')
    <div>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 600px;
                margin: 50px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
                color: #333;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin-bottom: 8px;
                color: #555;
            }

            input {
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }

            input[type="submit"] {
                background-color: #4caf50;
                color: #fff;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            .flex-anchor {
                display: flex;
                justify-content: center;
            }
        </style>
        </head>

        <body>
            <div class="container">
                <h2>Add User</h2>
                <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="accountno">Account No.:</label>
                    <input type="text" id="accountno" name="accountno">
                    @if ($errors->has('accountno'))
                        <span>{{ $errors->first('accountno') }}</span>
                    @endif
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                    @if ($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    @if ($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                    <label for="previousbill">Previous Bill.:</label>
                    <input type="number" id="previousbill" name="previousbill">
                    @if ($errors->has('previousbill'))
                        <span>{{ $errors->first('previousbill') }}</span>
                    @endif
                    <label for="currentbill">Current Bill:</label>
                    <input type="number" id="currentbill" name="currentbill">
                    @if ($errors->has('currentbill'))
                        <span>{{ $errors->first('currentbill') }}</span>
                    @endif
                    <label for="wattage">Wattage:</label>
                    <input type="number" id="wattage" name="wattage">
                    @if ($errors->has('wattage'))
                        <span>{{ $errors->first('wattage') }}</span>
                    @endif
                    <label for="status">status:</label>
                    <input type="text" id="status" name="status">
                    @if ($errors->has('status'))
                        <span>{{ $errors->first('status') }}</span>
                    @endif
                    <div class="flex-anchor">
                        <button type="submit">confirm</button>
                    </div>
                    {{-- <div class="flex-anchor">
                        <a href="{{ route('view.user') }}">confirm</a>
                    </div> --}}
                </form>
            </div>
        </body>

        </html>
