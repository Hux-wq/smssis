  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <div class="flex items-center w-full p-1 pl-6" style="display: flex; align-items: center; padding: 3px; width: 40px; background-color: transparent; height: 4rem;">
        <div class="flex items-center justify-center" style="display: flex; align-items: center; justify-content: center;">
            <img src="https://elc-public-images.s3.ap-southeast-1.amazonaws.com/bcp-olp-logo-mini2.png" alt="Logo" style="width: 30px; height: auto;">
        </div>
      </div>

      <div style="display: flex; flex-direction: column; align-items: center; padding: 16px;">
        <div style="display: flex; align-items: center; justify-content: center; width: 96px; height: 96px; border-radius: 50%; background-color: #334155; color: #e2e8f0; font-size: 48px; font-weight: bold; text-transform: uppercase; line-height: 1;">
            LC
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; margin-top: 24px; text-align: center;">
            <div style="font-weight: 500; color: #fff;">
                Name
            </div>
            <div style="margin-top: 4px; font-size: 14px; color: #fff;">
                ID
            </div>
        </div>
    </div>

    <hr class="sidebar-divider">

      <li class="nav-item">
        <a 
        style="cursor:pointer"
        class="nav-link collapsed {{ $currentComponent === 'dashboard' ? 'tab-active' : '' }}" 
        wire:click="setComponent('dashboard')"
        >
            <i class="bi bi-grid"></i>

            <span>
                Dashboard
            </span>

        </a>
      </li><!-- End Dashboard Nav -->

      <hr class="sidebar-divider">

      <li class="nav-heading">Students </li>

      <li class="nav-item">

        <a 
        class="nav-link collapsed" 
        data-bs-target="#components-nav" 
        data-bs-toggle="collapse" 
        style="cursor:pointer"
        >

            <i class="bi bi-person"></i>

                <span>
                    Students
                </span>
            
            <i class="bi bi-chevron-down ms-auto"></i>

        </a>

        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav-1">

            <li>
                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'add student' ? 'tab-active' : '' }}" 
                wire:click="setComponent('add student')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Add Student
                    </span>
                </a>

            </li>

            <li>

                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'student records' ? 'tab-active' : '' }}" 
                wire:click="setComponent('student records')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Student Records
                    </span>

                </a>

            </li>

        </ul>

    </li><!-- End Student Nav -->

      <hr class="sidebar-divider">

      <li class="nav-heading">Maintenance </li>

      
      <li class="nav-item">

        <a 
        class="nav-link collapsed" 
        data-bs-target="#components-nav2" 
        data-bs-toggle="collapse" 
        style="cursor:pointer"
        >

            <i class="bi bi-tools"></i>

                <span>
                    Maintenance
                </span>
            
            <i class="bi bi-chevron-down ms-auto"></i>

        </a>

        <ul id="components-nav2" class="nav-content collapse show" data-bs-parent="#sidebar-nav-2">

            <li>
                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'department' ? 'tab-active' : '' }}" 
                wire:click="setComponent('department')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Department
                    </span>
                </a>

            </li>

            <li>
                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'courses' ? 'tab-active' : '' }}" 
                wire:click="setComponent('courses')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Courses
                    </span>
                </a>

            </li>

            <li>

                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'class' ? 'tab-active' : '' }}" 
                wire:click="setComponent('class')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Class
                    </span>

                </a>

            </li>

        </ul>

    </li>
<!-- End Maintenance Nav -->

      <li class="nav-heading">Reports </li>

      <li class="nav-item">

        <a 
        class="nav-link collapsed" 
        data-bs-target="#components-nav3" 
        data-bs-toggle="collapse" 
        style="cursor:pointer"
        >

            <i class="bi bi-bar-chart-line-fill"></i>

                <span>
                    Reports
                </span>
            
            <i class="bi bi-chevron-down ms-auto"></i>

        </a>

        <ul id="components-nav3" class="nav-content collapse show" data-bs-parent="#sidebar-nav-3">

            <li>
                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'student report' ? 'tab-active' : '' }}" 
                wire:click="setComponent('student report')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Student Reports
                    </span>
                </a>

            </li>

            <li>
                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'class report' ? 'tab-active' : '' }}" 
                wire:click="setComponent('class report')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Class Reports
                    </span>
                </a>

            </li>

            <li>

                <a 
                style="cursor:pointer"
                class="{{ $currentComponent === 'course report' ? 'tab-active' : '' }}" 
                wire:click="setComponent('course report')"
                >

                    <i class="bi bi-circle"></i>

                    <span>
                        Course Reports
                    </span>

                </a>

            </li>

        </ul>

    </li><!-- End Reports Nav -->


      <hr class="sidebar-divider">

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->