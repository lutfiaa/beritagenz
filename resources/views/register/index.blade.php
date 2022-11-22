@extends('layout.main')

@section('container')
    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <main class="form-registration">

                        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                        <form action="/register" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="text" name="name"
                                    class="form-control rounded-top @error('name')is-invalid @enderror" id="name"
                                    placeholder="nama" required value="{{ old('name') }}">
                                <label for="name">Nama</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="username"
                                    class="form-control  @error('name')is-invalid @enderror" id="username"
                                    placeholder="username" required value="{{ old('username') }}">
                                <label for="username">userName</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="email" required value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password"
                                    class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                    id="password" placeholder="password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

                        </form>
                        <h5 class="d-block text-center mt-3">Allready registered? <a href="/login"
                                class="text-danger">Login</a></h5>
                    </main>
                </div>
            </div>
        </div>
    </section>
@endsection
