@extends('layouts.backend')

@section('content')
<div class="w-full mt-12">
    <p class="text-xl pb-3 flex items-center">
        <svg class="svg-inline--fa fa-list fa-w-16 w-5 mr-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path></svg><!-- <i class="fas fa-list mr-3"></i> --> List Sertifikasi
     </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Pemohon</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Status</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Diajukan</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($sertifikasi as $item)
                <tr class="hover:bg-gray-200 border-b-2">
                    <td class="w-1/3 text-left py-3 px-4">{{$item->nama}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$item->user->name}}</td>
                    <td class="w-1/3 text-left py-3 px-4"><span class="bg-yellow-200 px-2 py-1">{{$item->status}}</span></td>
                    <td class="w-1/3 text-center py-3 px-4">{{$item->created_at->diffForHumans()}}</td>
                    <td class="w-1/3 text-center py-3 px-4">
                        <a href="{{route('sertifikasi.edit',$item)}}" class="bg-gray-800 rounded-full py-1 px-2 text-white">Balas</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bg-gray-200">
            {{$sertifikasi->links()}}
        </div>
        
    </div>
</div>
@endsection