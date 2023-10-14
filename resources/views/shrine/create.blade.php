@extends('layouts.base')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container my-5 py-5">
        <h2>Tambah Data Pelinggih</h2>
        <a class="btn btn-primary" href="{{ route('shrines.index') }}"> Kembali</a>
        <form action="{{ route('shrines.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <strong>Nama Object</strong>
                <input type="text" name="name_object" class="form-control" placeholder="Name Object">
            </div>
            <div class="form-group">
                <strong>Deskripsi Detail</strong>
                <input type="text" name="description_detail" class="form-control" placeholder="Deskripsi Detail">
            </div>
            <div class="form-group">
                <strong>Deskripsi Visual</strong>
                <input type="text" name="description_visual" class="form-control" placeholder="Deskripsi Visual">
            </div>
            <div class="form-group">
                <strong>Tahun Pembuatan Object</strong>
                <input class="form-control" name="year_of_creation" placeholder="Tahun Pembuatan Object"></input>
            </div>
            <div class="form-group">
                <strong>Periode Pembuatan</strong>
                <input type="text" name="period_of_creation" class="form-control" placeholder="Periode Pembuatan">
            </div>
            <div class="form-group">
                <strong>Nama Pencipta</strong>
                <input type="text" name="name_creator" class="form-control" placeholder="Nama Pencipta">
            </div>
            <div class="form-group">
                <strong>Gaya Pencipta</strong>
                <input type="text" name="creator_style" class="form-control" placeholder="Gaya Pencipta">
            </div>
            <div class="form-group">
                <strong>Bahan Utama</strong>
                <input type="text" name="main_material" class="form-control" placeholder="Bahan Utama">
            </div>
            <div class="form-group">
                <strong>Bahan Tambahan</strong>
                <input type="text" name="additional_material" class="form-control" placeholder="Bahan Tambahan">
            </div>
            <div class="form-group">
                <strong>Teknik Pembuatan</strong>
                <input type="text" name="creation_technique" class="form-control" placeholder="Teknik Pembuatan">
            </div>
            <div class="form-group">
                <strong>Ornamen</strong>
                <input type="text" name="ornament" class="form-control" placeholder="Ornamen">
            </div>
            <div class="form-group">
                <strong>Panjang</strong>
                <input type="text" name="length" class="form-control" placeholder="Panjang">
            </div>
            <div class="form-group">
                <strong>Tinggi</strong>
                <input type="text" name="height" class="form-control" placeholder="Tinggi">
            </div>
            <div class="form-group">
                <strong>Lebar</strong>
                <input type="text" name="width" class="form-control" placeholder="Lebar">
            </div>
            <div class="form-group">
                <strong>Berat</strong>
                <input type="text" name="weight" class="form-control" placeholder="Berat">
            </div>
            <div class="form-group">
                <strong>Volume</strong>
                <input type="text" name="volume" class="form-control" placeholder="Volume">
            </div>
            <div class="form-group">
                <strong>Kondisi Fisik</strong>
                <input type="text" name="physical_condition" class="form-control" placeholder="Kondisi Fisik">
            </div>
            <div class="form-group">
                <strong>Tingkat Kerusakan</strong>
                <input type="text" name="level_of_damage" class="form-control" placeholder="Tingkat Kerusakan">
            </div>
            <div class="form-group">
                <strong>Lokasi Negara</strong>
                <input type="text" name="country_location" class="form-control" placeholder="Lokasi Negara">
            </div>
            <div class="form-group">
                <strong>Lokasi Kabupaten</strong>
                <input type="text" name="district_location" class="form-control" placeholder="Lokasi Kabupaten">
            </div>
            <div class="form-group">
                <strong>Lokasi Kecamatan</strong>
                <input type="text" name="subdistrict_location" class="form-control" placeholder="Lokasi Kecamatan">
            </div>
            <div class="form-group">
                <strong>Lokasi Desa / Kelurahan</strong>
                <input type="text" name="village_location" class="form-control" placeholder="Lokasi Desa/ Kelurahan">
            </div>
            <div class="form-group">
                <strong>Fungsi</strong>
                <input type="text" name="functional" class="form-control" placeholder="Fungsi">
            </div>
            <div class="form-group">
                <strong>Pemilik</strong>
                <input type="text" name="ownership" class="form-control" placeholder="Pemilik">
            </div>
            <div class="form-group">
                <strong>Sejarah Kepemilikan</strong>
                <input type="text" name="ownership_history" class="form-control" placeholder="Sejarah Kepemilikan">
            </div>
            <div class="form-group">
                <strong>Nilai Sejarah</strong>
                <input type="text" name="historical_value" class="form-control" placeholder="Nilai Sejarah">
            </div>
            <div class="form-group">
                <strong>Nilai Budaya</strong>
                <input type="text" name="cultural_value" class="form-control" placeholder="Nilai Budaya">
            </div>
            <div class="form-group">
                <strong>Nilai Estetika</strong>
                <input type="text" name="aesthetic_value" class="form-control" placeholder="Nilai Estetika">
            </div>
            <div class="form-group">
                <strong>Nilai Ekonomi</strong>
                <input type="text" name="economic_value" class="form-control" placeholder="Nilai Ekonomi">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
