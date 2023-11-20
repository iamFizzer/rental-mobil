@extends('dashboard.index')
@section('content')
<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">User</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nama</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Alamat</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No Telepon</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No Sim</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Email</h6>
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
                @foreach ($user as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->no_telp}}</td>
                        <td>{{$item->no_sim}}</td>
                        <td>{{$item->email}}</td>
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