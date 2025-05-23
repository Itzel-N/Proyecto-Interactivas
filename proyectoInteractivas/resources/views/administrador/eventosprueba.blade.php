<x-app-layout>
    <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-900">
        <div class="container mx-auto px-2">
            <div class="mb-6 flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-white mb-2">Eventos</h2>
                <p class="text-gray-400">Gestiona y organiza todos tus eventos</p>
            </div>

            <button id="addEventBtn" class="btn-primary px-6 py-2 rounded-lg text-white flex items-center ml-6">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Agregar Evento
            </button>
            </div>
        </div>
    </main>

    <!-- Modal para agregar evento -->
    <div id="addEventModal" class="modal fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 mt-4">
            <div class="fixed inset-0 bg-black opacity-50"></div>
            <div class="modal-content relative bg-gray-800 rounded-xl shadow-xl max-w-lg w-full mx-auto p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-white">Agregar nuevo evento</h3>
                    <button id="closeAddEventModal" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-300 text-sm font-medium mb-2">Nombre del evento</label>
                        <input type="text" class="w-full bg-gray-700 text-white border-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Nombre del evento">
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Fecha</label>
                            <input type="date" class="w-full bg-gray-700 text-white border-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Hora</label>
                            <input type="time" class="w-full bg-gray-700 text-white border-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-300 text-sm font-medium mb-2">Ubicación</label>
                        <input type="text" class="w-full bg-gray-700 text-white border-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Ubicación del evento">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-300 text-sm font-medium mb-2">Descripción</label>
                        <textarea class="w-full bg-gray-700 text-white border-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 h-24" placeholder="Descripción del evento"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-300 text-sm font-medium mb-2">Tipo de evento</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="eventType" class="form-radio h-4 w-4 text-purple-500">
                                <span class="ml-2 text-gray-300">Público</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="eventType" class="form-radio h-4 w-4 text-purple-500">
                                <span class="ml-2 text-gray-300">Privado</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="cancelAddEvent" class="btn-secondary px-4 py-2 rounded-lg text-white mr-2">Cancelar</button>
                        <button type="button" class="btn-primary px-4 py-2 rounded-lg text-white">Crear evento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    <script>
        const addEventModal = document.getElementById('addEventModal');
        const addEventBtn = document.getElementById('addEventBtn');
        const closeAddEventModal = document.getElementById('closeAddEventModal');
        const cancelAddEvent = document.getElementById('cancelAddEvent');

        addEventBtn.addEventListener('click', () => {
            addEventModal.classList.remove('hidden');
        });

        closeAddEventModal.addEventListener('click', () => {
            addEventModal.classList.add('hidden');
        });

        cancelAddEvent.addEventListener('click', () => {
            addEventModal.classList.add('hidden');
        });

        // Cerrar modales al hacer clic fuera de ellos
        window.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal')) {
                e.target.classList.add('hidden');
            }
        });

        // Funcionalidad para el menú móvil
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</x-app-layout>