<x-app-layout>
    <form action="{{ route('exam.save') }}" method="POST">
        @csrf
        @include('pages.planning.exam.exam-form')
    </form>
    <hr>
    @include('pages.planning.exam.exam-table')
</x-app-layout>
