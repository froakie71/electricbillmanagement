@extends('client.defualtlayout.clientlayout')
@section('content')
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
<div class="container">
    <h2>{{$data->email}}</h2>
    <form action="{{ route('update', $data->AccountNo) }}" method="POST">
        @csrf
        <label for="previousbill">Previous Bill.:</label>
        <input type="number" id="previousbill" name="previousbill" value="{{$data->PreviousBill}}">
        <label for="currentbill">Current Bill:</label>
        <input type="number" id="currentbill" name="currentbill" value="{{$data->CurrentBill}}">
        <label for="wattage">Wattage:</label>
        <input type="number" id="wattage" name="wattage" value="{{$data->Wattage}}">
        <label for="status">status:</label>
                    <input type="text" id="status" name="status">
                    @if ($errors->has('status'))
                        <span>{{ $errors->first('status') }}</span>
                    @endif
        <div class="flex-anchor">
            <button type="submit">confirm</button>
        </div>
    </form>
</div>
@stop