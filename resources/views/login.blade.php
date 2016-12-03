@extends('header')

@section('body')

    <div class="container theme-showcase" role="main">


        <div style="margin-top: 90px;">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">

                        <body>

                        <div class="container">

                            <form class="form-signin">
                                <h2 class="form-signin-heading">Please sign in</h2>
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            </form>


                        </div> <!-- /container -->


                        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
                        </body>
                    </div>

                    <div class="col-lg-4"></div>
                </div>

            </div>
        </div>

        <footer class="footer">
            <p class="text-center">All Rights Reserved. Copyright(c) 2017 by TCUS.</p>
        </footer>
    </div>
@stop