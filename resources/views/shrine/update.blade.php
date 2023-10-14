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
        <h2>Edit Data Pelinggih</h2>
        <a class="btn btn-primary" href="{{ route('shrines.index') }}"> Kembali</a>
        <form action="{{ route('shrines.update', $shrine->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <strong>Nama Object</strong>
                <input type="text" name="name_object" class="form-control" placeholder="Name Object"
                    value="{{ $shrine->name_object }}">
            </div>
            <div class="form-group">
                <strong>Deskripsi Detail</strong>
                <input type="text" name="description_detail" class="form-control" placeholder="Deskripsi Detail"
                    value="{{ $shrine->description_detail }}">
            </div>
            <div class="form-group">
                <strong>Deskripsi Visual</strong>
                <input type="text" name="description_visual" class="form-control" placeholder="Deskripsi Visual"
                    value="{{ $shrine->description_visual }}">
            </div>
            <div class="form-group">
                <strong>Tahun Pembuatan Object</strong>
                <input class="form-control" name="year_of_creation" placeholder="Tahun Pembuatan Object"
                    value="{{ $shrine->year_of_creation }}"></input>
            </div>
            <div class="form-group">
                <strong>Periode Pembuatan</strong>
                <input type="text" name="period_of_creation" class="form-control" placeholder="Periode Pembuatan"
                    value="{{ $shrine->period_of_creation }}">
            </div>
            <div class="form-group">
                <strong>Nama Pencipta</strong>
                <input type="text" name="name_creator" class="form-control" placeholder="Nama Pencipta"
                    value="{{ $shrine->name_creator }}">
            </div>
            <div class="form-group">
                <strong>Gaya Pencipta</strong>
                <input type="text" name="creator_style" class="form-control" placeholder="Gaya Pencipta"
                    value="{{ $shrine->creator_style }}">
            </div>
            <div class="form-group">
                <strong>Bahan Utama</strong>
                <input type="text" name="main_material" class="form-control" placeholder="Bahan Utama"
                    value="{{ $shrine->main_material }}">
            </div>
            <div class="form-group">
                <strong>Bahan Tambahan</strong>
                <input type="text" name="additional_material" class="form-control" placeholder="Bahan Tambahan"
                    value="{{ $shrine->additional_material }}">
            </div>
            <div class="form-group">
                <strong>Teknik Pembuatan</strong>
                <input type="text" name="creation_technique" class="form-control" placeholder="Teknik Pembuatan"
                    value="{{ $shrine->creation_technique }}">
            </div>
            <div class="form-group">
                <strong>Ornamen</strong>
                <input type="text" name="ornament" class="form-control" placeholder="Ornamen"
                    value="{{ $shrine->ornament }}">
            </div>
            <div class="form-group">
                <strong>Panjang</strong>
                <input type="text" name="length" class="form-control" placeholder="Panjang"
                    value="{{ $shrine->length }}">
            </div>
            <div class="form-group">
                <strong>Tinggi</strong>
                <input type="text" name="height" class="form-control" placeholder="Tinggi"
                    value="{{ $shrine->height }}">
            </div>
            <div class="form-group">
                <strong>Lebar</strong>
                <input type="text" name="width" class="form-control" placeholder="Lebar" value="{{ $shrine->width }}">
            </div>
            <div class="form-group">
                <strong>Berat</strong>
                <input type="text" name="weight" class="form-control" placeholder="Berat"
                    value="{{ $shrine->weight }}">
            </div>
            <div class="form-group">
                <strong>Volume</strong>
                <input type="text" name="volume" class="form-control" placeholder="Volume"
                    value="{{ $shrine->volume }}">
            </div>
            <div class="form-group">
                <strong>Kondisi Fisik</strong>
                <input type="text" name="physical_condition" class="form-control" placeholder="Kondisi Fisik"
                    value="{{ $shrine->physical_condition }}">
            </div>
            <div class="form-group">
                <strong>Tingkat Kerusakan</strong>
                <input type="text" name="level_of_damage" class="form-control" placeholder="Tingkat Kerusakan"
                    value="{{ $shrine->level_of_damage }}">
            </div>
            <div class="form-group">
                <strong>Lokasi Negara</strong>
                <input type="text" name="country_location" class="form-control" placeholder="Lokasi Negara"
                    value="{{ $shrine->country_location }}">
            </div>
            <div class="form-group">
                <strong>Lokasi Kabupaten</strong>
                <input type="text" name="district_location" class="form-control" placeholder="Lokasi Kabupaten"
                    value="{{ $shrine->district_location }}">
            </div>
            <div class="form-group">
                <strong>Lokasi Kecamatan</strong>
                <input type="text" name="subdistrict_location" class="form-control" placeholder="Lokasi Kecamatan"
                    value="{{ $shrine->subdistrict_location }}">
            </div>
            <div class="form-group">
                <strong>Lokasi Desa / Kelurahan</strong>
                <input type="text" name="village_location" class="form-control" placeholder="Lokasi Desa/ Kelurahan"
                    value="{{ $shrine->village_location }}">
            </div>
            <div class="form-group">
                <strong>Fungsi</strong>
                <input type="text" name="functional" class="form-control" placeholder="Fungsi"
                    value="{{ $shrine->functional }}">
            </div>
            <div class="form-group">
                <strong>Pemilik</strong>
                <input type="text" name="ownership" class="form-control" placeholder="Pemilik"
                    value="{{ $shrine->ownership }}">
            </div>
            <div class="form-group">
                <strong>Sejarah Kepemilikan</strong>
                <input type="text" name="ownership_history" class="form-control" placeholder="Sejarah Kepemilikan"
                    value="{{ $shrine->ownership_history }}">
            </div>
            <div class="form-group">
                <strong>Nilai Sejarah</strong>
                <input type="text" name="historical_value" class="form-control" placeholder="Nilai Sejarah"
                    value="{{ $shrine->historical_value }}">
            </div>
            <div class="form-group">
                <strong>Nilai Budaya</strong>
                <input type="text" name="cultural_value" class="form-control" placeholder="Nilai Budaya"
                    value="{{ $shrine->cultural_value }}">
            </div>
            <div class="form-group">
                <strong>Nilai Estetika</strong>
                <input type="text" name="aesthetic_value" class="form-control" placeholder="Nilai Estetika"
                    value="{{ $shrine->aesthetic_value }}">
            </div>
            <div class="form-group">
                <strong>Nilai Ekonomi</strong>
                <input type="text" name="economic_value" class="form-control" placeholder="Nilai Ekonomi"
                    value="{{ $shrine->economic_value }}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection

{{-- 'name_object',
'description_detail',
'description_visual',
'year_of_creation',
'period_of_creation',
'name_creator',
'creator_style',
'main_material',
'additional_material',
'creation_technique',
'ornament',
'length',
'height',
'width',
'weight',
'volume',
'physical_condition',
'level_of_damage',
'country_location',
'district_location',
'subdistrict_location',
'village_location',
'functional',
'ownership',
'ownership_history',
'historical_value',
'cultural_value',
'aesthetic_value',
'economic_value', --}}
