@extends('layout.app')

@section('konten')

<div class="content-wrapper">

  
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="table-responsive pt-3">
          <table class="table table-striped project-orders-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($kategori as $kg)
              <tr>
                <td>{{ $kg->id }}</td>
                <td>{{ $kg->name }}</td>
                <td>{{ $kg->description }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection