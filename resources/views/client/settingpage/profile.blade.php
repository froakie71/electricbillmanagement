@extends('client.defualtlayout.clientlayout')
@include('client.css.client_setting')
@section('content')

    </head>

    <body>
        <div class="profile-container">
            <img src="{!! asset('imgs/'.auth()->subsrcibe_user()->img_path) !!}" alt="mdo" width="32" height="32" alt="example of an image" class="test">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h2>Profile Settings</h2>

                <label for="old-password">Old Password:</label>
                <input type="password" id="old-password" name="old-password" placeholder="Enter old password">

                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" name="new-password" placeholder="Enter new password">

                <label for="profile-pic">Change Profile Picture:</label>
                <input type="file" id="profile-pic" name="profile-pic">

                <button type="submit">Save Changes</button>
            </form>
        </div>
    </body>
@stop
