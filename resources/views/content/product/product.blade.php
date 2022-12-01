@extends('content.master')
@section('title','Product ~ ')
@section('content')
<br>
<h3>Ini Adalah List Product</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga</th>
        <th scope="col">Desc</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($product as $data)    
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{{ $data->nama }}</td>
          <td>{{ $data->stok }}</td>
          <td>{{ $data->harga }}</td>
          <td>{{ $data->desc }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <br>

  <h3>List Customer</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Gender</th>
        <th scope="col">No HP</th>
        <th scope="col">Alamat</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customer as $data)    
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{{ $data->nama }}</td>
          <td>{{ $data->gender }}</td>
          <td>{{ $data->hp }}</td>
          <td>{{ $data->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<br>

<h3>List Transaksi</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jumlah Barang</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Alamat Pengiriman</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($transaction as $data)    
      <tr>
        <th>{{ $loop->iteration }}</th>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->gender }}</td>
        <td>{{ $data->hp }}</td>
        <td>{{ $data->alamat }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection