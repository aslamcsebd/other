<div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="{{ url('/') }}" class="logo logo-normal text-center">
            <img src="{{ asset('img/company_logo.jpg') }}" alt="Logo" width="80%" height="100%" class="text-center">

            {{-- <img src="{{ asset('img/logo.svg') }}" alt="Logo"> --}}

        </a>
        <a href="index.html" class="logo-small">
            <img src="{{ asset('img/logo-small.svg') }}" alt="Logo">
        </a>
        <a href="index.html" class="dark-logo">
            <img src="{{ asset('img/logo-white.svg') }}" alt="Logo">
        </a>
    </div>
    <!-- /Logo -->
    <div class="modern-profile p-3 pb-0">
        <div class="text-center rounded bg-light p-3 mb-4 user-profile">
            <div class="avatar avatar-lg online mb-3">
                <img src="{{ asset('img/profiles/avatar-02.jpg') }}" alt="Img" class="img-fluid rounded-circle">
            </div>
            <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
            <p class="fs-10">System Admin</p>
        </div>
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
            <div class="avatar avatar-md onlin">
                <img src="{{ asset('img/profiles/avatar-02.jpg') }}" alt="Img" class="img-fluid rounded-circle">
            </div>
            <div class="text-start sidebar-profile-info ms-2">
                <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                <p class="fs-10">System Admin</p>
            </div>
        </div>
        <div class="input-group input-group-flat d-inline-flex mb-4">
            <span class="input-icon-addon">
                <i class="ti ti-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="Search in HRMS">
            <span class="input-group-text">
                <kbd>CTRL + / </kbd>
            </span>
        </div>
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div class="me-3">
                <a href="calendar.html" class="btn btn-menubar">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div class="me-3">
                <a href="chat.html" class="btn btn-menubar position-relative">
                    <i class="ti ti-brand-hipchat"></i>
                    <span
                        class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                </a>
            </div>
            <div class="me-3 notification-item">
                <a href="activity.html" class="btn btn-menubar position-relative me-1">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="email.html" class="btn btn-menubar">
                    <i class="ti ti-message"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-smart-home"></i><span>Dashboard</span>
                                <span class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ url('admin-dashboard') }}">Admin Dashboard</a></li>
                                <li><a href="{{ url('employee-dashboard') }}">Employee Dashboard</a></li>  
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-layout-grid-add"></i><span>Interaction</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{  url('chat') }}">Chat</a></li>
                                <li><a href="{{  url('email') }}">Email</a></li>
                                <li><a href="#">Calendar</a></li>
                                <li><a href="{{  url('to-do') }}">To Do</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Modules</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href=""><i class="ti ti-menu-2"></i><span>Sales Management</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
								<li><a href="{{ url('leads-dashboard') }}">Leads Dashboard</a></li>
                                <li class="submenu submenu-two">
                                    <a href="">Customer<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="" class="active">All Customers</a></li>
                                        <li><a href="{{ route('client.index') }}" class="">My Customers</a></li>
                                        <li><a href="#">All Contacts</a></li>
                                        <li><a href="#">My Contacts</a></li>
                                    </ul>
                                </li>

                                <li class="submenu submenu-two">
                                    <a href="">
                                        CRM
                                        <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
                                        <li><a href="">All Prospects</a></li>
                                        <li><a href="">My Prospects</a></li>
                                        <li><a href="{{ url('lead') }}">All Leads</a></li>
                                        <li><a href="">My Leads</a></li>
                                        <li><a href="">All Opportunities</a></li>
                                        <li><a href="">My Opportunities</a></li>
                                        <li><a href="">All Quotations</a></li>
                                        <li><a href="">My Quotations</a></li>
                                    </ul>
                                </li>

                                <li class="submenu submenu-two">
                                    <a href="">
                                        Orders
                                        <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
                                        <li><a href="">All Orders</a></li>
                                        <li><a href="">My Orders</a></li>
                                    </ul>
                                </li>

                                <li class="submenu submenu-two">
                                    <a href="">
                                        Projects
                                        <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
                                        <li><a href="">All Projects</a></li>
                                        <li><a href="">My Projects</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        <li class="submenu">
                            <a href=""><i class="ti ti-menu-2"></i><span>Shipment Management</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
								<li><a href="{{ url('deals-dashboard') }}">Deals Dashboard</a></li>
                                <li class="submenu submenu-two">
                                    <a href="">Shipments<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="{{ url('shipment-list') }}" class="active">All Shipments</a></li>
                                        <li><a href="">My Shipments</a></li>
                                        <li><a href="{{ url('shipments') }}">Create Shipments</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="">Bill of Entry<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="{{ url('boe-list') }}" class="active">Create BOE</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('invoice') }}" class="active">Invoice</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        <li class="submenu">
                            <a href="">
                                <i class="ti ti-menu-2"></i>
                                <span>Inventory Management</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ route('product-service.index') }}">All Products & Services</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        <li class="submenu">
                            <a href=""><i class="ti ti-menu-2"></i><span>Procurement Management</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="">Vendors<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="{{ url('/vendor') }}" class="active">All Vendors</a></li>
                                        <li><a href="{{ url('/vendor') }}" class="active">My Vendors</a></li>
                                        <li><a href="">All Contacts</a></li>
                                        <li><a href="">My Contacts</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

				<li>
                    <ul>
                        <li class="submenu">
                            <a href=""><i class="ti ti-menu-2"></i><span>Warehouse Management</span>
								<span class="menu-arrow"></span>
							</a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="">Inbond Orders<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">All Checkins</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Outbond Orders<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">All Checkouts</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Adjustments<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="#">Adjustment</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Transfer Order<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">All transfer Orders</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Kit Order<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">All Kit order</a></li>
                                        <li><a href="">BOM</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

				<li>
                    <ul>
                        <li class="submenu">
                            <a href=""><i class="ti ti-menu-2"></i><span>Transportation</span>
								<span class="menu-arrow"></span>
							</a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="">Trip Management<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">All Trips</a></li>
                                        <li><a href="">My Trips</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Fuel Managemnet<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">Fuel Detail</a></li>
                                        <li><a href="">Add Fuel</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Tracking<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">History Tracking</a></li>
                                        <li><a href="">Live Location</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Vehicle Management<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                       	<li><a href="">Vehicle's</a></li>
										<li><a href="">Route</a></li>
										<li><a href="">Driver's</a></li>
										<li><a href="">Vehicle Vendor's</a></li>
										<li><a href="">Trips</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Fuel Managment<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">Fuel Vendors</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        <li class="submenu">
                            <a href=""><i class="ti ti-menu-2"></i><span>Organization Setup</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="">Sales<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="{{ route('customer-group.index') }}">Customer Group</a></li>
                                        <li><a href="{{ route('customer-classifiaction-groups.index') }}">Customer Classifiaction Group</a></li>
                                        <li><a href="{{ route('payment-term.index') }}">Payment term</a></li>
                                        <li><a href="{{ route('payment-methods.index') }}">Payment Method</a></li>
                                        <li><a href="">Company Master</a></li>
                                        <li><a href="{{ route('delivery-term.index') }}">Delivery term</a></li> 
                                        <li><a href="{{ route('sales-person.index') }}">Sales Person</a></li>
                                        <li><a href="{{ route('currency.index') }}">Currency</a></li>
                                        <li><a href="">Activity Group</a></li>
                                        <li><a href="">Broker</a></li>
                                        <li><a href="{{ route('tax-group.index') }}">Tax Group</a></li>
                                    </ul>
                                </li>

                                <li class="submenu submenu-two">
                                    <a href="">
                                        Procurement
                                        <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ route('vendor-group.index') }}">Vendor Group</a></li>
										<li><a href="{{ route('costing-model-group.index') }}">Costing Model Group</a></li>
                                    </ul>
                                </li>

                                <li class="submenu submenu-two">
                                    <a href="">
                                        Inventory
                                        <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
										<li><a href="{{ url('organization-setup/inventory/uom') }}">UOM</a></li>
                                        <li><a href="{{ route('hs-codes.index') }}">HS Code</a></li>
                                        <li><a href="{{ url('organization-setup/inventory/origin') }}">Origin</a></li>
                                        <li><a href="{{ route('storage-group.index') }}">Storage Group</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
									<a href="">
										Shipment
                                        <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
										<li><a href="{{ route('territory.index') }}">Territory</a></li>
                                        <li><a href="{{ route('country.index') }}">Country</a></li>
                                        <li><a href="">Container Size</a></li>
										<li><a href="{{ route('tracking-group.index') }}">Tracking Group</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">
                                        Warehouse
                                        <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
                                        <li><a href="">Port</a></li>
                                        <li><a href="">Site</a></li>
                                        <li><a href="">Warehouse</a></li>
                                        <li><a href="">Locations</a></li>
                                        <li><a href="">Zone</a></li>
                                    </ul>
                                </li>	
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        <li class="submenu">
                            <a href=""><i class="ti ti-menu-2"></i><span>System Administration</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="">User Management<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">Users</a></li>
                                        <li><a href="">User Roles</a></li>
                                        <li><a href="">User Permissions</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Workflow Management<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">Workflow Configuraiton</a></li>
                                        <li><a href="">Workflow template</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Email Management<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">SMTP Configuration</a></li>
                                        <li><a href="">Email Template</a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Whatsapp Setup<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href=""></a></li>
                                    </ul>
                                </li>
								<li class="submenu submenu-two">
                                    <a href="">Google Map<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="">Google API</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>