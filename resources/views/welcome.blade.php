<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .updatebookstable td{
                border: 1px solid black;
                color:black;
            }
        </style>
    </head>
    <body>
             <?php
        if (isset($info)){
           echo "<table class='updatebookstable'>";
            echo "<tr>";
            echo "<td>ID</td>";
            echo "<td>Author Name</td>";
            echo "<td>Author Second Name</td>";
            echo "<td>Author Last Name</td>";
            echo "<td>Author Date Birthday</td>";
            echo "<td>Book name</td>";
            echo "<td>Book genre</td>";
            echo "<td>Book publish_year</td>";
            echo "</tr>";
              foreach ($info as $value) {
               echo "<td>$value->id</td>";
               echo "<td>$value->authorname</td>";
               echo "<td>$value->second_name</td>";
               echo "<td>$value->last_name</td>";
               echo "<td>$value->date_birth</td>";
               echo "<td>$value->name</td>";
               echo "<td>$value->genre</td>";
               echo "<td>$value->publish_year</td>";
               echo "</tr>";

           }
           echo "</table>";
        }
        ?>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            
        </div>
   
    </body>
</html>
