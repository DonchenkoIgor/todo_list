@extends('tasks.layouts.app')

@section('content')
    <h1>Список задач</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('tasks.create') }}">Добавить новую задачу</a>

    @if($tasks->isEmpty())
        <p>Задач пока нет.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 15px; width: 100%;">
            <thead>
            <tr>
                <th>Название</th>
                <th>Статус</th>
                <th>Срок</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->due_date ? $task->due_date->format('d.m.Y') : '-' }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}">Редактировать</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Удалить задачу?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection

