@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: Edit Advertising
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Advertising</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($advertising, [
                            'method' => 'PATCH',
                            'url' => ['/admin/advertising', $advertising->id_advertising],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.advertising.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection