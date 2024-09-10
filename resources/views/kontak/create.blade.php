@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<h1>Contact Us</h1>
<form id="kontakForm" action="{{ route('kontak.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ old('nama') }}">
        @error('nama')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Telepon:</label>
        <input type="text" name="telepon" value="{{ old('telepon') }}">
        @error('telepon')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Pesan:</label>
        <textarea name="pesan">{{ old('pesan') }}</textarea>
        @error('pesan')<div>{{ $message }}</div>@enderror
    </div>
    <button type="submit">Kirim</button>
</form>
@endsection

@section('scripts')
<!-- Jquery Validate -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
    $("#kontakForm").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            telepon: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            message: "required"
        },
        messages: {
            name: "Silakan masukkan nama Anda",
            email: {
                required: "Silakan masukkan email Anda",
                email: "Format email tidak valid"
            },
            telepon: {
                required: "Silakan masukkan nomor telepon Anda",
                digits: "Nomor telepon hanya boleh berisi angka",
                minlength: "Nomor telepon minimal 10 karakter",
                maxlength: "Nomor telepon maksimal 15 karakter"
            },
            message: "Silakan masukkan pesan Anda"
        }
    });
});
</script>
@endsection
