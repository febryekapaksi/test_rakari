@extends('layouts.app')

@section('title', 'Pesan Pengunjung')

@section('content')
<h1>Pesan Pengunjung</h1>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Pesan</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message->nama }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->telepon }}</td>
            <td>{{ $message->pesan }}</td>
            <td>{{ $message->created_at->format('d M Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $messages->links() }}
@endsection
