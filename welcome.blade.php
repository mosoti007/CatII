<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome
                </div>

                <div class="links">
                    
                    <a href="{{ url('students')}}">Student</a>
                    <a href="{{ url('fees')}}">Fees</a>
                    <table>
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date of Birth</th>
                                <th>Adress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($data['students'])>0)
                            @foreach($data['students'] as $student)
                            <tr>
                                <td>
                                    {{$student->student_number}}
                                </td>
                                <td>
                                    {{$student->first_name}}
                                </td>
                                <td>
                                    {{$student->last_name}}
                                </td>
                                <td>
                                    {{$student->date_of_birth}}
                                </td>
                                <td>
                                    {{$student->address}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
        
        @endif
                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Date of payment</th>
                                <th>Amount paid</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($data['fees'])>0)
                            @foreach($data['fees'] as $fees)
                            <tr>
                                <td>
                                    {{$fees->student_name}}
                                </td>
                                <td>
                                    {{$fees->date_of_payment}}
                                </td>
                                <td>
                                    {{$fees->amount_paid}}
                                </td>
                                
                                
                            </tr>
                        </tbody>
                    </table>
                    
                    
                </div>
            </div>
        </div>
        @endforeach
        
        @endif
    </body>
</html>

