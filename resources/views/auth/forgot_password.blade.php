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
<div class="container mt-5 text-secondary">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-5 card p-4">
      <div class="row mb-5 fw-bold">
        <div class="col text-center fs-4">Lupa Kata Sandi?</div>
      </div>

      <form method="POST">
        @csrf
        <p class="mb-4">
          Masukkan Email anda untuk mengatur ulang kata sandi Anda
        </p>
        <div class="mb-4">
          <label for="email" class="form-label"
            >Email</label
          >
          <input
            type="text"
            class="input form-control @error('email') is-invalid @enderror"
            id="email"
            placeholder="vanessa.oey@gmail.com"
            name="email"
            value="{{old('email')}}"
            required
          />
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
          <button
            type="submit"
            class="btn submit text-white mb-2"
            style="
              background: linear-gradient(
                to right,
                rgba(9, 48, 40, 1),
                rgba(35, 122, 87, 1)
              );
            "
          >
          Kirim
        </button>
        
        <a href="{{ route('login') }}" class="btn btn-outline-dark" style="width: 100%">Batal</a>
      </form>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <h1 class="modal-title fs-5 mb-3" id="exampleModalLabel"><b>Email berhasil dikirim!</b></h1>
        <p>Silahkan cek Kotak Masuk dan Spam pada email <b>{{ session('email') }}</b> untuk mengatur ulang kata sandi Anda.</p>
      </div>
      <div class="modal-footer">
        <a href="{{ route('login') }}" class="btn text-white px-4" style="
        background: linear-gradient(
          to right,
          rgba(9, 48, 40, 1),
          rgba(35, 122, 87, 1)
        );
      ">Oke</a>
      </div>
    </div>
  </div>
</div>

@if (session()->has('email'))
<script src="js/showModal.js" defer></script>
@endif

@endsection

