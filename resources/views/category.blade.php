<table>
    <tr>
        <th>Categoriya nomi</th>
    </tr>
</table>
<tbody>
    @foreach ($categories as $category)
    <tr>
        <td>{{$category->name}}</td>
    </tr><br>
    @endforeach
</tbody>
    