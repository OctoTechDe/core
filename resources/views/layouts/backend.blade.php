<!DOCTYPE html>
<html lang="en">

<!-- Head -->
@include('layouts.partials.head')
<!-- End Head -->

<!-- Body -->
<body class="navbar-fixed sidebar-nav fixed-nav">

<!-- Vue -->
<div id="app">

<!-- Topnav -->
@include('layouts.partials.topnav')
<!-- End Topnav -->

<!-- Sidenav -->
@include('layouts.partials.sidenav')
<!-- End Sidenav -->

    <!-- Main -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>

        <div class="container-fluid">

            <!-- Content -->
            <router-view></router-view>
            <!-- End Content -->

        </div>
    </main>

<!-- Footer -->
@include('layouts.partials.footer')
<!-- End Footer -->

</div>
<!-- End Vue -->



<!-- Bootstrap | jQuery | Vue -->
<script src="js/app.js"></script>
<!-- Theme -->
<script src="/js/theme.js"></script>

</body>
<!-- End Body -->

</html>