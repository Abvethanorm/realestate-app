@extends('layouts.admin')

@section('content')
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status </th>
                    <th scope="col">Days on Market</th>
                    <th scope="col">Date Posted</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                @foreach ($listings as $listing)
    <tr>
        <th scope="row">{{ $listing->id }}</th>
        <td>
            <a href="{{route('admin.edit', [
                'slug' => $listing->slug ,
                'id' => $listing->id
            ])}}"> {{ $listing->address }} {{ $listing->address2 }} <br>
             {{ $listing->city }}, {{ $listing->state }}, {{ $listing->zip }}
             </a>
        </td>
        <td>Active</td>
        <td>6</td>
        <td>{{ $listing->created_at }}</td>
    </tr>
@endforeach

                  
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->
              {{$listings->links('admin.bootstrap-5')}}
            </div>
          </div>
    
@endsection