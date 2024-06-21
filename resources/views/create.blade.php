<form action="" method="POST">
    @csrf
    <ul>
        @foreach ($errors->all() as $message)
            <li>
                {{ $message }}
            </li>
        @endforeach
    </ul>
    <p>Створення нової задачі</p>
    <p><input name="title" placeholder="Заголовок" class="form-control"></p>
    <p><input name="text" placeholder="Опис" class="form-control"></p>
    <p><input type="submit" class="btn btn-primary"></p>
</form>
<p><button onclick="location.href='/'">Перейти на головну сторінку</button></p>
