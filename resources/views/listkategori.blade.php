<a href="/kategori/tambah"><button>Tambah</button></a>
<table>
<tr>
    <th>
        NO
    </th>
    <th>
        Kategori
    </th>
    <th>
        Aksi
    </th>
</tr>
@foreach($kategori as $p)
    <tr>
        <td>
            {{$p->id_kategori}}
        </td>
        <td>
            {{$p->kategori}}
        </td>
        <td>
            <a href="/kategori/edit/{{$p->id_kategori}}"><button>EDIT</button></a>
        </td>
    </tr>

@endforeach
</table>