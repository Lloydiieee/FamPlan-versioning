<x-app-layout>
    <form action="{{ route('trans.save') }}" method="POST">
        @csrf
        @include('pages.planning.trans.trans-form')
    </form>
    <hr>
    @include('pages.planning.trans.trans-table')
</x-app-layout>
