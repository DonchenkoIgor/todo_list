@extends('tasks.layouts.app')

@section('content')
    <h1>Создать задачу</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Название:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="description">Описание:</label><br>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="status">Статус:</label><br>
            <select id="status" name="status" required>
                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Ожидает</option>
                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Выполнено</option>
                <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Отменено</option>
            </select>
        </div>

        <div>
            <label for="due_date">Срок (дата):</label><br>
            <input type="date" id="due_date" name="due_date" value="{{ old('due_date') }}">
        </div>

        <button type="submit">Создать</button>
        <a href="{{ route('tasks.index') }}">Отмена</a>
    </form>
@endsection

