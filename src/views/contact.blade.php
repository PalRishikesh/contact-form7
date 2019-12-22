<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Contact Form 7</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }



        </style>
    </head>
    <body>
            <div class="container">
                <h2>Contact us Form </h2>
                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="You Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="You Name" class="form-control">
                    </div>
                    <div class="form-group">
                          <textarea name="message" placeholder="Your Message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
