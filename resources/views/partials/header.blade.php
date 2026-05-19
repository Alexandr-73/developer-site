<header class="bg-white border-bottom shadow-sm">
    <div class="container">
        <div class="row align-items-center py-2">
            <!-- Логотип -->
            <div class="col-lg-3 col-md-4 col-6">
                <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-laptop fs-3 text-primary"></i>
                        <div>
                            <span class="fw-bold text-dark">Разработка</span>
                            <span class="text-muted"> веб-сайтов</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Меню и контакты (общая колонка) -->
            <div class="col-lg-9 col-md-8 col-6">
                <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                    <!-- Навигационное меню -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Главная</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Обо мне</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Услуги</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Контактная информация (компактно) -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="tel:+79163285273" class="text-dark fw-bold text-decoration-none small">
                            <i class="bi bi-telephone me-1"></i>+7 (916) 328-52-73
                        </a>
                        <span class="text-muted small"><i class="bi bi-clock me-1"></i>09:00-20:00</span>
                        <span class="text-muted small"><i class="bi bi-geo-alt me-1"></i>Наро-Фоминск, Пл. Свободы,
                            4</span>

                        <!-- Соцсети иконками -->
                        <div class="d-flex gap-1">
                            <a href="https://wa.me/79163285273" class="btn btn-sm btn-success" title="WhatsApp"><i
                                    class="bi bi-whatsapp"></i></a>
                            <a href="https://t.me/sc_skirkin" class="btn btn-sm btn-info text-white" title="Telegram"><i
                                    class="bi bi-telegram"></i></a>
                            <a href="https://max.ru/sc_skirkin"
                                class="btn btn-sm btn-primary d-inline-flex align-items-center justify-content-center"
                                title="MAX" style="width: 31px; height: 31px;" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{ asset('images/max-png.png') }}" alt="MAX" height="16">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
