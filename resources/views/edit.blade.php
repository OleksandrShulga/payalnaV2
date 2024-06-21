<form action="" method="POST">
    @csrf
    <ul>
        @foreach ($errors->all() as $message)
            <li>
                {{ $message }}
            </li>
        @endforeach
    </ul>
    <p>Редагування задачі "{{ $data->title }}"</p>
    <p>Введіть заголовок <input name="title" placeholder="Заголовок" value = "{{ $data->title }}" class="form-control"></p>
    <p>Введіть опис <input name="text" placeholder="Опис" value = "{{ $data->text }}" class="form-control"></p>
    <p>Уточніть статус
        <select name="status">
            <option value = "{{ $data->status }}" selected hidden>{{ $data->status }}</option>
            <option value = "В роботі">В роботі</option>
            <option value = "Виконана">Виконана</option>
        </select>
    </p>
    <p><input type="submit" class="btn btn-primary"></p>
</form>
<p><button onclick="location.href='/'">Перейти на головну сторінку</button></p>
