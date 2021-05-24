<table border="1">
    <tbody>
    <tr><th colspan="3">Products</th></tr>
    <tr>
        <th>Name</th>
        <th>Expiration date</th>
        <th>Expired</th>
    </tr>
    @foreach($item as $items)
        <tr>
            <td>{{$items['name']}}</td>
            <td>{{$items['date']}}</td>
            <td>
                @if(strtotime($items['date']) < strtotime(date('d.m.Y')))
                    1
                @else
                    0
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
