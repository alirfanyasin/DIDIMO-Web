@extends('layouts.app')
@section('title', 'Artikel')
@push('css-libraries')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
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
<<<<<<< HEAD
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <a href="{{ route('app.artikel.create') }}" class="btn btn-primary border-0">Tambah Artikel</a>
      </div>
    </div>
  </div>

  <section class="container" id="artikel-section">
    <div class="row">
      <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
        <a href="">
          <div class="card rounded-4 position-relative overflow-hidden">
            <div class="grading-upgraound"></div>
            <img src="{{ asset('assets/img/img-6.jpg') }}" class="card-img-top rounded-4" alt="...">
            <div class="card-title position-absolute m-4" style="bottom: 0">
              <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
        <a href="">
          <div class="card rounded-4 position-relative overflow-hidden">
            <div class="grading-upgraound"></div>
            <img src="{{ asset('assets/img/img-7.jpg') }}" class="card-img-top rounded-4" alt="...">
            <div class="card-title position-absolute m-4" style="bottom: 0">
              <div class="text-white">Makanan makanan yang manis tapi sehat untuk di konsumsi . . .</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
        <a href="">
          <div class="card rounded-4 position-relative overflow-hidden">
            <div class="grading-upgraound"></div>
            <img src="{{ asset('assets/img/img-8.jpeg') }}" class="card-img-top rounded-4" alt="...">
            <div class="card-title position-absolute m-4" style="bottom: 0">
              <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
        <a href="">
          <div class="card rounded-4 position-relative overflow-hidden">
            <div class="grading-upgraound"></div>
            <img src="{{ asset('assets/img/img-9.jpeg') }}" class="card-img-top rounded-4" alt="...">
            <div class="card-title position-absolute m-4" style="bottom: 0">
              <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
        <a href="">
          <div class="card rounded-4 position-relative overflow-hidden">
            <div class="grading-upgraound"></div>
            <img src="{{ asset('assets/img/img-2.jpeg') }}" class="card-img-top rounded-4" alt="...">
            <div class="card-title position-absolute m-4" style="bottom: 0">
              <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
        <a href="" class=" h-100">
          <div class="card rounded-4 position-relative overflow-hidden">
            <div class="grading-upgraound"></div>
            <img src="{{ asset('assets/img/img-3.png') }}" class="card-img-top rounded-4" alt="...">
            <div class="card-title position-absolute m-4" style="bottom: 0">
              <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 col-sm-6 mb-4">
        <a href="">
          <div class="card rounded-4 position-relative overflow-hidden ">
            <div class="grading-upgraound"></div>
            <img src="{{ asset('assets/img/img-4.jpg') }}" class="card-img-top rounded-4" alt="...">
            <div class="card-title position-absolute m-4" style="bottom: 0">
              <div class="text-white">Menghindari makanan manis dengan hal-hal berikut . . .</div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
@endsection

@push('js-libraries')
  {{-- If using library JS, Write your code in here --}}
