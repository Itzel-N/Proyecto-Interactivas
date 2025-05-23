
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventify - Eventos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #f5f5f5;
        }
        .navbar {
            background-color: #1e1e2d;
            transition: all 0.3s;
        }
        .nav-item {
            transition: all 0.2s;
        }
        .nav-item:hover {
            background-color: rgba(138, 75, 255, 0.2);
        }
        .nav-item.active {
            background-color: rgba(138, 75, 255, 0.3);
            border-bottom: 3px solid #8a4bff;
        }
        .event-card {
            background-color: #1e1e2d;
            transition: all 0.3s;
        }
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(138, 75, 255, 0.2);
        }
        .btn-primary {
            background-color: #8a4bff;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #7a3aee;
        }
        .btn-secondary {
            background-color: #2d2d3d;
            transition: all 0.3s;
        }
        .btn-secondary:hover {
            background-color: #3d3d4d;
        }
        .btn-danger {
            background-color: #ff4b6b;
            transition: all 0.3s;
        }
        .btn-danger:hover {
            background-color: #ee3a5a;
        }
        .modal {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .modal-content {
            background-color: #1e1e2d;
        }
        .user-item:hover {
            background-color: rgba(138, 75, 255, 0.1);
        }
    </style>
</head>
<body>
    <div class="flex flex-col h-screen overflow-hidden">
        <!-- Top Navbar -->
        <header class="navbar shadow-lg">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <h1 class="text-2xl font-bold text-purple-400">Eventify</h1>
                        </div>
                        <nav class="hidden md:block ml-10">
                            <div class="flex items-center space-x-4">
                                <a href="#" class="nav-item px-4 py-2 rounded-md text-gray-300 hover:text-white">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        Lugares
                                    </div>
                                </a>
                                <a href="#" class="nav-item px-4 py-2 rounded-md text-gray-300 hover:text-white">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                        Usuarios
                                    </div>
                                </a>
                                <a href="#" class="nav-item active px-4 py-2 rounded-md text-white font-medium">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        Eventos
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="flex items-center">
                        <button id="addEventBtn" class="btn-primary px-4 py-2 rounded-lg text-white flex items-center mr-4">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Agregar Evento
                        </button>
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center">
                                    <span class="font-medium text-white">IN</span>
                                </div>
                                <div class="ml-3 hidden md:block">
                                    <p class="text-sm font-medium text-white">Itzel Negrete</p>
                                    <p class="text-xs text-gray-400">Administrador</p>
                                </div>
                            </div>
                        </div>
                        <button class="md:hidden ml-4 text-gray-300 focus:outline-none" id="mobileMenuBtn">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile menu -->
                <div class="md:hidden hidden" id="mobileMenu">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="#" class="nav-item block px-3 py-2 rounded-md text-gray-300 hover:text-white">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Lugares
                            </div>
                        </a>
                        <a href="#" class="nav-item block px-3 py-2 rounded-md text-gray-300 hover:text-white">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                Usuarios
                            </div>
                        </a>
                        <a href="#" class="nav-item active block px-3 py-2 rounded-md text-white font-medium">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Eventos
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-900">
            <div class="container mx-auto">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-white mb-2">Eventos</h2>
                    <p class="text-gray-400">Gestiona y organiza todos tus eventos</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Evento Público -->
                    <div class="event-card rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gradient-to-r from-purple-600 to-indigo-600 relative">
                            <div class="absolute top-3 right-3 bg-green-500 text-xs font-bold px-2 py-1 rounded-full text-white">
                                Público
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                <h3 class="text-xl font-bold text-white">Fiesta de Lanzamiento</h3>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-gray-400 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm">15 de Junio, 2023</span>
                            </div>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm">19:00 - 23:00</span>
                            </div>
                            <p class="text-gray-300 mb-4 text-sm">Celebra con nosotros el lanzamiento de nuestra nueva plataforma con música en vivo y networking.</p>
                            <div class="flex items-center text-gray-400 mb-5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Centro de Convenciones, Ciudad de México</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="btn-secondary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Ver detalles
                                </button>
                                <button class="btn-primary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Asistir
                                </button>
                                <button class="btn-danger p-2 rounded-lg text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Evento Privado -->
                    <div class="event-card rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gradient-to-r from-indigo-600 to-blue-600 relative">
                            <div class="absolute top-3 right-3 bg-yellow-500 text-xs font-bold px-2 py-1 rounded-full text-white">
                                Privado
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                <h3 class="text-xl font-bold text-white">Reunión de Equipo</h3>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-gray-400 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm">20 de Junio, 2023</span>
                            </div>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm">10:00 - 12:00</span>
                            </div>
                            <p class="text-gray-300 mb-4 text-sm">Reunión trimestral para revisar objetivos y planificar estrategias para el próximo trimestre.</p>
                            <div class="flex items-center text-gray-400 mb-5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Sala de Conferencias, Oficina Central</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="btn-secondary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Ver detalles
                                </button>
                                <button id="inviteBtn" class="btn-primary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                    </svg>
                                    Invitar
                                </button>
                                <button class="btn-danger p-2 rounded-lg text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Evento Público 2 -->
                    <div class="event-card rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gradient-to-r from-purple-500 to-pink-500 relative">
                            <div class="absolute top-3 right-3 bg-green-500 text-xs font-bold px-2 py-1 rounded-full text-white">
                                Público
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                <h3 class="text-xl font-bold text-white">Taller de Diseño UX</h3>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-gray-400 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm">25 de Junio, 2023</span>
                            </div>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm">14:00 - 17:00</span>
                            </div>
                            <p class="text-gray-300 mb-4 text-sm">Aprende los fundamentos del diseño UX y cómo aplicarlos en tus proyectos digitales.</p>
                            <div class="flex items-center text-gray-400 mb-5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Hub de Innovación, Polanco</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="btn-secondary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Ver detalles
                                </button>
                                <button class="btn-primary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Asistir
                                </button>
                                <button class="btn-danger p-2 rounded-lg text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Evento Privado 2 -->
                    <div class="event-card rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gradient-to-r from-blue-600 to-cyan-600 relative">
                            <div class="absolute top-3 right-3 bg-yellow-500 text-xs font-bold px-2 py-1 rounded-full text-white">
                                Privado
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                <h3 class="text-xl font-bold text-white">Cena de Negocios</h3>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-gray-400 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm">30 de Junio, 2023</span>
                            </div>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm">20:00 - 23:00</span>
                            </div>
                            <p class="text-gray-300 mb-4 text-sm">Cena exclusiva con inversionistas y socios estratégicos para discutir nuevas oportunidades.</p>
                            <div class="flex items-center text-gray-400 mb-5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Restaurante Alma, Condesa</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="btn-secondary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Ver detalles
                                </button>
                                <button class="btn-primary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                    </svg>
                                    Invitar
                                </button>
                                <button class="btn-danger p-2 rounded-lg text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Evento Público 3 -->
                    <div class="event-card rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gradient-to-r from-violet-600 to-fuchsia-600 relative">
                            <div class="absolute top-3 right-3 bg-green-500 text-xs font-bold px-2 py-1 rounded-full text-white">
                                Público
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                <h3 class="text-xl font-bold text-white">Conferencia Tech</h3>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-gray-400 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm">5 de Julio, 2023</span>
                            </div>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm">09:00 - 18:00</span>
                            </div>
                            <p class="text-gray-300 mb-4 text-sm">Conferencia sobre las últimas tendencias en tecnología e innovación digital.</p>
                            <div class="flex items-center text-gray-400 mb-5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Centro Banamex, Ciudad de México</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="btn-secondary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Ver detalles
                                </button>
                                <button class="btn-primary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Asistir
                                </button>
                                <button class="btn-danger p-2 rounded-lg text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Evento Privado 3 -->
                    <div class="event-card rounded-xl overflow-hidden shadow-lg">
                        <div class="h-40 bg-gradient-to-r from-purple-700 to-indigo-700 relative">
                            <div class="absolute top-3 right-3 bg-yellow-500 text-xs font-bold px-2 py-1 rounded-full text-white">
                                Privado
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                <h3 class="text-xl font-bold text-white">Sesión de Planificación</h3>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-gray-400 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm">10 de Julio, 2023</span>
                            </div>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm">13:00 - 15:00</span>
                            </div>
                            <p class="text-gray-300 mb-4 text-sm">Sesión estratégica para definir los objetivos del próximo semestre y asignar recursos.</p>
                            <div class="flex items-center text-gray-400 mb-5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">Sala de Juntas, Piso 5</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="btn-secondary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Ver detalles
                                </button>
                                <button class="btn-primary flex-1 py-2 px-3 rounded-lg text-sm text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                    </svg>
                                    Invitar
                                </button>
                                <button class="btn-danger p-2 rounded-lg text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal para invitar usuarios -->
    <div id="inviteModal" class="modal fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 bg-black opacity-50"></div>
            <div class="modal-content relative bg-gray-800 rounded-xl shadow-xl max-w-md w-full mx-auto p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-white">Invitar usuarios</h3>
                    <button id="closeInviteModal" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Buscar usuarios..." class="w-full bg-gray-700 text-white border-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                <div class="max-h-60 overflow-y-auto mb-4">
                    <ul>
                        <li class="user-item flex items-center justify-between p-3 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center">
                                    <span class="text-xs font-medium text-white">AM</span>
                                </div>
                                <span class="ml-3 text-white">Ana Martínez</span>
                            </div>
                            <button class="btn-primary text-xs px-3 py-1 rounded-lg">Invitar</button>
                        </li>
                        <li class="user-item flex items-center justify-between p-3 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center">
                                    <span class="text-xs font-medium text-white">CR</span>
                                </div>
                                <span class="ml-3 text-white">Carlos Rodríguez</span>
                            </div>
                            <button class="btn-primary text-xs px-3 py-1 rounded-lg">Invitar</button>
                        </li>
                        <li class="user-item flex items-center justify-between p-3 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-yellow-500 flex items-center justify-center">
                                    <span class="text-xs font-medium text-white">LG</span>
                                </div>
                                <span class="ml-3 text-white">Laura González</span>
                            </div>
                            <button class="btn-primary text-xs px-3 py-1 rounded-lg">Invitar</button>
                        </li>
                        <li class="user-item flex items-center justify-between p-3 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center">
                                    <span class="text-xs font-medium text-white">MV</span>
                                </div>
                                <span class="ml-3 text-white">Miguel Vázquez</span>
                            </div>
                            <button class="btn-primary text-xs px-3 py-1 rounded-lg">Invitar</button>
                        </li>
                        <li class="user-item flex items-center justify-between p-3 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center">
                                    <span class="text-xs font-medium text-white">SP</span>
                                </div>
                                <span class="ml-3 text-white">Sofía Pérez</span>
                            </div>
                            <button class="btn-primary text-xs px-3 py-1 rounded-lg">Invitar</button>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-end">
                    <button id="cancelInvite" class="btn-secondary px-4 py-2 rounded-lg text-white mr-2">Cancelar</button>
                    <button class="btn-primary px-4 py-2 rounded-lg text-white">Enviar invitaciones</button>
                </div>
            </div>
        </div>
    </div>

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
        // Funcionalidad para el modal de invitar
        const inviteModal = document.getElementById('inviteModal');
        const inviteBtn = document.getElementById('inviteBtn');
        const closeInviteModal = document.getElementById('closeInviteModal');
        const cancelInvite = document.getElementById('cancelInvite');

        inviteBtn.addEventListener('click', () => {
            inviteModal.classList.remove('hidden');
        });

        closeInviteModal.addEventListener('click', () => {
            inviteModal.classList.add('hidden');
        });

        cancelInvite.addEventListener('click', () => {
            inviteModal.classList.add('hidden');
        });

        // Funcionalidad para el modal de agregar evento
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
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9446d921d05ad89f',t:'MTc0ODAyNzM3Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>