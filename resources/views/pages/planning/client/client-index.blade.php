<x-app-layout>
    <form action="{{ route('client.save') }}" method="POST">
        @csrf
        @include('pages.planning.client.client-form')
    </form>
    <hr>
    @include('pages.planning.client.client-table')
</x-app-layout>
