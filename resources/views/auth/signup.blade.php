@extends('layouts.no_navbar')

@section('styles')
<style>
  * {
      font-family: "Poppins", sans-serif;
  }

  .fa-google {
    background: linear-gradient(to bottom left, transparent 49%, #fbbc05 50%) 0
                25%/48% 40%,
        linear-gradient(to top left, transparent 49%, #fbbc05 50%) 0 75%/48% 40%,
        linear-gradient(-40deg, transparent 53%, #ea4335 54%),
        linear-gradient(45deg, transparent 46%, #4285f4 48%), #34a853;
        background-repeat: no-repeat;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
  }

  .bi-facebook {
    color: #3b5998;
    background-image: linear-gradient(
        to bottom,
        transparent 20%,
        white 20%,
        white 93%,
        transparent 93%
    );
    background-size: 55%;
    background-position: 70% 0;
    background-repeat: no-repeat;
  }

  .social {
    padding: 10px 0;
  }

  .social i {
    margin-right: 5px;
  }

  .input {
    width: 100%;
    padding: 6px;
    border-radius: 5px;
    border: 1px solid grey;
  }

  .input:focus {
    outline-color: rgba(35, 122, 87, 1);
    outline-offset: 2px;
  }

  .submit {
    border: none;
    width: 100%;
    padding: 8px;
  }

  @media (max-width: 768px) {
    .card {
      border: none;
    }
  }
</style>
@endsection

@section('content')
@include('partials.messages')

<div class="container mt-5 text-secondary">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-4 card p-4">
        <div class="row mb-5 fw-bold ">
          <div class="col">
            <a class="text-decoration-none text-secondary fs-5" href="/login">Masuk</a>  
          </div>
          <div class="col-3">
            <a class="text-decoration-none text-dark fs-5" href="/signup">Daftar</a>
          </div>
        </div>
        
        <form method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="input form-control @error('name') is-invalid @enderror" id="name" placeholder="Vanessa Oey" name="name" value="{{old('name')}}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="input form-control @error('email') is-invalid @enderror" id="email" placeholder="vanessaoey@example.com" name="email" value="{{old('email')}}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Nomor HP</label>
            <input type="tel" class="input form-control @error('phone') is-invalid @enderror" id="phone" placeholder="080123789456" name="phone" value="{{old('phone')}}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="input form-control @error('password') is-invalid @enderror" id="password" placeholder="************" name="password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" class="input form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="************" name="password_confirmation" required>
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn submit text-white" style="background: linear-gradient(to right, rgba(9, 48, 40, 1)
          , rgba(35, 122, 87, 1));">Daftar</button>
        </form>
        
        <span class="text-center mt-3" style="font-size: 18px">Butuh Bantuan ? Hubungi 
          <a href="" class="text-decoration-none" style="color:rgba(35, 122, 87, 1)">Maritory Care</a> 
        </span>
      </div>
    </div>
  </div>
@endsection