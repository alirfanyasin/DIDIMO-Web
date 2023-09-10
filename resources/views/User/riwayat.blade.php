@extends('layouts.app')

@section('title', 'Riwayat Pemeriksaan')
@push('css-libraries')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <style>
    #historyTable {
      width: 100%;
      margin: 0 auto;
    }

    .active>.page-link {
      background-color: #c80005;
      border-color: #c80005;
    }
  </style>
@endpush
@section('content')
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <table id="historyTable" class="table table-striped display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>Gula Darah</th>
              <th>Detak Jantung</th>
              <th>Status</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
              <tr>
                <td>{{ $item->gula_darah }}</td>
                <td>{{ $item->detak_jantung }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ date('d F Y', strtotime($item->date)) }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection


@push('js-libraries')
  <script>
    $(document).ready(function() {
      new DataTable('#historyTable', {
        scrollX: true
      });
    })
  </script>

  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
@endpush
