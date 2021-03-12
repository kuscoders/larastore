<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('layouts.components.auth._head')

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('img/larastore.png') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        {{-- content --}}
                        @yield('content')
                        {{-- footer --}}
                        @include('layouts.components.auth._footer')
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- scripts --}}
    @include('layouts.components.auth._scripts')
</body>

</html>
