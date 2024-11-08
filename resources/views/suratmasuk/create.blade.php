@extends('layout.master')

@section('konten')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Tambah Surat Masuk</h6>
          </div>
          <div class="card-body px-4 pt-0 pb-2">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="/suratmasuk" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="txtnosurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm @error('txtnosurat') is-invalid @enderror" id="txtnosurat" name="txtnosurat">

                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="jenis_surat" class="col-sm-2 col-form-label">Jenis Surat</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm @error('txtnosurat') is-invalid @enderror" id="txtjenissurat" name="txtjenissurat" >

                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="tglsurat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control form-control-sm @error('tglsurat') is-invalid @enderror" id="tglsurat" name="tglsurat">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="tglditerima" class="col-sm-2 col-form-label">Tanggal Diterima</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control form-control-sm @error('tglditerima') is-invalid @enderror" id="tglditerima" name="tglditerima">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="txtdari" class="col-sm-2 col-form-label">Dari</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm @error('txtdari') is-invalid @enderror" id="txtdari" name="txtdari">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="txtperihal" class="col-sm-2 col-form-label">Perihal</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm @error('txtperihal') is-invalid @enderror" id="txtperihal" name="txtperihal">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="doc" class="col-sm-2 col-form-label">File Surat</label>
                    <div class="col-sm-4">
                      <input type="file" class="form-control" id="doc" name="doc">
                      {{-- <input type="text" class="form-control form-control-sm @error('txtperihal') is-invalid @enderror" id="txtfilesurat" name="txtfilesurat"> --}}
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="txtketerangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-4">
                      <textarea class="form-control form-control-sm @error('txtketerangan') is-invalid @enderror" id="txtketerangan" name="txtketerangan"> </textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary">Batal</button>
                    </div>
                  </div>
              </form>
        </div>
        </div>
    </div>
</div>
@endsection
