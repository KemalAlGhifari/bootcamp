@extends('/layout/main')
@section('content')
<div class="container mt-3">
  <div class="row ">
    <div class=" mt-4">

      <form action="" method="POST">
        <div class="row">
          <div class="col-5">
            <div class="mb-3">
              <label class="form-label">Judul</label>
              <input
                type="text"
                class="form-control"
                name="name"
                autocomplete="off"
              />
            </div>  
            <div class="mb-3">
              <label class="form-label">Jumlah Halaman</label>
              <input
                type="text"
                class="form-control"
                name="name"
                autocomplete="off"
              />
            </div>  
            <div class="mb-3">
              <label class="form-label">Tahun Terbit</label>
              <input
                type="text"
                class="form-control"
                name="name"
                autocomplete="off"
              />
            </div>  
          </div>
          <div class="col-5">
            <div class="mb-3">
              <label class="form-label">ISBN</label>
              <input
                type="text"
                class="form-control"
                name="name"
                autocomplete="off"
              />
            </div> 
            <label class="form-label">Penulis</label>
            <div class="mb-3">
              <select name="category" class="form-select" aria-label="Default select example">
              </select>
            </div>
            <label class="form-label">Penulis</label>
            <div class="mb-3">
              <select name="category" class="form-select" aria-label="Default select example">
              </select>
            </div>
          </div>
        </div>
        <div class="float-start">
          <a href="/categories" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection