@extends('layouts.main')

@section('content')
    <div class="row aligment-items-start" style="margin-top: 80px">
        <div class="col">
            <div class="mb-4">
                <h3 class="text-secondary">Hey!</h3 class="text-secondary">
                <h1 class="text-dark d-inline">I'm </h1>
                <h1 class="text-warning d-inline">Irfan Maulana</h1>
                <h1 class="text-dark">Mobile Developer</h1>
            </div>

            <p class="text-dark mt-6 lh-lg">Note that views which extend a Blade layout simply override sections from the
                layout.
                Content of the layout can be included in a child view using the @parent directive in a section, allowing you
                to append to the contents of a layout section such as a sidebar or footer.
            </p>

            {{-- Bagian follow me --}}
            <div class="d-inline">
                <p class="d-inline text-secondary" style="margin-right: 10px">Follow Me</p>
                <div class="d-inline">
                    <a href="#">
                        <img src="assets/instagram.png" alt="" width="55px">
                    </a>
                </div>
                <div class="d-inline mr-4">
                    <a href="#">
                        <img src="assets/github.png" alt="" width="73px">
                    </a>
                </div>
                <div class="d-inline mr-10">
                    <a href="#">
                        <img src="assets/linkedin.png" alt="" width="55px">
                    </a>
                </div>
                <div class="d-inline mr-4">
                    <a href="#">
                        <img src="assets/facebook.png" alt="" width="55px">
                    </a>
                </div>
            </div>

            {{-- Tombol CV dan Contact --}}
            <div style="margin-top: 20px">
                <button type="button" class="btn btn-primary btn-lg" style="margin-right: 10px">Large button</button>
                <button type="button" class="btn btn-secondary btn-lg">Large button</button>
            </div>

        </div>

        <div class="col">

        </div>
    </div>
@endsection
