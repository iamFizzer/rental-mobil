@extends('dashboard.index')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Tambah Mobil</h5>
        <div class="card">
          <div class="card-body">
            <form method="post" action="{{route('mobil.store')}}">
                @csrf
              <div class="mb-3">
                <label for="merek" class="form-label">Merek Mobil</label>
                <input type="text" class="form-control" id="merek" name="merek" required >
             </div>
              <div class="mb-3">
                <label for="model" class="form-label">Model Mobil</label>
                <input type="text" class="form-control" id="model" name="model" required>
              </div>
              <div class="mb-3">
                <label for="no_plat" class="form-label">Plat Nomor Mobil</label>
                <input type="text" class="form-control" id="no_plat" name="no_plat" required>
              </div>
              <div class="mb-3">
                <label for="perhari" class="form-label">Tarif Sewa perhari</label>
                <input type="text" class="form-control" id="perhari" name="perhari" required>
              </div>
              <div class="mb-3">
                <label for="banyaknya" class="form-label">Banyaknya Mobil</label>
                <input type="text" class="form-control" id="banyaknya" name="banyaknya" required>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection