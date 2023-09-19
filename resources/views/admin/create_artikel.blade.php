@extends('layouts.app')
@section('title', 'Create Artikel')
@push('css-libraries')
  <!-- Include stylesheet -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <style>
    #editor {
      height: 400px;
    }
  </style>
@endpush
@section('content')
  <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="row mt-5">
        <div class="col-4">
          <div class="card border-0">
            <div class="card-body">
              <label for="" class="mb-3">Thumbnail</label>
              <div class="mb-3">
                <img src="{{ asset('assets/img/no-image.svg') }}" id="result" alt="" class="w-100"
                  width="100%" height="400px">
              </div>
              <input type="file" name="thumbnail" id="thumbnail" class="form-control" onchange="readFile(this)">
            </div>
          </div>
        </div>
        <div class="col-8">
          <div class="card border-0">
            <div class="card-body">
              <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
              </div>
              <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
              </div>
              <div class="mb-3">
                <label for="content">Content</label>
                <!-- Create the editor container -->
                <div id="editor">
                </div>
              </div>

              <div>
                <button type="submit" class="btn btn-primary border-0">Save Change</button>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>

@endsection
@push('js-libraries')
  <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

  <!-- Initialize Quill editor -->
  <script>
    var toolbarOptions = [
      [{
        'header': [1, 2, 3, 4, 5, 6, false]
      }],
      [{
        'font': []
      }],
      ['bold', 'italic', 'underline', 'strike'], // toggled buttons
      [{
        'align': []
      }],
      ['blockquote', 'code-block'],
      ['link', 'image'],
      [{
        'list': 'ordered'
      }, {
        'list': 'bullet'
      }],
      [{
        'script': 'sub'
      }, {
        'script': 'super'
      }], // superscript/subscript
      [{
        'indent': '-1'
      }, {
        'indent': '+1'
      }], // outdent/indent
      [{
        'direction': 'rtl'
      }], // text direction

      [{
        'color': []
      }, {
        'background': []
      }], // dropdown with defaults from theme



      ['clean'] // remove formatting button
    ];
    var quill = new Quill('#editor', {
      modules: {
        toolbar: toolbarOptions
      },
      theme: 'snow'
    });


    // File Reader
    function readFile(input) {
      let file = input.files[0];
      let fileReader = new FileReader();
      fileReader.readAsText(file);
      fileReader.onload = function() {
        document.getElementById("result").src = URL.createObjectURL(file);
      };
      fileReader.onerror = function() {
        alert(fileReader.error);
      };
    }
  </script>
@endpush
