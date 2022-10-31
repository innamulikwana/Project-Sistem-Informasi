<?= $this->extend('mahasiswa/template/templatemahasiswa'); ?>
<?= $this->section('content'); ?>
<h2 class="mb-1">SURAT AKADEMIK</h2>

<form>
    <fieldset > <!--    disabled -->
    <legend>Upload Persyaratan</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIM</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="NIM">
    </div>
    <div class="mb-3">
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Aktif Kuliah</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Sedang Tidak Menerima Beasiswa</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Surat Berkelakuan Baik</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
<?= $this->endSection();?>