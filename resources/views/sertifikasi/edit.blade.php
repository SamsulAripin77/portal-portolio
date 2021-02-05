@extends('layouts.backend')
{{-- ['user_id','nama','deskripsi','institusi','tingkat','tanggal','bukti --}}
@section('content')
<div class="flex flex-wrap">
    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
        <p class="text-xl pb-3 flex items-center overflow-hidden">
            <svg class="svg-inline--fa fa-list mr-3 w-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path></svg><!-- <i class="fas fa-list mr-3"></i> --> Tangagapi Pengajuan Sertifikasi
         </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl">
                <div class="">
                    <label class="block text-sm text-gray-600" for="cus_name">Nama Kegiatan</label>
                    <input value="{{$sertifikasi->nama}}" class="w-full px-5 py-1 text-gray-700 shadow bg-gray-100 rounded" id="nama" name="nama" type="text" disabled>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_name">Pemohon</label>
                    <input value="{{$sertifikasi->user->name}}" class="w-full px-5 py-1 text-gray-700 shadow bg-gray-100 rounded" id="nama" name="nama" type="text" disabled>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_name">Institusi</label>
                    <input value="{{$sertifikasi->institusi}}" class="w-full px-5 py-1 text-gray-700 shadow bg-gray-100 rounded" id="nama" name="institusi" type="text" disabled>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_name">Institusi</label>
                    <input value="{{$sertifikasi->institusi}}" class="w-full px-5 py-1 text-gray-700 shadow bg-gray-100 rounded" id="nama" name="nama" type="text" disabled>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_name">Tanggal Diajukan</label>
                    <input value="{{$sertifikasi->tanggal}}" class="w-full px-5 py-1 text-gray-700 shadow bg-gray-100 rounded" id="nama" name="nama" type="text" disabled>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_name">Deskripsi Kegiatan</label>
                    <textarea class="w-full px-5 py-1 h-15 text-gray-700 bg-gray-200 rounded" id="message" name="message" rows="6" required="" placeholder="Your inquiry.." aria-label="Email" disabled>{{$sertifikasi->deskripsi}}</textarea>
                </div>
                <div class="mt-3">
                    <a href="{{asset('storage/'. $sertifikasi->bukti)}}" target="_blank" class="w-full px-4 py-1 text-white text-center font-light tracking-wider bg-blue-600 rounded" type="submit">Lihat Bukti</a>
                </div>
            </form>

            <form method="post" action="{{route('sertifikasi.update',$sertifikasi->id)}}" class="p-10 bg-white rounded shadow-xl mt-5">
                @csrf
                @method('PATCH')
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_name">Status</label>
                    <select class="w-full px-5 py-1 text-gray-700 shadow bg-gray-100 rounded" id="status" name=" status">
                        <option value="diterima">Diterima</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_name">Komentar</label>
                    <textarea class="w-full px-5 py-1 h-15 text-gray-700 bg-gray-200 rounded" id="message" name="komentar" rows="6" required></textarea>
                </div>
                <div class="mt-3">
                    <button class="w-full px-4 py-1 text-white text-center font-light tracking-wider bg-gray-600 rounded" type="submit">Kirim Tanggapan</button>
                </div>
            </form>
        </div>
        <p class="pt-6 text-gray-600">
            Source: <a class="underline" href="https://tailwindcomponents.com/component/checkout-form">https://tailwindcomponents.com/component/checkout-form</a>
        </p>
    </div>

    
</div>
@endsection