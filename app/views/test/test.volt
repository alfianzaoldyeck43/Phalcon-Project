{% extends 'layouts/default1.volt' %}

{% block content %}
 <br>
 <div class="row">
  <div class="col-md-12">
   Hello codedoct!!!
   <br>
   users:
   {% if (data['users']) %}
    <ul>
     {% for user in data['users'] %}
      <li>{{user}}</li>
     {% endfor %}
    </ul>
   {% endif %}
  </div>
 </div>

 <div class="row">
  <div class="col-md-12">
   gender:
   <ul>
    {% for key, value in data['genders'] %}
     <li>{{value}}</li>
    {% endfor %}
   </ul>
  </div>
 </div>
 <br>
 <h5>Yang atas menggunakan form phalcon yang bawah menggunakan form biasa</h5>
 <div class="row">
  <div class="col-md-12">
   {{ form.label('name') }}
   {{ form.render('name', ['class':'form-control']) }}
   <br>
  </div>
 </div>
 <div class="row">
  <div class="col-md-12">
   <label>Nama user</label>
   <input type="text" name="name" class="form-control" placeholder="Type your name">
  </div> 
 </div>
 
{% endblock %}