<li>
    <div class="task">
        {{ $title }}
    </div>
    <div class="action">
        <a href="/task/{{ $id }}/edit"><i class="fa fa-edit"></i></a>
    </div>
    <div class="action">
        <form action="{{ route('task.destroy', $id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="no-styles"><i class="fa fa-trash-alt"></i></button>
        </form>
    </div>
  </li>