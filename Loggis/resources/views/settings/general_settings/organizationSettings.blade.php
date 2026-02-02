@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Settings</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>

        <ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('profile-settings') }}"><i class="ti ti-settings me-2"></i>General
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bussiness-settings') }}"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('salary-settings') }}"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('email-settings') }}"><i class="ti ti-server-cog me-2"></i>System Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('payment-gateways') }}"><i class="ti ti-settings-dollar me-2"></i>Financial
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('custom-css') }}"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
            </li>
        </ul>

        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column list-group settings-list">
                            <a href="{{ url('profile-settings') }}"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Profile Settings</a>
                            <a href="{{ url('security-settings') }}"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Security Settings</a>
                            <a href="{{ url('notification-settings') }}"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Notifications</a>
                            <a href="{{ url('connected-apps') }}"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Connected Apps</a>							
							<a href="{{ url('organization-settings') }}"
                                class="d-inline-flex align-items-center rounded active py-2 px-3"><i
                                    class="ti ti-arrow-badge-right me-2"></i>Organization Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Additional Settings</h4>
                        </div>
                        <form action="{{ url('profile-settings') }}">
                            {{-- <h6 class="mb-3">Additional Settings</h6> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label mb-md-0">Role</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select form-control" name="role">
                                                <option>Select</option>
                                                <option selected>Admin</option>
                                                <option>Manager</option>
                                                <option>User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label mb-md-0">Company</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select form-control" name="company">
                                                <option>Select</option>
                                                <option>Apple</option>
                                                <option selected>Google</option>
                                                <option>Microsoft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label mb-md-0">Work Date</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" name="work_date" value="2025-06-04">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label mb-md-0">Region</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select form-control" name="region">
                                                <option>Select</option>
                                                <option>North America</option>
                                                <option>Europe</option>
                                                <option selected>Asia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label mb-md-0">Language</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select form-control" name="language">
                                                <option>Select</option>
                                                <option selected>English</option>
                                                <option>French</option>
                                                <option>German</option>
                                                <option>Spanish</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

								<div class="col-md-6">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label mb-md-0">Time Zone</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select form-control" name="language">
                                               	<option>(UTC+04:00) Abu Dhabi, Muscat</option>
												<option>(UTC+01:00) Amsterdam, Berlin, Rome</option>
												<option>(UTC+02:00) Cairo, Athens, Jerusalem</option>
												<option>(UTC+03:00) Moscow, Riyadh, Nairobi</option>
												<option>(UTC+04:00) Abu Dhabi, Muscat</option>
												<option>(UTC+05:00) Islamabad, Karachi, Tashkent</option>
												<option>(UTC+05:30) Mumbai, New Delhi, Colombo</option>
												<option>(UTC+06:00) Dhaka, Almaty</option>
												<option>(UTC+07:00) Bangkok, Jakarta, Hanoi</option>
												<option>(UTC+08:00) Beijing, Singapore, Perth</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