=======
  {{-- Write your code in here --}}

  <section class="container h-100">
    <div class="row mt-3">
      <button type="button" class="col-sm-2 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addArticleModal"
        style="border: none;">Add Artikel</button>
    </div>
    <div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="addArticleLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="addArticleModal"><b>Add Artikel</b></h1>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <form class="modal-body" method="POST" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col">
              <label for="validationDefault01" class="form-label">Judul</label>
              <input type="text" name="judul" class="form-control border border-danger" id="validationDefault01"
                placeholder="Judul Artikel" required>
            </div>
            <div class="col mt-1">
              <label for="validationDefault02" class="form-label">Kategori</label>
              <input type="text" name="kategori" class="form-control border border-danger" id="validationDefault02"
                placeholder="Kategori Artikel" required>
            </div>
            <div class="col mt-1">
              <label for="validationServer03" class="form-label">Image</label>
              <input type="file" name="image" class="form-control border border-danger" id="validationDefault03"
                required>
            </div>
            <div class="col mt-1">
              <label for="validationDefault04" class="form-label">Konten</label>
              <textarea class="form-control border border-danger" name="conten" id="validationDefault04" placeholder="Isi Artikel"
                required></textarea>
            </div>
            <div class="col mt-2 ">
              <button class="btn btn-warning text-white" type="reset">Clear</button>
              <button class="btn text-white" type="submit" style="background-color: #C80005;">Submit</button>
            </div>

            @error('judul')
              <p>{{ $message }}</p>
            @enderror
            @error('kategori')
              <p>{{ $message }}</p>
            @enderror
            @error('image')
              <p>{{ $message }}</p>
            @enderror
            @error('conten')
              <p>{{ $message }}</p>
            @enderror
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    @if (Session::has('success'))
      <div class="alert alert-success fade show mt-2" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class=" btn-close" data-bs-dismiss="alert" aria-label="Close">
      </div>
    @endif
    @if (Session::has('delete'))
      <div class="alert alert-success fade show mt-2" role="alert">
        <strong>{{ Session::get('delete') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </div>
    @endif
    @if (Session::has('update'))
      <div class="alert alert-success fade show mt-2" role="alert">
        <strong>{{ Session::get('update') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </div>
    @endif
    <div class="row mt-4">
      <table id="table" class="table table-striped table-hover py-2" style="width:100%">
        <thead>
          <tr>
            <th style="width: 10px;">NO</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th style="width: 10px;">Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- @php
            $no = 1;
          @endphp -->
          @foreach ($data as $key => $item)
            <tr>
              <th scope="row">{{ $key + 1 }}</th>
              <td>{{ $item->judul }}</td>
              <td>{{ $item->kategori }}</td>
              <td class="d-flex ">
                <button class="btn btn-secondary me-1 btn-sm text-white rounded" type="button" data-bs-toggle="modal"
                  data-bs-target="#detailModal{{ $item->id }}" style="text-decoration: none;">Detail</button>
                <form class="" method="PUT" action="{{ route('artikel.update', $item->id) }}">
                  <button class="btn btn-success me-1 btn-sm text-white rounded" data-bs-toggle="modal"
                    data-bs-target="#editModal{{ $item->id }}" type="button"
                    style="text-decoration: none;">Edit</button>
                </form>
                <form class="" method="DELETE" action="{{ route('artikel.destroy', $item->id) }}">
                  <button class="d-inline btn btn-danger btn-sm text-white rounded" type="submit"
                    onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                    style="text-decoration: none;">Delete</button>
                </form>
              </td>
            </tr>
            <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1"
              aria-labelledby="labelDetail{{ $item->id }}" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="labelDetail{{ $item->id }}"><b>Detail Artikel</b></h1>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <h6><b>Judul: </b>{{ $item->judul }}</h6>
                    </div>
                    <div class="row mt-1">
                      <h6><b>Kategori: </b>{{ $item->kategori }}</h6>
                    </div>
                    <div class="row mt-1">
                      <h6><b>Isi: </b>{{ $item->conten }}</h6>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
              aria-labelledby="labelEdit{{ $item->id }}" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><b>Update Barang</b></h5>
                  </div>
                  <div class="modal-body">
                    <!--FORM UPDATE BARANG-->
                    <form action="{{ route('artikel.update', ['id' => $item->id]) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label for="updateJudul"><b>Judul</b></label>
                        <input type="text" class="form-control border border-danger" id="updateJudul"
                          name="updateJudul" value="{{ $item->judul }}">
                        <label for="updateKategori" class="mt-2"><b>Kategori</b></label>
                        <input type="text" class="form-control border border-danger" id="updateKategori"
                          name="updateKategori" value="{{ $item->kategori }}">
                        <label for="updateImage" class="mt-2"><b>Image</b></label>
                        <input type="file" class="form-control border border-danger" id="updateImage"
                          name="updateImage" value="{{ $item->image }}">
                        <label for="updateConten" class="mt-2"><b>Isi</b></label>
                        <textarea class="form-control border border-danger" id="updateConten" name="updateConten">{{ $item->conten }}</textarea>
                        <button type="submit" class="mt-4 btn btn-primary" style="border: none;">Perbarui
                          Data</button>
                      </div>
                    </form>
                    <!--END FORM UPDATE BARANG-->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- End Modal UPDATE Barang-->
  </section>

@endsection

@push('js-libraries')
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  {{-- If using library JS, Write your code in here --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('table').DataTable();
    });
  </script>
>>>>>>> 2ccd344a49fc0d623882621715102a2287d7a64a
@endpush
