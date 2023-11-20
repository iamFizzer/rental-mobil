@extends('dashboard.index')
@section('content')
<div class="col-lg-12 d-flex align-items-stretch">
  <style>
    .badge {
  padding: 4px 8px;
  text-align: center;
  border-radius: 5px;
}
.badge.badge-merah{
  background-color: red;
  color: white;
}
.badge.badge-ijo{
  background-color:greenyellow;
  color: black;
}
  </style>
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Mobil</h5>
        <a href="{{route('mobil.create')}}" class="btn btn-success">Tambah Mobil</a>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Merek</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Model</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No Plat</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Harga / Hari</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Ketersediaan</h6>
                </th>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Action</h6>
                </th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                ?>
                @foreach ($mobil as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->merek}}</td>
                        <td>{{$item->mocel}}</td>
                        <td>{{$item->no_plat}}</td>
                        <td>{{$item->perhari}}</td>
                        <td>@if ($item->banyaknya <= 1 )
                            <span class="badge badge-merah"> Tidak Ada Unit</span>
                        @else
                        <span class="badge badge-ijo">Tersisa {{$item->banyaknya}} Unit</span>
                        @endif </td>
                        <td>
                            <button class="btn btn-primary">Lihat</button>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection