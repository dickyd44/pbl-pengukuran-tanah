<!DOCTYPE html>
<html lang="en">
    @include('includes.head')

    <body id="page-top">
        <div id="wrapper">
            @include('includes.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('includes.topbar') @yield('content')
                </div>
                @include('includes.footer')
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include('includes.modal-logout') @include('includes.scripts')
    </body>
</html>
