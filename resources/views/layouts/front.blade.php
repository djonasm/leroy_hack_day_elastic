<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DDrills</title>

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .menu-list li a {
                position: relative;
            }
            .zizaco {
                background: #f5f53c;
                padding: 20px;
                border: 1px solid #999999;
                color: #333;
                position: absolute;
                top: -10px;
                right: 10px;
            }
        </style>
    </head>
    <body>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <div id="mc_embed_signup" class="columns is-vcentered">
                    <div class="column is-one-third is-left">
                        <p class="title">Welcome to <strong>DDrills</strong></p>
                        <p class="subtitle">The home of your holes</p>
                    </div>
                    <div class="column">
                        <form action="{{ url('/') }}">
                            <div>
                                <div class="field is-grouped">
                                    <div class="control has-icon is-expanded">
                                        <input type="name" name="name" class="input is-flat required">
                                        <span class="icon is-small">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <div class="control">
                                        <input type="submit" value="Search" class="button is-white is-outlined">
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End mc_embed_signup-->
            </div>
        </div>
    </section>
    </section>
    <div class="zizaco is-hidden">Zizaco Approves!</div>
    <div class="container is-fluid">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
    <script>
        (function() {
            $('.menu-list li a').on('mouseover', function() {
                $(this).append('<div class="zizaco">Zizaco Approves!</div>');
            }).on('mouseout', function () {
                $('.zizaco').remove();
            });
        })();
    </script>
    </body>
</html>
