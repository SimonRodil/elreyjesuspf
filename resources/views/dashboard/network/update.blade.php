@extends('layouts.dashboard.app')
@section('styles')
    <style>
        .btn-icon-text > svg {
            margin-right: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container px-6 mx-auto grid">
        <div class="flex flex-col flex-1 mt-7 w-max">
            <div>
                <a href="{{route('network.index')}}" class="btn-icon-text flex justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Volver a la lista
                </a>
            </div>
        </div>
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Actualizar: {{$network->name}}
        </h2>
        <form method="POST" class="submitter" action="/dashboard/networks/{{$network->id}}/update" enctype="multipart/form-data" id="update">
            @method('PUT')
            <div class="grid md:grid-cols-3 gap-6 px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                    <input name="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jane Doe" value="{{ $network->name }}"/>
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Mentor</span>
                    <select name="mentor_id" value-selected="{{$network->mentor_id}}" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="">-</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor->id }}">{{$mentor->name}}</option>
                        @endforeach
                    </select>
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Network</span>
                    <select name="network_father" value-selected="{{$network->network_father}}" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="">-</option>
                        @foreach ($networks as $network)
                            <option value="{{ $network->id }}">{{$network->name}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
        </form>
        <div class="flex flex-col flex-1 w-max">
            <div>
                <button form="update" type="submit" class="btn-icon-text flex justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Enviar
                </button>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection