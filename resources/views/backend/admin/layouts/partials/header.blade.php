
    <!-- Header -->
    <header class="header sticky-top py-2">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Left side - Search and Toggle -->
                <div class="d-flex align-items-center">
                    <button class="btn btn-link text-dark me-3 d-lg-none" id="sidebarToggle">
                        <i class="bi bi-list" style="font-size: 1.5rem;"></i>
                    </button>
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control ps-4" placeholder="Search...">
                    </div>
                </div>

                <!-- Right side - Icons and User -->
                <div class="d-flex align-items-center">
                    <!-- Notifications -->
                    <div class="dropdown me-3">
                        <a class="btn btn-link text-dark position-relative" href="#" role="button" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell" style="font-size: 1.2rem;"></i>
                            <span class="notification-badge badge bg-danger rounded-pill">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="notificationsDropdown" style="width: 350px;">
                            <li class="dropdown-header bg-light py-2 border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Notifications</span>
                                    <span class="badge bg-primary">5 New</span>
                                </div>
                            </li>
                            <li class="px-3 py-2">
                                <a href="#" class="d-flex text-decoration-none">
                                    <div class="me-3 text-primary">
                                        <i class="bi bi-cart-check" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">New Order Received</h6>
                                        <small class="text-muted">5 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="px-3 py-2">
                                <a href="#" class="d-flex text-decoration-none">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-person-plus" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">New User Registered</h6>
                                        <small class="text-muted">1 hour ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="px-3 py-2">
                                <a href="#" class="d-flex text-decoration-none">
                                    <div class="me-3 text-warning">
                                        <i class="bi bi-exclamation-triangle" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Server Alert</h6>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center py-2 border-top">
                                <a href="#" class="text-decoration-none">View All Notifications</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Messages -->
                    <div class="dropdown me-3">
                        <a class="btn btn-link text-dark position-relative" href="#" role="button" id="messagesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-envelope" style="font-size: 1.2rem;"></i>
                            <span class="notification-badge badge bg-primary rounded-pill">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="messagesDropdown" style="width: 350px;">
                            <li class="dropdown-header bg-light py-2 border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Messages</span>
                                    <span class="badge bg-primary">3 New</span>
                                </div>
                            </li>
                            <li class="px-3 py-2">
                                <a href="#" class="d-flex text-decoration-none">
                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-3">
                                    <div>
                                        <h6 class="mb-0">John Doe</h6>
                                        <small class="text-muted">Hey there! How are you?</small>
                                    </div>
                                </a>
                            </li>
                            <li class="px-3 py-2">
                                <a href="#" class="d-flex text-decoration-none">
                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-3">
                                    <div>
                                        <h6 class="mb-0">Jane Smith</h6>
                                        <small class="text-muted">About our meeting tomorrow...</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center py-2 border-top">
                                <a href="#" class="text-decoration-none">View All Messages</a>
                            </li>
                        </ul>
                    </div>

                    <!-- User Dropdown -->
                    <div class="dropdown">
                        <a class="btn btn-link text-dark dropdown-toggle d-flex align-items-center" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/images/12.jpeg')}}" class="user-img me-2">
                            <span class="d-none d-md-inline">Admin User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person me-2"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-gear me-2"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-question-circle me-2"></i> Help
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                @if (Route::has('logout'))
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content (example) -->


    <!-- Bootstrap 5 JS Bundle with Popper -->
