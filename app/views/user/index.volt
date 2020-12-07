{% extends 'layouts/default1.volt' %}

{% block content %}
 <br/>
 <h3>Selamat Datang di Sistem Informasi Seputar Sistem Operasi Smartphone</h3>
 <br><br>
 <div class="container">
 <div class="row">
  <div class="col-md-12">
   <h3>Sistem Operasi List:</h3>
   <br>
   <table class="table">
       <thead class="thead-dark">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Versi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    {% for user in user %}
     <tr>
      <td>{{ user.nama }}</td>
      <td>{{ user.versi }}</td>
      <td><a class="btn btn-info" href="user/{{ user.id }}">Show</a> || <a class="btn btn-warning" href="user/edit/{{ user.id }}">Edit</a> || <a class="btn btn-danger" href="user/delete/{{ user.id }}" onclick="return confirm('Anda yakin mau menghapus data ini ?')">Delete</a></td>
     </tr>
    {% endfor %}
</tbody>
   </table>
   <button class="btn btn-primary" onclick="window.location.href='user/create'">Create</button>
  </div>
 </div>
 </div>
{% endblock %}