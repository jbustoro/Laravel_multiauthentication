@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="panel-heading">Your Session</div>

                    <div class="panel-body">

                        <?php

                        echo Session::getId()."<br><br>";

                        print_r(session()->all()) ;

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection