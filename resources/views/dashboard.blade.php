@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard<span class="float-right"><a href="{{route('listings.create')}}" class="btn btn-success btn-xs pull-right">Add Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>

                    @if(count($listings) > 0)

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($listings as $listing)
                              <tr>
                                <td>{{$listing->name}}</td>
                                <td><a href="{{route('listings.edit', $listing->id)}}" class="float-right btn btn-info ">Edit</a></td>
                                <td></td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>

                     @endif

                </div>
            </div>
        </div>
    </div>
@endsection
