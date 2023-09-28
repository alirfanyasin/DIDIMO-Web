@extends('layouts.app')
@section('title', $data->judul)
@push('css-libraries')
<style>
  table {
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
<section class="container">
  <div class="row d-flex justify-content-center mt-5">
    <div class="col-8 bg-white">
      <!-- <div>
        <img src="{{ asset('storage/image/' . $data->image) }}" alt="">
      </div>
      <header>
        <h1 class="text-center mt-4">{{ $data->judul }}</h1>
      </header>
      <div>
        {!! $data->conten !!}
      </div>
    </div> -->
      <div class="card mb-3">
        <img src="{{ asset('storage/image/' . $data->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">{{ $data->judul }}</h4>
          <h5>{{ $data->description }}</h5>
          <div class="card-text overflow-hidden">
            {!! $data->conten !!}
          </div>
        </div>
        <div class="card-footer">
          <a href="/app/admin/artikel" type="submit" class="btn btn-secondary border-0">Back</a>
        </div>
      </div>
</section>
@endsection

@push('js-libraries')
{{-- If using library JS, Write your code in here --}}
<script type="text/javascript">
  var pesan = "{{ session('success') }}"
  if (pesan) {
    alert(pesan);
  }
</script>
@endpush