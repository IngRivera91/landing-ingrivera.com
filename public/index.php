<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ricardo Rivera Sánchez — desarrollador de software especializado en backend, sistemas web, APIs y tecnología.">
    <meta name="author" content="Ricardo Rivera Sánchez">
    <meta name="theme-color" content="#0b0d10">
    <title>Ricardo Rivera — Desarrollador de Software</title>

    <style>
        :root {
            --bg: #0b0d10;
            --bg-soft: #11151a;
            --card: rgba(255,255,255,.035);
            --card-hover: rgba(255,255,255,.06);
            --text: #f5f7fa;
            --muted: #9aa4b2;
            --line: rgba(255,255,255,.09);
            --accent: #7c9cff;
            --accent-2: #a98cff;
            --max: 1080px;
            --radius: 18px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background:
                    radial-gradient(circle at 80% 10%, rgba(124,156,255,.10), transparent 28rem),
                    radial-gradient(circle at 10% 35%, rgba(169,140,255,.06), transparent 24rem),
                    var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(calc(100% - 40px), var(--max));
            margin: auto;
        }

        /* NAV */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            background: rgba(11,13,16,.72);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(255,255,255,.06);
        }

        nav {
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-weight: 800;
            letter-spacing: -.04em;
            font-size: 1.05rem;
        }

        .brand span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: var(--muted);
            font-size: .9rem;
            transition: color .2s ease;
        }

        .nav-links a:hover {
            color: var(--text);
        }

        /* HERO */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
        }

        .hero-content {
            max-width: 850px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--muted);
            font-size: .85rem;
            margin-bottom: 24px;
        }

        .eyebrow::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #65d68a;
            box-shadow: 0 0 14px rgba(101,214,138,.55);
        }

        h1 {
            font-size: clamp(3.2rem, 8vw, 6.8rem);
            line-height: .95;
            letter-spacing: -.07em;
            max-width: 900px;
        }

        .gradient {
            background: linear-gradient(110deg, var(--text), #9aaeff 55%, #b69cff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero p {
            max-width: 680px;
            margin-top: 30px;
            color: var(--muted);
            font-size: clamp(1.05rem, 2vw, 1.25rem);
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 34px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 20px;
            border-radius: 12px;
            border: 1px solid var(--line);
            font-weight: 650;
            font-size: .92rem;
            transition: transform .2s ease, background .2s ease, border-color .2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--text);
            color: #0b0d10;
            border-color: var(--text);
        }

        .btn-secondary {
            background: rgba(255,255,255,.03);
            color: var(--text);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,.07);
            border-color: rgba(255,255,255,.16);
        }

        /* SECTIONS */
        section {
            padding: 110px 0;
        }

        .section-label {
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: .14em;
            font-size: .72rem;
            font-weight: 800;
            margin-bottom: 16px;
        }

        h2 {
            font-size: clamp(2rem, 4vw, 3.4rem);
            line-height: 1.05;
            letter-spacing: -.05em;
            margin-bottom: 24px;
        }

        .intro {
            color: var(--muted);
            max-width: 700px;
            font-size: 1.05rem;
        }

        /* ABOUT */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }

        .about-copy p + p {
            margin-top: 18px;
        }

        .about-note {
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: var(--card);
        }

        .about-note strong {
            display: block;
            font-size: 1.15rem;
            margin-bottom: 8px;
        }

        .about-note span {
            color: var(--muted);
            font-size: .92rem;
        }

        /* SERVICES */
        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            margin-top: 42px;
        }

        .card {
            padding: 30px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: var(--card);
            transition: transform .25s ease, background .25s ease, border-color .25s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            background: var(--card-hover);
            border-color: rgba(124,156,255,.22);
        }

        .card-number {
            color: var(--accent);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .1em;
        }

        .card h3 {
            margin: 22px 0 8px;
            font-size: 1.25rem;
        }

        .card p {
            color: var(--muted);
            font-size: .92rem;
        }

        /* TECHNOLOGIES */
        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 34px;
        }

        .tech {
            padding: 10px 15px;
            border: 1px solid var(--line);
            border-radius: 999px;
            color: #cbd2dc;
            background: rgba(255,255,255,.025);
            font-size: .88rem;
        }

        /* SOCIAL */
        .social-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-top: 42px;
        }

        .social {
            min-height: 180px;
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: var(--card);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform .25s ease, background .25s ease, border-color .25s ease;
        }

        .social:hover {
            transform: translateY(-4px);
            background: var(--card-hover);
            border-color: rgba(124,156,255,.22);
        }

        .social-icon {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: rgba(255,255,255,.07);
            font-weight: 800;
            font-size: .9rem;
        }

        .social h3 {
            margin-top: 25px;
            font-size: 1.15rem;
        }

        .social p {
            color: var(--muted);
            font-size: .85rem;
            margin-top: 3px;
        }

        .social-arrow {
            align-self: flex-end;
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* CONTACT */
        .contact {
            text-align: center;
            padding: 130px 0;
        }

        .contact .intro {
            margin: 0 auto;
        }

        .contact .actions {
            justify-content: center;
        }

        /* FOOTER */
        footer {
            border-top: 1px solid var(--line);
            padding: 28px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            color: var(--muted);
            font-size: .82rem;
        }

        /* REVEAL */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 760px) {
            .container {
                width: min(calc(100% - 28px), var(--max));
            }

            .nav-links {
                display: none;
            }

            .hero {
                min-height: 90vh;
            }

            .about-grid,
            .cards,
            .social-grid {
                grid-template-columns: 1fr;
            }

            section {
                padding: 80px 0;
            }

            h1 {
                font-size: clamp(3rem, 16vw, 5rem);
            }

            .footer-content {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <nav>
            <a href="#inicio" class="brand">ING<span>.</span>RIVERA</a>

            <ul class="nav-links">
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#que-hago">Qué hago</a></li>
                <li><a href="#tecnologias">Tecnologías</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>

    <!-- HERO -->
    <section class="hero" id="inicio">
        <div class="container">
            <div class="hero-content reveal">
                <div class="eyebrow">Desarrollador de software</div>

                <h1>
                    Construyo software
                    <span class="gradient">para resolver problemas reales.</span>
                </h1>

                <p>
                    Soy Ricardo Rivera, desarrollador enfocado principalmente en
                    backend y sistemas web. Me gusta convertir problemas complejos
                    en soluciones simples, prácticas y mantenibles.
                </p>

                <div class="actions">
                    <a href="#sobre-mi" class="btn btn-primary">Conóceme</a>
                    <a href="#contacto" class="btn btn-secondary">Contactarme</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SOBRE MI -->
    <section id="sobre-mi">
        <div class="container">
            <div class="about-grid">
                <div class="reveal">
                    <div class="section-label">Sobre mí</div>
                    <h2>Software con enfoque práctico.</h2>
                </div>

                <div class="about-copy reveal">
                    <p class="intro">
                        Soy Ricardo Rivera, desarrollador de software especializado
                        en backend y desarrollo de sistemas web.
                    </p>

                    <p class="intro">
                        Trabajo principalmente con PHP, bases de datos, APIs,
                        servidores Linux y Docker. Me interesa construir sistemas
                        que sean útiles, claros y fáciles de mantener.
                    </p>

                    <div class="about-note" style="margin-top: 28px;">
                        <strong>La tecnología es una herramienta.</strong>
                        <span>
                            Lo importante es entender el problema y encontrar
                            una solución que realmente funcione.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUE HAGO -->
    <section id="que-hago">
        <div class="container">
            <div class="reveal">
                <div class="section-label">Qué hago</div>
                <h2>Desarrollo de principio a fin.</h2>
                <p class="intro">
                    Desde la lógica del backend hasta la infraestructura necesaria
                    para poner una aplicación en funcionamiento.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <span class="card-number">01</span>
                    <h3>Backend</h3>
                    <p>
                        Desarrollo de lógica de negocio, arquitectura MVC,
                        autenticación, procesos y aplicaciones web.
                    </p>
                </article>

                <article class="card reveal">
                    <span class="card-number">02</span>
                    <h3>APIs e integraciones</h3>
                    <p>
                        Integración de servicios y comunicación entre aplicaciones
                        mediante APIs y diferentes plataformas.
                    </p>
                </article>

                <article class="card reveal">
                    <span class="card-number">03</span>
                    <h3>Bases de datos</h3>
                    <p>
                        Diseño y desarrollo de estructuras de datos utilizando
                        bases de datos relacionales.
                    </p>
                </article>

                <article class="card reveal">
                    <span class="card-number">04</span>
                    <h3>Servidores y despliegues</h3>
                    <p>
                        Linux, Docker, VPS y herramientas necesarias para
                        desplegar y mantener aplicaciones.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- TECNOLOGIAS -->
    <section id="tecnologias">
        <div class="container">
            <div class="reveal">
                <div class="section-label">Tecnologías</div>
                <h2>Herramientas que utilizo.</h2>
                <p class="intro">
                    Tecnologías y herramientas que forman parte de mi día a día
                    como desarrollador.
                </p>
            </div>

            <div class="tech-list reveal">
                <span class="tech">PHP</span>
                <span class="tech">JavaScript</span>
                <span class="tech">MySQL</span>
                <span class="tech">PostgreSQL</span>
                <span class="tech">Docker</span>
                <span class="tech">Linux</span>
                <span class="tech">Git</span>
                <span class="tech">APIs</span>
                <span class="tech">MVC</span>
                <span class="tech">HTML & CSS</span>
            </div>
        </div>
    </section>

    <!-- REDES -->
    <section>
        <div class="container">
            <div class="reveal">
                <div class="section-label">Encuéntrame online</div>
                <h2>También estoy por aquí.</h2>
                <p class="intro">
                    Código, contenido y perfil profesional.
                </p>
            </div>

            <div class="social-grid">

                <a class="social reveal"
                   href="https://github.com/IngRivera91"
                   target="_blank"
                   rel="noopener noreferrer">
                    <div>
                        <div class="social-icon">GH</div>
                        <h3>GitHub</h3>
                        <p>Mi código y proyectos.</p>
                    </div>
                    <span class="social-arrow">↗</span>
                </a>

                <a class="social reveal"
                   href="https://www.youtube.com/@IngRivera91"
                   target="_blank"
                   rel="noopener noreferrer">
                    <div>
                        <div class="social-icon">YT</div>
                        <h3>YouTube</h3>
                        <p>Contenido sobre tecnología.</p>
                    </div>
                    <span class="social-arrow">↗</span>
                </a>

                <a class="social reveal"
                   href="https://www.linkedin.com/in/ingrivera/"
                   target="_blank"
                   rel="noopener noreferrer">
                    <div>
                        <div class="social-icon">in</div>
                        <h3>LinkedIn</h3>
                        <p>Mi perfil profesional.</p>
                    </div>
                    <span class="social-arrow">↗</span>
                </a>

            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section class="contact" id="contacto">
        <div class="container reveal">
            <div class="section-label">Contacto</div>

            <h2>¿Tienes algo que construir?</h2>

            <p class="intro">
                Cuéntame qué necesitas y veamos cómo podemos convertir
                la idea en una solución.
            </p>

            <div class="actions">
                <a href="mailto:ricardo@ingrivera.com" class="btn btn-primary">
                    Enviarme un correo
                </a>

                <a href="https://www.linkedin.com/in/ingrivera/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="btn btn-secondary">
                    LinkedIn
                </a>
            </div>
        </div>
    </section>

</main>

<footer>
    <div class="container footer-content">
        <span>© <span id="year"></span> Ricardo Rivera</span>
        <span>ingrivera.com</span>
    </div>
</footer>

<script>
    // Año automático
    document.getElementById("year").textContent = new Date().getFullYear();

    // Animaciones suaves al aparecer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12
    });

    document.querySelectorAll(".reveal").forEach(element => {
        observer.observe(element);
    });
</script>

</body>
</html>

