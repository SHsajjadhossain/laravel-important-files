@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | My Profile

@endsection

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">My Profile
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right"></div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <div class="content-body">
        <div class="row">
            <div class="col-12">

                <!-- profile header -->
                <ul class="nav nav-pills mb-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="pill" href="#pills-account" role="tab" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-user mr-50">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Account
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#pills-security" role="tab" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-lock mr-50">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            Security
                        </a>
                    </li>
                </ul>
                <!--/ profile header -->

                <!-- profile info section -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-account" role="tabpanel">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <div class="card-body py-2">
                                <form action="#!">
                                    <div class="d-flex flex-wrap align-items-end">
                                        <div class="mr-1 mb-1">
                                            <img src="https://i.pravatar.cc/300" data-reset-src="https://i.pravatar.cc/300"
                                                id="account-upload-img" class="uploadedAvatar rounded object-fit--cover"
                                                alt="profile image" width="100" height="100">
                                        </div>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mb-1">
                                            <div>
                                                <label role="button" for="account-upload"
                                                    class="btn btn-sm btn-success mb-75 mr-75 waves-effect waves-float waves-light">Upload</label>
                                                <input type="file" name="account-image" id="account-upload" accept="image/*"
                                                    hidden="">
                                                <button type="button" id="account-reset"
                                                    class="btn btn-sm btn-outline-secondary mb-75 waves-effect"
                                                    fdprocessedid="4dscr8">Reset</button>
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" id="first_name" class="form-control" name="first_name"
                                                    placeholder="First Name" fdprocessedid="vm95u">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" id="last_name" class="form-control" name="last_name"
                                                    placeholder="Last Name" fdprocessedid="c8q1li">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" name="email"
                                                    placeholder="demo@demo.com" fdprocessedid="ofhax">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="website">Website</label>
                                                <input type="url" id="website" class="form-control" name="website"
                                                    placeholder="demo.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="tel" id="phone" class="form-control" name="phone"
                                                    placeholder="xxx xxx xxx xxx" fdprocessedid="367ujr">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" id="address" class="form-control" name="address"
                                                    placeholder="Your Address" fdprocessedid="3bogp">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" id="state" class="form-control" name="state"
                                                    placeholder="State" fdprocessedid="7ot22">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <div class="position-relative"><select id="country"
                                                        class="select2 form-select select2-hidden-accessible" required=""
                                                        data-select2-id="country" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="2">Select Country</option>
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
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="1" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-country-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-country-container" role="textbox"
                                                                    aria-readonly="true" title="Select Country">Select
                                                                    Country</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="about">About</label>
                                                <div>
                                                    <input id="about" type="hidden" name="about">
                                                    <trix-editor input="about" class="trix-content"></trix-editor>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-success waves-effect waves-float waves-light w-100 w-sm-auto"
                                                fdprocessedid="2s5rw8">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-security" role="tabpanel">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <div class="card-body py-2">
                                <form action="#!">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="account-old-password">Current password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control" id="account-old-password"
                                                        name="password" placeholder="Enter current password">
                                                    <div class="input-group-append cursor-pointer">
                                                        <span role="button" class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="account-new-password">New Password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control" id="account-new-password"
                                                        name="new-password" placeholder="Enter current password">
                                                    <div class="input-group-append cursor-pointer">
                                                        <span role="button" class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="account-retype-new-password">Retype New Password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control"
                                                        id="account-retype-new-password" name="confirm-new-password"
                                                        placeholder="Enter current password">
                                                    <div class="input-group-append cursor-pointer">
                                                        <span role="button" class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-success waves-effect waves-float waves-light w-100 w-sm-auto">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile info section -->
            </div>
        </div>

    </div>
</div>

@endsection

@push('js')

<script>
    // Update & Reset Profile photo on click of button
        $(document).ready(function(){
            let accountUploadImg = $('#account-upload-img');
            let accountUploadInput = $('#account-upload');
            let accountResetBtn = $('#account-reset');
            if (accountUploadInput) {
                accountUploadInput.on('change', function (e) {
                    var reader = new FileReader(),
                        files = e.target.files;
                    reader.onload = function () {
                        if (accountUploadImg) {
                            accountUploadImg.attr('src', reader.result);
                        }
                    };
                    reader.readAsDataURL(files[0]);
                });
            }
            accountResetBtn.on('click', function(e){
                if (accountUploadImg) {
                    accountUploadImg.attr('src', accountUploadImg.attr('data-reset-src'));
                    // Reset accountUploadInput value
                    if (accountUploadInput.val() != '') {
                        accountUploadInput.val('');
                    }
                }
            });
        })
</script>

@endpush
