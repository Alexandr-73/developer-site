<footer class="bg-light py-5 mt-5">
    <div class="container">
        <div class="row">
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
            <div class="col-md-4">
                <h5>Контакты</h5>
                <p><i class="bi bi-geo-alt"></i> МО, Наро-Фоминск, ул. Площадь Свободы, 4</p>
                <p><i class="bi bi-telephone"></i> <a href="tel:+79163285273" class="text-decoration-none">+7 (916)
                        328-52-73</a></p>
                <p><i class="bi bi-envelope"></i> <a href="mailto:sckirkin@yandex.ru"
                        class="text-decoration-none">sckirkin@yandex.ru</a></p>
            </div>
            <div class="col-md-4">
                <h5>Мы в соцсетях</h5>
                <div class="social">
                    <!-- Соцсети иконками -->
                    <div class="d-flex gap-1">
                        <a href="https://wa.me/79163285273" class="btn btn-sm btn-success" title="WhatsApp"><i
                                class="bi bi-whatsapp"></i></a>
                        <a href="https://t.me/sc_skirkin" class="btn btn-sm btn-info text-white" title="Telegram"><i
                                class="bi bi-telegram"></i></a>
                        <a href="https://max.ru/sc_skirkin"
                            class="btn btn-sm btn-primary d-inline-flex align-items-center justify-content-center"
                            title="MAX" style="width: 31px; height: 31px;" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/max-png.png') }}" alt="MAX" height="16">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="row">
        <div class="col-md-6 text-muted small">
            &copy; {{ date('Y') }} Разработчик сайтов. Все права защищены.
        </div>
    </div>
    </div>
</footer>
