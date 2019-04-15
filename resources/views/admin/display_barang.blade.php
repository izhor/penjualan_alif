@extends('admin.admin_frontpage')
@section('content')
<center>


<table class="table table-hovered">
    <tr>
        <th>No</th>
        <th class="col-md-3 text-center">Nama Barang</th>
        <th class="col-md-3 text-center">Kode Jenis</th>
        <th class="col-md-2 text-center">Stok</th>
        <th class="col-md-3 text-center">Harga</th>
    </tr>
    @foreach ($barangs as $b)
    <tr>
        <td> {{$loop->iteration}} </td>
        <td class="col-md-3 text-center"> {{$b->NamaBarang}} </td>
        <td class="col-md-3 text-center"> {{$b->KodeJenis}} </td>
        <td class="col-md-2 text-center"> {{$b->Stok}} </td>
        <td class="col-md-3 text-center"> {{$b->HargaJual}} </td>
    </tr>
    @endforeach
</table>

<center> {{$barangs->onEachSide(2)->links() }} </center>


</center>
@endsection
