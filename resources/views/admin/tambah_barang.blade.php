@extends('admin.admin_frontpage')
@section('content')
<center>
    @if (Session::has('success'))
        <div class="card bg-success text-light" style="width:fit-content;margin:5px;padding:5px;"> {{Session::get('success')}} </div>
    @endif
</center>


<center>
<form action="{{ url('/add_barang') }}" method="POST" class="card" style="width:70%;" enctype="multipart/form-data">
    @csrf
        <div class="card-header h3 bg-dark text-light">
        <i class="fas fa-plus-circle"></i> Tambah Barang
        </div>
        <div class="card-body text-left">
        <div class="form-group">
            <div class="form-group">
                <label for="Nama barang">Nama Barang:</label>
                <input type="text" name="NamaBarang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Kode Jenis">Kode Jenis</label>
                <select name="KodeJenis" id="" class="form-control" required>
                    @foreach ($jenis as $j)
                    <option value="{{$j->KodeJenis}}"> {{$j->Jenis}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Harga Net">Harga Net</label>
                <input type="number" name="HargaNet" maxlength="99999999999" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Harga Jual">Harga Jual</label>
                <input type="number" name="HargaJual" maxlength="99999999999" class="form-control" required>
            </div>
            <div class="form-group">
                    <label for="Stok">Stok</label>
                    <input type="number" name="Stok" maxlength="99999999999" class="form-control" required>
                </div>
        </div>
            <center>
                <button class="btn btn-success" type="submit"> <i class="fas fa-plus"></i> Tambah </button>
            </center>
        </div>
        </form>
</center>

@endsection
