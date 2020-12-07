{% extends 'layouts/default1.volt' %} {% block content %}

<div class="row">
  <div class="col-md-12">
    <form method="POST">
      <div class="form-group">
        <label>Nama SO</label>
        <input type="text"
          name="nama"
          class="form-control"
          placeholder="Type your name"
          required
          value="{{ user.nama }}"
        />
      </div>
      <div class="form-group">
        <label>Jenis</label>
        <input
          type="text"
          name="jenis"
          class="form-control"
          placeholder="Type your jenis"
          required
          value="{{ user.jenis }}"
        />
      </div>
      <div class="form-group">
        <label>Versi</label>
        <input
          type="text"
          name="versi"
          class="form-control"
          placeholder="Type your versi"
          required
          value="{{ user.versi}}"
        />
      </div>
      <div class="form-group">
        <label>Tahun Release</label>
        <input
        type="text"
          name="tahun_keluar"
          class="form-control"
          placeholder="Type your tahun keluar"
          required
          value="{{ user.tahun_keluar }}"
        />
      </div>
      <input class="btn btn-success" type="submit" value="Save" />
      <button class="btn btn-danger" type="button" onclick="window.location.href='../../user'">
        Cancel
      </button>
    </form>
  </div>
</div>
{% endblock %}
