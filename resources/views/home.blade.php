@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <h1>Hello, welcome {{ Auth::user()->name }}</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>Address</th>
                        <th>Postal Code</th>
                        <th>Complement</th>
                        <th>District</th>
                    </tr>
                    <tr style="color: green;">
                        <td>{{ Auth::user()->address }} - {{ Auth::user()->number }},  {{ Auth::user()->city }}, {{ Auth::user()->state }} </td>
                        <td>{{ Auth::user()->postal_code }}</td>
                        <td>{{ Auth::user()->complement }}</td>
                        <td>{{ Auth::user()->district }}</td>
                    </tr>
                </table>
                <p>Your email address is: <span style="color: green;"> {{ Auth::user()->email }} </span>  </p> 
                <p> Use it to loggin in our system!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
