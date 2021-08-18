<!DOCTYPE html>
    <html lang="en">

    <head>
        @include('dash.layouts.shared/title-meta', ['title' => 'Enotico'])
        @include('dash.layouts.shared/head-css')
        {{-- @include('dash.layouts.shared/head-css', ["demo" => "modern"]) --}}
    </head>

    <body @yield('body-extra')>
        <!-- Begin page -->
        <div id="wrapper">
            @include('dash.layouts.shared/topbar')

            @include('dash.layouts.shared/left-sidebar-admin')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">                    
                    @yield('content')
                </div>
                <!-- content -->

                @include('dash.layouts.shared/footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        @include('dash.layouts.shared/right-sidebar')

        @include('dash.layouts.shared/footer-script')
        
    </body>
</html>