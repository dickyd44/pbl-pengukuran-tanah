@extends('layouts.auth') @section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center" style="height: 100vh">

        <div class="col-xl-10 col-lg-12 col-md-9">

            @include('includes.error-card')
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" style="background-image:url('/landing.png')"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                                </div>
                                <form class="user" action="/login" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputuid"
                                            aria-describedby="uidHelp" placeholder="Enter NIP / uid Address..."
                                            name="uid">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection