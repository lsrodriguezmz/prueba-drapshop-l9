<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar Permiso') }}
    </h2>
  </x-slot>

  <div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container flex justify-center mx-auto">
          <div class="flex flex-col py-2">
            <form method="POST" action="{{ route('permissions.update', $permission) }}" class="w-full max-w-sm">
              @csrf
              @method('PUT')
              <div class="flex items-center border-b border-teal-500 py-2">
                <input type="text" id="name" name="name" value="{{ $permission->name }}" placeholder="Modificar valor" aria-label="Name" class="appearance-none bg-transparent border w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">
                <div class="flex space-x-2">
                  <button type="submit" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded" type="button">Guardar</button>
                  <!-- <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">Cancelar</button> -->
                  <a href="{{ route('permissions.index') }}" class="px-4 py-2 text-sm text-black bg-red-400 rounded">Cancelar</a>
                </div>
              </div>
              @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>