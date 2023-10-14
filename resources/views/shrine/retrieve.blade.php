@extends('layouts.base')

@section('content')
    <div class="col mb-5 pb-5">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>TABEL PELINGGIH</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-success" href="{{ route('shrines.create') }}"> TAMBAH DATA</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nama Object</th>
                <th>Deskripsi Detail</th>
                <th>Deskripsi Visual</th>
                <th>Tahun Pembuatan Object</th>
                <th>Periode Pembuatan</th>
                <th>Nama Pencipta</th>
                <th>Gaya Pencipta</th>
                <th>Bahan Utama</th>
                <th>Bahan Tambahan</th>
                <th>Teknik Pembuatan</th>
                <th>Ornamen</th>
                <th>Panjang</th>
                <th>Tinggi</th>
                <th>Lebar</th>
                <th>Berat</th>
                <th>Volume</th>
                <th>Kondisi Fisik</th>
                <th>Tingkat Kerusakan</th>
                <th>Lokasi Negara</th>
                <th>Lokasi Kabupaten</th>
                <th>Lokasi Kecamatan</th>
                <th>Lokasi Desa / Kelurahan</th>
                <th>Periode Pembuatan</th>
                <th>Fungsi</th>
                <th>Pemilik</th>
                <th>Sejarah Kepemilikan</th>
                <th>Nilai Sejarah</th>
                <th>Nilai Budaya</th>
                <th>Nilai Estetika</th>
                <th>Nilai Ekonomi</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($shrines as $shrine)
                <tr>
                    <!-- <td>{{ ++$i }}</td> -->
                    <!-- <td>{{ $shrine->id }}</td> -->
                    <td>{{ $shrine->name_object }}</td>
                    <td>{{ $shrine->description_detail }}</td>
                    <td>{{ $shrine->description_visual }}</td>
                    <td>{{ $shrine->year_of_creation }}</td>
                    <td>{{ $shrine->period_of_creation }}</td>
                    <td>{{ $shrine->name_creator }}</td>
                    <td>{{ $shrine->creator_style }}</td>
                    <td>{{ $shrine->main_material }}</td>
                    <td>{{ $shrine->additional_material }}</td>
                    <td>{{ $shrine->creation_technique }}</td>
                    <td>{{ $shrine->ornament }}</td>
                    <td>{{ $shrine->length }}</td>
                    <td>{{ $shrine->height }}</td>
                    <td>{{ $shrine->width }}</td>
                    <td>{{ $shrine->weight }}</td>
                    <td>{{ $shrine->volume }}</td>
                    <td>{{ $shrine->physical_condition }}</td>
                    <td>{{ $shrine->level_of_damage }}</td>
                    <td>{{ $shrine->country_location }}</td>
                    <td>{{ $shrine->district_location }}</td>
                    <td>{{ $shrine->subdistrict_location }}</td>
                    <td>{{ $shrine->village_location }}</td>
                    <td>{{ $shrine->period_of_creation }}</td>
                    <td>{{ $shrine->functional }}</td>
                    <td>{{ $shrine->ownership }}</td>
                    <td>{{ $shrine->ownership_history }}</td>
                    <td>{{ $shrine->historical_value }}</td>
                    <td>{{ $shrine->cultural_value }}</td>
                    <td>{{ $shrine->aesthetic_value }}</td>
                    <td>{{ $shrine->economic_value }}</td>
                    <td>
                        <form action="{{ route('shrines.destroy', $shrine->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('shrines.edit', $shrine->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="row text-center">
            {!! $shrines->links() !!}
        </div>
    </div>
@endsection
