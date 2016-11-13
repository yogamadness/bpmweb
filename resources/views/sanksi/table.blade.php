<table id="demosi-table" class="table table-striped" style="width:100%">
    <thead>
        <th>R<input name="select_all" value="1" id="r-select-all" type="checkbox"></th>
        <th>A<input name="select_all" value="1" id="a-select-all" type="checkbox"></th>
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
        <tr>
                <td>11</td>
                <td>21</td>
                <td><a href="#">00001/PDM-EN/08.16</a></td>
                <td>GAWI ESTATE-1</td>
                <td>PDM Estate Non-Staff : Pemanen 30 orang.</td>
                <td>Sugandi</td>
                <td>22-01-2015 09:30:33</td>
                <td>23-01-2015 09:30:33</td>
              </tr>
              <tr>
                <td>12</td>
                <td>22</td>
                <td><a href="#">00002/PDM-MS/08.16</a></td>
                <td>BBB MILL</td>
                <td>PDM Mill Staff : KTU 1 orang.</td>
                <td>Sugandi</td>
                <td>22-01-2015 09:30:33</td>
                <td>23-01-2015 09:30:33</td>
              </tr>
              <tr>
                <td>13</td>
                <td>23</td>
                <td><a href="#">00003/PDM-HO/08.16</a></td>
                <td>IT DIV</td>
                <td>PDM Head Office : Programmer 2 orang.</td>
                <td>Sugandi</td>
                <td>22-01-2015 09:30:33</td>
                <td>23-01-2015 09:30:33</td>
              </tr>
              <tr>
                <td>14</td>
                <td>24</td>
                <td><a href="#">00001/PDM-EN/08.16</a></td>
                <td>GAWI ESTATE-1</td>
                <td>PDM Estate Non-Staff : Pemanen 30 orang.</td>
                <td>Sugandi</td>
                <td>22-01-2015 09:30:33</td>
                <td>23-01-2015 09:30:33</td>
              </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>R</th>
            <th>A</th>
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