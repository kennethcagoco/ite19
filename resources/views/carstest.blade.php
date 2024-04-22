<table border="1px">
    <tr>
      <th>brand</th>
      <th>price</th>
      <th>description</th>
      <th>engine</th>
      <th>body_type</th>
      <th>model</th>
      <th>transmission</th>
      <th>image</th>
    </tr>

    @foreach ( $data as $data )

    <tr>
      <td>{{$data->brand}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->description}}</td>
    </tr>

    @endforeach
  </table>
