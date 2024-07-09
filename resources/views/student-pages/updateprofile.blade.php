<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styling.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="login-registerpage">
            <nav class="nav-bar">
                <div class="titlename">SayItRight</div>
                    <div class="task-bar">
                        <ul>
                            <li><a href="/studentpage">Dashboard</a></li>
                            <li><a href="/studmanageyourcourses">Manage Your Courses</a></li>
                            <li><a href="/manageclass">Manage Class</a></li>
                            <li><a href="/managehomework">Homework Submissions</a></li>
                            <li><a href="/notifications">Notifications</a></li>
                            <li><a href="/updateprofile">Update Profile</a></li>
                            <li><a href="/managerecordings">Manage Recordings</a></li>
                            <li><a href="/checkscores">Check Your Scores</a></li>
                            <li><a href="/studentlogout">Logout</a></li>
                        </ul>
                    </div>
            </nav>
        </div>
        <div id="footer">
            Chat<a href="/chat"><img src="{{asset('images/chat-icon.png')}}"></a>
        </div>
        <div id="profile-details">
            <h1>PROFILE DETAILS</h1>
            @foreach ($users as $user)
            <p>NetId: {{ $user->username }}</p>
            <p>Name: {{ $user->fullname }}</p>
            <p>Adress: {{ $user->address }} </p>
            <p>Email: {{ $user->email }}</p>
            <p>Contact Number: {{ $user->contact }}</p>
            <a href="/editdetails">Edit Details</a>
            @endforeach
            
        </div>
    </body>
</html>