@extends('layouts.admin') @section('content')
<h1>SMD Ju heard</h1>
<div class="col-md-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Complex Form Layout</h6>
        <div class="mT-30">
            <form method="POST" action="{{ route('admin.post') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="inputAddress">Address</label>
                    <input
                        type="text"
                        class="form-control"
                        id="address"
                        name="address"
                        placeholder="1234 Main St"
                        value="{{ old('address') }}"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputAddress2"
                        >Address 2</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="address2"
                        name="address2"
                        placeholder="Apartment, studio, or floor"
                        value="{{ old('address2') }}"
                    />
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputCity">City</label>
                        <input
                            type="text"
                            class="form-control"
                            id="city"
                            name="city"
                            value="{{ old('city') }}"
                        />
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="inputState">State</label>
                        <select
                            id="state"
                            name="state"
                            class="form-control"
                            value="{{ old('state') }}"
                        >
                            <option selected="selected">Choose...</option>
                            <option>New York</option>
                            <option value="NJ">New Jersey</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="inputZip">Zip</label>
                        <input
                            type="text"
                            class="form-control"
                            name="zip"
                            id="zip"
                            value="{{ old('zip') }}"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="bedrooms"
                            >Bedrooms</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="bedrooms"
                            name="bedrooms"
                            placeholder="4"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="bedrooms">Baths</label>
                        <input
                            type="text"
                            class="form-control"
                            id="baths"
                            name="baths"
                            placeholder="2"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="sqft">SQFT</label>
                        <input
                            type="text"
                            class="form-control"
                            id="sqft"
                            name="sqft"
                            placeholder="2000"
                        />
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-color">
                    Create!
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
