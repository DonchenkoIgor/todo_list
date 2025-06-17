@extends('tasks.layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Задача: {{ $task->title }}</h1>

        <p><strong>Описание:</strong></p>
        <p>{{ $task->description ?? '-' }}</p>

        <p class="mt-4"><strong>Статус:</strong> {{ ucfirst($task->status) }}</p>

        <p class="mt-2"><strong>Срок выполнения:</strong>
            {{ $task->due_date ? $task->due_date->format('d.m.Y') : '-' }}
        </p>

        <p class="mt-6">
            <a href="{{ route('tasks.index') }}" class="text-blue-600 hover:underline">&larr; Вернуться к списку задач</a>
        </p>
    </div>
@endsection

