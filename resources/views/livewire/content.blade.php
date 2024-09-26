
<div>
    <!-- ======= Sidebar ======= -->
    @include('_Partials.side-navbar')

    <main id="main" class="main">

        <div class="pagetitle">

            <h1>{{$currentComponent}}</h1>

            <nav>
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">{{ $currentComponent }}</li>

                </ol>
            </nav>

        </div><!-- End Page Title -->

        <section class="section dashboard">

            @if     ($currentComponent === "dashboard")

                @include('dashboard')

            @elseif ($currentComponent === "add student")

                @include('add-student')

            @elseif ($currentComponent === "student records")

                @include('student-records')
            
            @elseif ($currentComponent === "department")

                @include('department')

            @elseif ($currentComponent === "courses")

                @include('courses')

            @elseif ($currentComponent === "class")

                @include('class')

            @endif

        </section>

    </main> 

</div>
