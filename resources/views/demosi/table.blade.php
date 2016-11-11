<table id="demosi-table" class="table table-striped" style="width:100%">
    <thead>
        <th>R</th>
        <th><input name="select_all" value="1" id="a-select-all" type="checkbox"> A</th>
        <th>No Dokumen</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Dibuat Oleh</th>
        <th>Dibuat Pada</th>
        <th>Update Terakhir</th>
    </thead>
    <tbody>
    <?php /*
    @foreach($permits as $demosi)
        <tr>
            <td>{!! $permit->lat !!}</td>
            <td>{!! $permit->long !!}</td>
            <td>
                {!! Form::open(['route' => ['permits.destroy', $permit->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('permits.show', [$permit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('permits.edit', [$permit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    */?>

    @foreach($data as $row)
              <tr>
                <td><a class="btn btn-danger" style="padding:2px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                <td>1</td>
                <td><a href="{{ route('demosi.edit', $row->h_id ) }}">{{ $row->doc_code }}</a> <a href="{!! url('demosi/approve', $row->h_id) !!}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></td>
                <td>--</td>
                <td>{{ $row->notes }}</td>
                <td>{{ $row->created_by }}</td>
                <td>{{ date('d-m-Y H:i:s', strtotime($row->created_at)) }}</td>
                <td>{{ date('d-m-Y H:i:s', strtotime($row->update_at)) }}</td>
              </tr>
    @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>R</th>
            <th><input name="select_all" value="1" id="a-select-all" type="checkbox"> A</th>
            <th>No Dokumen</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>Dibuat Oleh</th>
            <th>Dibuat Pada</th>
            <th>Update Terakhir</th>
          </tr>
          </tfoot>
    </tbody>
</table>
