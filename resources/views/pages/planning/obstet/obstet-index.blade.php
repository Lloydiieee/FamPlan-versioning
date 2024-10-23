<x-app-layout>
    <form action="{{ route('obstet.save') }}" method="POST">
        @csrf
        @include('pages.planning.obstet.obstet-form')
    </form>
    <hr>
    @include('pages.planning.obstet.obstet-table')
</x-app-layout>
