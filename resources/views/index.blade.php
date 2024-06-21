<button onclick="document.location='create'" >Створити задачу</button>
<p>Список створених задач</p>
@forelse($data as $key)
    <p>
        <a href="/view/{{ $key->id }}">{{ $key->title }}</a>
        <button onclick="document.location='delete/{{ $key->id }}'" class="btn btn-primary">Видалити задачу</button>
    </p>
@empty
    <p>Покищо немає жодної задачі</p>
@endforelse
