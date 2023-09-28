@extends('layouts.app')
@section('title', 'Artikel')
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
<div class="container">
  <div class="row mt-5">
    <div class="col">
      <a href="{{ route('app.artikel.create') }}" class="btn btn-primary border-0">Tambah Artikel</a>
    </div>
  </div>
</div>

<section class="container" id="artikel-section">
  <div class="row">
    @foreach ($data as $article)
    <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
      <a href="{{ route('app.admin.artikel.show', $article->id) }}">
        <div class="card rounded-4 position-relative overflow-hidden">
          <div class="grading-upgraound"></div>
          <img src="{{ asset('storage/image/' . $article->image) }}" class="card-img-top rounded-4" alt="...">
          <div class="card-title position-absolute m-4" style="bottom: 0">
            <div class="text-white">{{ $article->judul }}</div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
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