<!----======== Left Sidebar =======---->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


        <!--- Dashboard --->
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li>


        <!--- Students --->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('students.index') }}">
                <i class="bi bi-person-lines-fill"></i><span>Students</span>
            </a>
        </li>


        <!--- Teachers --->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('teachers.index') }}">
                <i class="bi bi-people"></i><span>Teachers</span>
            </a>
        </li>


        <!--- Courses --->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('courses.index') }}">
                <i class="bi bi-book"></i><span>Courses</span>
            </a>
        </li>


        <!--- Class Routines --->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('class-routines.index') }}">
                <i class="bi bi-book"></i><span>Class Routines</span>
            </a>
        </li>


        <!--- Organizations --->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-shop"></i><span>Organizations</span>
            </a>
        </li>
        
        <!--- Settings --->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('settings.index') }}">
                <i class="bi bi-gear"></i><span>Settings</span>
            </a>
        </li>

        <!--- Blank Links --->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-lines-fill"></i><span>Blank Link</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                    <i class="bi bi-circle"></i><span>Blank Sub-link</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-heading">Pages</li>

        <!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
        </li>

        <!-- End F.A.Q Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-question-circle"></i>
            <span>F.A.Q</span>
            </a>
        </li>

        <!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
            </a>
        </li>

        <!-- End Register Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-card-list"></i>
            <span>Register</span>
            </a>
        </li>

        <!-- End Login Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
            </a>
        </li>

        <!-- End Error 404 Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-dash-circle"></i>
            <span>Error 404</span>
            </a>
        </li>

        <!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-file-earmark"></i>
            <span>Blank</span>
            </a>
        </li>

    </ul>

</aside>
<!----====== End Left Sidebar =====---->