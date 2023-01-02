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
    <div class="col-md-5 card p-4">
      <div class="row mb-5 fw-bold">
        <div class="col text-center fs-4">Perbarui Kata Sandi</div>
      </div>

      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" value="{{ $email }}" name="email" class="input form-control" readonly>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label"
          >Kata Sandi baru</label
          >
          <input
            type="password"
            class="input form-control @error('password') is-invalid @enderror"
            id="password"
            name="password"
          />
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="password_confirmation" class="form-label"
            >Konfirmasi Kata Sandi Baru</label
          >
          <input
            type="password"
            class="input @error('password_confirmation') is-invalid @enderror"
            id="password_confirmation"
            name="password_confirmation"
          />
          @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
            <button
              type="submit"
              class="btn submit text-white"
              style="
                background: linear-gradient(
                  to right,
                  rgba(9, 48, 40, 1),
                  rgba(35, 122, 87, 1)
                );
              "
            >
              Ubah Kata Sandi
            </button>
      </form>

    </div>
  </div>
</div>
@endsection
