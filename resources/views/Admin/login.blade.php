<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" >
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            width:100%;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
           
            /* background:black; */
        }
        .loginForm{
            width:400px !important;
            height:350px;
            border-radius:0px 30% 20% 20% !important;
            border:1px solid rgb(207, 201, 201);
            display:flex !important;
            flex-direction:column !important;
            justify-content:center !important;
            align-items:center;
            gap:15px;
            box-shadow:7px 8px 3px teal;
            background: rgba(245, 238, 238, 0.2) !important;
            position: relative;
            overflow:hidden;
        }
        .loginForm input{
            height:45px;
            width:90%;
            font-size:1.1rem;
            text-align:center;
        }
        .loginForm svg{
            height:90px; 
             width:90px;
             color:teal;
        }
        .loginForm .title{
            position: absolute;
            top:17px;
            left:-35px;
            transform:rotate(-45deg);
            color:white;
            background:teal;
            padding:0 30px;
        }
    </style>
</head>
<body>
    <div class="container " >
        <form action="" class="form-control loginForm" >
        <h4 class="title">Admin</h4>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
        </svg>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login" class="btn btn-danger">
            {{-- <a href="">Back To Home</a> --}}
        </form>
    </div>
</body>
</html>