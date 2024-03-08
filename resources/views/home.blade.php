@extends('layouts.mainlayout')
@section('title', 'Home')

@section('content')
<div style="text-align: center; margin-bottom: 40px;">
    <h1>ini Halaman Home</h1>
    <h2>Selamat datang {{ $name }}. Anda adalah {{ $role }}</h2>
</div>



<table class="table">
    <tr>
        <th>No.</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
        <th>angka</th>
    </tr>
    @foreach($tugas['matkul'] as $key => $matkul)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $matkul }}</td>
        <td>
            @if(
            $tugas['nilai'][$key]>= 81 &&
            $tugas['nilai'][$key]<= 100) A @elseif( $tugas['nilai'][$key]>=71 &&
                $tugas['nilai'][$key] <=80) B @elseif( $tugas['nilai'][$key]>=61 &&
                    $tugas['nilai'][$key] <= 70) C @elseif( $tugas['nilai'][$key]>= 51 &&
                        $tugas['nilai'][$key] <= 60) D @elseif($tugas['nilai'][$key]>=0 &&
                            $tugas['nilai'][$key] <= 50) E @else Nilai Tidak Valid @endif </td>

        <td>
            {{ $tugas['nilai'][$key]}}
        </td>
    </tr>
    @endforeach
</table>
@endsection


</html>