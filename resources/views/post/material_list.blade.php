<ul class="material-list">
  @foreach ($post->materials as $material) 
    <li class="material-list-item">
      <span class="list-item-left">{{ $material->name }}</span>
      <span class="list-item-right">{{ $material->amount }}</span>
    </li>
  @endforeach
</ul>
