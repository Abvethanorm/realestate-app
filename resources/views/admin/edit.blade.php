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
                  name="address"
                   value="{{ old('address', $listing->address) }}"
                  placeholder="1234 Main St">
                </div>
                 @error('address')
                <p>Yo stupit whats the addy</p>
                @enderror
                <div class="col-12">
                  <label for="address2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="address2"
                  name="address2"
                   value="{{ old('address2', $listing->address2) }}"
                   placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" 
                  id="city"
                  name="city"

                   value="{{ old('city', $listing->city) }}"
                  >
                </div>
                  @error('city')
                <p>Yo stupit whats the city</p>
                @enderror
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select id="state" class="form-select"
                  name="state"
                  value="{{old('state', $listing->state)}}"
                  >
                    <option selected="">New York</option>
                      <option>New Jersey</option>
                  </select>
                </div>
                  @error('state')
                <p>Yo stupit whats the state</p>
                @enderror
                <div class="col-md-2">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip"
                  name="zip"
                  value="{{old('zip'), $listing->zip}}"
                  >
                
                </div>
                  @error('zip')
                <p>Yo stupit whats the zip</p>
                @enderror
                  <div class="col-md-2">
                  <label for="bedrooms" class="form-label">Beds</label>
                  <input type="text" class="form-control" id="bedrooms"
                   name="bedrooms"
                    value="{{ old('bedrooms', $listing->bedrooms) }}"
                   >
                  </div>
                    @error('bedrooms')
                <p>Yo stupit how many bedrooms </p>
                @enderror
                  <div class="col-md-2">
                  <label for="baths" class="form-label">Baths</label>
                  <input type="text" class="form-control" id="baths"
                   name="baths"
                    value="{{ old('baths', $listing->baths) }}"
                   >
                </div>
                  @error('baths')
                <p>Yo stupit how many baths </p>
                  @enderror
                  <div class="col-md-2">
                  <label for="sqft" class="form-label">SQFT</label>
                  <input type="text" class="form-control" id="sqft"
                   name="sqft"
                    value="{{ old('sqft', $listing->sqft) }}"
                   >
                   
                </div>
                  @error('sqft')
                <p>Yo stupit how many sqft </p>
                @enderror
                <label for="description" class="form-label">Description</label>
              <textarea class="col-md-12" id="description" name="description">{{   $listing->description }}</textarea>



                  <button type="submit" class="btn btn-primary">Submit</button>
                
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
@endsection
