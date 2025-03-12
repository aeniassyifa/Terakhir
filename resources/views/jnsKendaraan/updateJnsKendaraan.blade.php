@foreach($data as $row)
<form action="{{route('jnsKendaraan.update',$id)}}" method="post" name="update">
    @csrf
    <label for="">Nama Jenis Kendaraan : </label>
    <input type="text" name="jns_kendaraans" id="">
    <input type="submit" name="update" value="update">
</form>
@endforeach
<!-- c -->