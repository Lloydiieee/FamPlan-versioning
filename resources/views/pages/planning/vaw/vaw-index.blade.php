<x-app-layout>
    <form action="{{ route('vaw.save') }}" method="POST">
        @csrf
        @include('pages.planning.vaw.vaw-form')
    </form>
    <hr>
    @include('pages.planning.vaw.vaw-table')
</x-app-layout>
