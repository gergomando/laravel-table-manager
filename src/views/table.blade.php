<div class="table-responsive">
  <table class="table">
    <thead class=" text-primary">
      <tr>
        @foreach($fields as $property => $caption)
        <th>
            {{{ $caption }}}
        </th>
        @endforeach
        @if($hasAction)
        <th></th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        @foreach($fields as $property => $caption)
        <td>
            {!! $item[$property] !!}
        </td>
        @endforeach
        @if($hasAction)
        <td>
          {!! $item->actions !!}
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  @if($paginate)
  {{{ $items->render() }}}
  @endif
</div>