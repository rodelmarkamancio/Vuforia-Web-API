@extends('common.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">

                <form id="formUpload" method="post" action="{{ route('store') }}">

                    <div class="form-group">
                        @if (count($errors))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>

                    @if (Session::has('flash_message'))
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <em> {!! session('flash_message') !!}</em>
                        </div>
                    @endif
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">
                            Login
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection