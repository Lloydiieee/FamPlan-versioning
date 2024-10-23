<x-app-layout>
    <form action="{{ route('inform.save') }}" method="POST">
        @csrf
        @include('pages.planning.info.info-form')
    </form>
    <hr>
    @include('pages.planning.info.info-table')
</x-app-layout>
