<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
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
                {!! Form::open([ 'action'=> 'accreditationcardController@store', 'method' => 'POST' ]) !!}
                        {{Form::text('name','' , ['class' =>'form-control' ])}}
                        {{Form::text('father_name','' , ['class' =>'form-control' ])}}
                        <table class="table table-sm table-dark">
                          <thead>
                            <tr>
                              <th scope="col">Education</th>
                              <th scope="col">year</th>
                              <th scope="col">board</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Matric</td>
                              <td>{{Form::date('marticyoc','' , ['class' =>'form-control' ])}}</td>
                              <td>{{Form::text('matricboard','' , ['class' =>'form-control' ])}}</td>
                            </tr>
                            <tr>
                              <td>Intermediate</td>
                              <td>{{Form::date('interyoc','' , ['class' =>'form-control' ])}}</td>
                              <td>{{Form::text('interboard','' , ['class' =>'form-control'])}}</td>
                            </tr>
                            <tr>
                              <td>Graduation</td>
                              <td>{{Form::date('graduationyoc','' , ['class' =>'form-control' ])}}</td>
                              <td>{{Form::text('graduationboard','' , ['class' =>'form-control' ])}}</td>
                            </tr>
                            <tr>
                              <td>Masters</td>
                              <td>{{Form::date('mastersyoc','' , ['class' =>'form-control'])}}</td>
                              <td>{{Form::text('mastersboard','' , ['class' =>'form-control' ])}}</td>
                            </tr>
                            <tr>
                              <td>PHD's</td>
                              <td>{{Form::date('phdsyoc','' , ['class' =>'form-control' ])}}</td>
                              <td>{{Form::text('phdsboard','' , ['class' =>'form-control' ])}}</td>
                            </tr>
                            <tr>
                              <td>Other</td>
                              <td>{{Form::date('otheryoc','' , ['class' =>'form-control' ])}}</td>
                              <td>{{Form::text('otherboard','' , ['class' =>'form-control' ])}}</td>
                            </tr>
                          </tbody>
                    </table>
                     {{Form::submit('Submit' , ['class' =>'btn btn-primary' ])}}
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
