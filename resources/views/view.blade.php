<p>Задача: {{ $data->title }}</p>
<p>Статус: {{ $data->status }}</p>
<p>Опис: {{ $data->text }}</p>
<p><button onclick="location.href='/edit/{{ $data->id }}'" class="btn btn-primary">Редагувати задачу</button></p>
<p><button onclick="location.href='/delete/{{ $data->id }}'" class="btn btn-primary">Видалити задачу</button></p>
<p><button onclick="location.href='/'" class="btn btn-primary">Перейти на головну сторінку</button></p>


