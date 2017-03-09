@extends('welcome')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <style>
                    .margin-top-100{
                        margin-top: 100px;
                    }
                    .align-center{
                        text-align: center;
                    }
                </style>
                    <table class="margin-top-100 table table-default align-center">
                        <tr>
                            <th>no</th>
                            <th>Nama</th>
                            <th>role</th>
                            <th>Password</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
@endsection