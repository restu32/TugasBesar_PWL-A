@extends('adminlte::page')
@section('title', 'Welcome')
@section('content')
<div class="row">
<div class="col-6">
<div class="card">
<div class="card card-widget widget-user">
<div class="widget-user-header text-white" style="background: url('gambar/hs.jpg') center center; background-size:cover;">
</div> 
<div class="widget-user-image">
<img class="img-circle" src="gambar/steam.jpg">
</div>
<div class="card-footer">
<center><img src="gambar/laptop.jpg" width="90%"></center>
</div>
</div>
</div>
</div>
<div class="col-6">
<div class="card">
<div class="card card-widget widget-user">
<div class="widget-user-header text-white" style="background: url('gambar/pc.jpg') center center; background-size:cover;">
</div>
</div>
<div class="card-footer">
<center><img src="gambar/mecha.jpg" width="60%"></center>
</div>
</div>
</div>
</div>
</div>


 <!-- table produk baru -->
 <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk Yang Tersedia</h4>
          <div class="card-tools">
            <a href="#" class="btn btn-sm btn-primary">
              More
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mechanical</td>
                <td>Keyboard DA Meca Fighter</td>
                <td>Keyboard</td>
                <td>1</td>
                <td>300.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop 