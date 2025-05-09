<x-app-layout>
    <div class="p-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">LUGARES</h1>
        
        <button id="openModal" class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-500">
            Agregar ubicacion
        </button>
        
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700">
                        <th class="py-3 px-4 border-b text-left text-gray-700 dark:text-gray-300">Nombre</th>
                        <th class="py-3 px-4 border-b text-left text-gray-700 dark:text-gray-300">Descripcion</th>
                        <th class="py-3 px-4 border-b text-left text-gray-700 dark:text-gray-300">Ubicacion</th>
                        <th class="py-3 px-4 border-b text-left text-gray-700 dark:text-gray-300">Capacidad</th>                       
                        <th class="py-3 px-4 border-b text-left text-gray-700 dark:text-gray-300">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($lugares as $lugar)
                        <tr class="border-b dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ $lugar->nombre }}</td>
                            <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ $lugar->descripcion }}</td>
                            <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ $lugar->direccion }}</td>
                            <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ $lugar->capacidad }}</td>
                            <td class="py-2 px-4 flex space-x-2">
                                <a href="{{ route('eliminar.lugar', $lugar->id) }}"
                                   class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500 shadow">
                                    Eliminar
                                </a>
                                <a href="#"
                                    onclick="openEditModal({{ $lugar->id }}, '{{ $lugar->nombre }}', '{{ $lugar->descripcion }}', '{{ $lugar->direccion }}', {{ $lugar->capacidad }})"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-400 shadow">
                                    Editar
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md p-6">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Agregar lugar</h3>
            <form action="{{ route('guardar.lugar') }}" method="post">
                @csrf
                <label class="block text-gray-700 dark:text-gray-200">Nombre</label>
                <input name="nombre" type="text" class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 mb-3 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>
                
                <label class="block text-gray-700 dark:text-gray-200">Descripcion</label>
                <input name="descripcion" type="text" class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 mb-3 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>
                
                <label class="block text-gray-700 dark:text-gray-200">Direccion</label>
                <input name="direccion" type="text" class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 mb-3 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>

                <label class="block text-gray-700 dark:text-gray-200">Capacidad</label>
                <input name="capacidad" type="number" class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 mb-4 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>

                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeModal" class="bg-gray-300 dark:bg-gray-600 text-gray-800 dark:text-white px-4 py-2 rounded hover:bg-gray-400 dark:hover:bg-gray-500">
                        Cancelar
                    </button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                        Agregar
                    </button>
                </div>
            </form>
        </div>
    </div>

   
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md p-6">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Editar lugar</h3>
            <form id="editForm" method="POST">
                @csrf

                <input type="hidden" name="id" id="editId">

                <label class="block text-gray-700 dark:text-gray-200">Nombre</label>
                <input id="editNombre" name="nombre" type="text" class="w-full border rounded p-2 mb-3 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>

                <label class="block text-gray-700 dark:text-gray-200">Descripcion</label>
                <input id="editDescripcion" name="descripcion" type="text" class="w-full border rounded p-2 mb-3 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>

                <label class="block text-gray-700 dark:text-gray-200">Direccion</label>
                <input id="editDireccion" name="direccion" type="text" class="w-full border rounded p-2 mb-3 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>

                <label class="block text-gray-700 dark:text-gray-200">Capacidad</label>
                <input id="editCapacidad" name="capacidad" type="number" class="w-full border rounded p-2 mb-4 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100" required>

                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeEditModal()" class="bg-gray-300 dark:bg-gray-600 text-gray-800 dark:text-white px-4 py-2 rounded hover:bg-gray-400 dark:hover:bg-gray-500">
                        Cancelar
                    </button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function openEditModal(id, nombre, descripcion, direccion, capacidad) {
        document.getElementById('editId').value = id;
        document.getElementById('editNombre').value = nombre;
        document.getElementById('editDescripcion').value = descripcion;
        document.getElementById('editDireccion').value = direccion;
        document.getElementById('editCapacidad').value = capacidad;

        document.getElementById('editForm').action = `/editarLugar/${id}`; 
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }

    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });
    </script>





    <script>
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>
    
</x-app-layout>