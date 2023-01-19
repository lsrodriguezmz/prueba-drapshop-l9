<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Lista de Roles') }}
    </h2>
  </x-slot>
    

  <div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        
        <!-- <div class="flex justify-end">
          <a href="{{ route('roles.create') }}" class="px-4 py-2 bg-green-600 hover:bg-green-400 rounded-md">Create</a>
        </div> -->
        
        <div class="container flex justify-center mx-auto">
          <div class="flex flex-col">
            
            <form method="POST" action="{{ route('roles.store') }}" class="w-full max-w-sm">
              @csrf
              <div class="flex items-center border-b border-teal-500 py-2">
                <input type="text" id="name" name="name" placeholder="Crear nuevo Rol" aria-label="Name" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">
                <button type="submit" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">Crear</button>
                <!-- <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">Cancel</button> -->
              </div>
              @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </form>
            
            <div class="w-full py-4">
              <div class="border-b border-gray-200 shadow">
                <table>
                  <thead class="bg-gray-200">
                    <tr>
                      <th class="px-6 py-2 text-xs text-gray-500">ID</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Nombre</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Accion</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    @foreach ( $roles as $role )
                      <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500">
                          {{ $role->id }}
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-900">
                            {{ $role->name }}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="flex space-x-2">
                            <a href="{{ route('roles.edit', $role->id) }}" class="px-4 py-1 text-sm text-black bg-blue-400 rounded">Editar</a>
                            <!-- <a href="#" class="px-4 py-1 text-sm text-black bg-red-400 rounded">Borrar</a> -->
                            <!-- <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Comfirmar Accion');" class="px-4 py-1 text-sm text-black bg-red-400 rounded">
                              @csrf
                              @method('DELETE')
                              <button type="submit">Borrar</button>
                            </form> -->
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
