{% extends 'layouts/default1.volt' %}

{% block content %}
 <br/>
 <h2>Silahkan Mengisi Form</h2>
 <br><br>
 <div class="row">
  <div class="col-md-12">
   <form method="POST">
    <div class="form-group">
     <label>Nama Sistem Operasi</label>
     <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
    </div>
    <div class="form-group">
     <label>Jenis</label>
     <input type="text" name="jenis" class="form-control" placeholder="Masukkan jenis sistem" required>
    </div>
    <div class="form-group">
     <label>Versi</label>
     <input type="text" name="versi" class="form-control" placeholder="Masukkan jenis versi" required>
    </div>
    <div class="form-group">
        <label>Tahun Release</label>
        <input type="text" name="tahun_keluar" class="form-control" placeholder="Masukkan tahun release" required>
    </div>
    <input class="btn btn-success" type="submit" value="Save"> <button class="btn btn-danger" type="button" onclick="window.location.href='../user'">Cancel</button>
   </form>
  </div>
 </div>
{% endblock %}