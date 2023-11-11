@extends('layouts.admin') 
@section('content')
<h1>SMD Ju heard</h1>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">New Listing</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST"  action="{{route('admin.post')}}"  >
                @csrf
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address"
                  name="addess"
                   value="{{ old('address') }}"
                  placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="address2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="address2"
                  name="address2"
                   value="{{ old('address2') }}"
                   placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" 
                  id="city"
                  name="city"

                   value="{{ old('city') }}"
                  >
                </div>
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected="">New York</option>
                      <option>New Jersey</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                
                  <div class="col-md-2">
                  <label for="bedrooms" class="form-label">Beds</label>
                  <input type="text" class="form-control" id="bedrooms"
                   name="bedrooms"
                    value="{{ old('bedrooms') }}"
                   >
                  </div>
                  <div class="col-md-2">
                  <label for="baths" class="form-label">Baths</label>
                  <input type="text" class="form-control" id="baths"
                   name="baths"
                    value="{{ old('baths') }}"
                   >
                </div>
                  <div class="col-md-2">
                  <label for="sqft" class="form-label">SQFT</label>
                  <input type="text" class="form-control" id="sqft"
                   name="sqft"
                    value="{{ old('sqft') }}"
                   >
                   
                </div>
                <label for="description" class="form-label">Description</label>
                <textarea class="col-md-12" id="description" name="description">
                </textarea>


                  <button type="submit" class="btn btn-primary">Submit</button>
                
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
@endsection
