@extends('victoragro.layouts.master')

@section('title', 'Product List')

@section('content')

<div class="card mb-6">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Product Create</h5>
        <a href="{{ route('admin.products.create') }}" class="btn btn-danger btn-sm">Back</a>
    </div>
    <div class="card-body">
        <form>
            @csrf
            <div class="row g-6">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Product Name En <span
                            class="text-danger">*</span></label>
                    <input type="text" id="multicol-username" class="form-control" placeholder="Product Name English" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Product Name Bn</label>
                    <input type="text" id="multicol-username" class="form-control" placeholder="Product Name English" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Scientific Name</label>
                    <input type="text" id="multicol-username" class="form-control" placeholder="Product Name English" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Manufacture Company</label>
                    <input type="text" id="multicol-username" class="form-control" placeholder="Product Name English" />
                </div>
            </div>
            <hr class="my-6 mx-n6" />
            <h6>2. Personal Info</h6>
            <div class="row g-6">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-first-name">First Name</label>
                    <input type="text" id="multicol-first-name" class="form-control" placeholder="John" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-last-name">Last Name</label>
                    <input type="text" id="multicol-last-name" class="form-control" placeholder="Doe" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-country">Country</label>
                    <select id="multicol-country" class="select2 form-select" data-allow-clear="true">
                        <option value="">Select</option>
                        <option value="Australia">Australia</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="China">China</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Korea">Korea, Republic of</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Russia">Russian Federation</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                    </select>
                </div>
                <div class="col-md-6 select2-primary">
                    <label class="form-label" for="multicol-language">Language</label>
                    <select id="multicol-language" class="select2 form-select" multiple>
                        <option value="en" selected>English</option>
                        <option value="fr" selected>French</option>
                        <option value="de">German</option>
                        <option value="pt">Portuguese</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-birthdate">Birth Date</label>
                    <input type="text" id="multicol-birthdate" class="form-control dob-picker"
                        placeholder="YYYY-MM-DD" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-phone">Phone No</label>
                    <input type="text" id="multicol-phone" class="form-control phone-mask" placeholder="658 799 8941"
                        aria-label="658 799 8941" />
                </div>
            </div>
            <div class="pt-6">
                <button type="submit" class="btn btn-primary me-4">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

@endsection