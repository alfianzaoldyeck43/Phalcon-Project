{% extends 'layouts/default1.volt' %} {% block content %}

 <div class="row">
  <div class="col-md-12">
<div class="card">
  <div class="card-header">
    Sistem Operasi Detail
  </div>
  <div class="card-body">
    <h5 class="card-title">Nama : {{ user.nama }}</h5>
    <p class="card-text">Jenis : {{ user.jenis }}</p>
    <p class="card-text">Versi 	: 	{{ user.versi }}</p>
    <p class="card-text">Tahun Release 	: 	{{ user.tahun_keluar }}</p>
    <button class="btn btn-primary" onclick="window.location.href='../user'">Kembali</button>
  </div>
</div>
{% endblock %}