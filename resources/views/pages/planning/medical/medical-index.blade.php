<x-app-layout>
    <form action="{{ route('med.save') }}" method="POST">
        @csrf
        @include('pages.planning.medical.medical-form')
    </form>
    <hr>
    @include('pages.planning.medical.medical-table')
</x-app-layout>
