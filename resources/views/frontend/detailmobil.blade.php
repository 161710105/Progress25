@extends('layouts.user')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<br>
			<br>
			<br>
			<br>
			<div class="panel panel-primary">
			  <center><div class="panel-heading"><h3>Detail Data Mobil</h3></center>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                          <center>
                          <div class="col-md-9 pr-1">
                            @if(isset($mobil)&& $mobil->foto)
                            <p>
                            	<br>
                            	<img src="{{asset('assets/image/foto_mobil/'.$mobil->foto)}}"
                            	style="width:350px; height: 300px;">
                            </p>
                            @endif
                            @if ($errors->has('foto'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                              </span>
                          @endif
                          </div>
                      </center>
                        </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama_mobil" class="form-control" value="{{ $mobil->nama_mobil }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Mobil</label>
						<input type="text" name="jenis_mobil" class="form-control" value="{{ $mobil->jenis_mobil }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Plat Nomor</label>
						<input type="text" name="no_plat" class="form-control" value="{{ $mobil->no_plat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tahun Keluaran</label>
						<input type="text" name="tahun_keluaran" class="form-control" value="{{ $mobil->tahun_keluaran }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Warna</label>
						<input type="text" name="warna" class="form-control" value="{{ $mobil->warna }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kapasitas</label>
						<input type="text" name="kapasitas" class="form-control" value="{{ $mobil->kapasitas }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Perseneling</label>
						<input type="text" name="perseneling" class="form-control" value="{{ $mobil->perseneling }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Stock</label>
						<input type="text" name="stock" class="form-control" value="{{ $mobil->stock }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Harga Sewa</label>
						<input type="text" name="harga" class="form-control" value="Rp.{{ $mobil->harga }}&nbsp/Hari" readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Merk</label>
						<input type="text" name="title" class="form-control" value="{{ $mobil->Merk->nama_merk }}"  readonly>
			  		</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection