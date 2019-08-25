@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

                        <h3>Create Listings</h3>

                        {!! Form::open(['method'=>'POST', 'action'=>'ListingsController@store','files'=>true]) !!} <!--files true enables you to add file, upload. equivalent of enctype=multiform/data-->

                        <div class="form-group">

                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}


                        </div>

                            <div class="form-group">

                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::text('email', null, ['class'=>'form-control']) !!}


                            </div>


                        <div class="form-group">

                            {!! Form::label('website', 'Company Website:') !!}
                            {!! Form::text('website', null, ['class'=>'form-control']) !!}


                        </div>


                            <div class="form-group">
                                {!! Form::label('phone', 'Phone Number:') !!}
                                {!! Form::text('phone', null, ['class'=>'form-control']) !!}


                            </div>


                            <div class="form-group">

                                {!! Form::label('address', 'Address:') !!}
                                {!! Form::text('address', null, ['class'=>'form-control']) !!}


                            </div>

                            <div class="form-group">

                                    {!! Form::label('bio', 'Bio:') !!}
                                    {!! Form::textarea('bio', null, ['class'=>'form-control']) !!}


                                </div>


                        <div class="form-group">

                            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        </div>


                        {!! Form::close() !!}



                    </div>
                </div>
            </div>
        </div>

@endsection
