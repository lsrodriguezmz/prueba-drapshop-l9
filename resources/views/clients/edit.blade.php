<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar Cliente') }}
    </h2>
  </x-slot>

  <div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container flex justify-center mx-auto">
          <div class="flex flex-col py-2">
            <form method="POST" action="{{ route('clients.update', $client) }}" class="w-full max-w-sm">
              @csrf
              @method('PUT')
              <div class="flex items-center border-b border-teal-500 py-2">
                <input type="text" id="name" name="name" value="{{ $client->name }}" placeholder="Nombre Cliente" aria-label="Name" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">
              </div>
              <div class="flex items-center border-b border-teal-500 py-2">
                <textarea name="description" placeholder="Descripcion" rows="2" cols="80" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $client->description }}</textarea>
              </div>
              <div class="flex items-center py-2">
                <div class="flex space-x-2">
                  <button type="submit" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">Guardar</button>
                  <a href="{{ route('clients.index') }}" class="px-4 py-2 text-sm text-black bg-blue-400 rounded">Volver</a>
                </div>
              </div>
              @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
              @error('description') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </form>
          </div>
        </div>
        
        
        
        
        
        <div class="container flex justify-center mx-auto">
          <div class="flex flex-col">
            @if (count($orphan_projects) > 0)
            <h2>Proyectos disponibles</h2>
            <form method="POST" action="{{ route('clients.projects', $client->id) }}" class="w-full max-w-sm">
              @csrf
              <div class="inline-block relative w-64">
                <select id="project" name="project" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                  @foreach ($orphan_projects as $orphan_project)
                  <option value="{{ $orphan_project->id }}">{{ $orphan_project->name }}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-black py-1 px-2 rounded">Asignar</button>
            </form>
            @endif
            <div class="w-full py-4">
              <h2 class="font-semibold text-2xl text-gray-800 leading-tight px-2 py-2">
                Proyectos Asignados
              </h2>
              <div class="border-b border-gray-200 shadow">
                <table>
                  <thead class="bg-gray-200">
                    <tr>
                      <th class="px-6 py-2 text-xs text-gray-500">ID</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Nombre</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Descripcion</th>
                      <th class="px-6 py-2 text-xs text-gray-500">Accion</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    @foreach ( $client->projects as $client_project )
                      <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500">
                          {{ $client_project->id }}
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-900">
                            {{ $client_project->name }}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-900">
                            {{ $client_project->description }}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="flex space-x-2">
                            <form action="{{ route('clients.projects.remove', [$client->id, $client_project->id]) }}" method="POST" onsubmit="return confirm('Comfirmar Accion');" class="px-4 py-1 text-sm text-black bg-red-400 rounded">
                              @csrf
                              @method('DELETE')
                              <button type="submit">Remover</button>
                            </form>
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