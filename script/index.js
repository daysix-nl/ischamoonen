
try {
    document.addEventListener("DOMContentLoaded", () => {
        const loadingScreen = document.getElementById('loading-screen');
        const mainContent = document.getElementById('main-content');
        const loadingCounter = document.getElementById('loading-counter');

        let counter = 1;
        const maxCount = 99;

        function initializeSwiftUpElements() {
            try {
                const swiftUpElements = document.querySelectorAll('.swift-up-text');
                console.log(`Aantal swift-up-text elementen: ${swiftUpElements.length}`); // Debugging

                swiftUpElements.forEach(elem => {
                    if (elem.dataset.processed) return; // Skip als het al verwerkt is
                    elem.dataset.processed = true; // Markeer als verwerkt

                    const words = elem.textContent.split(' ');
                    elem.innerHTML = '';

                    words.forEach((word, index) => {
                        words[index] = `<span><span class="i">${word}</span></span>`;
                    });

                    elem.innerHTML = words.join(' ');

                    const children = elem.querySelectorAll('span > span');
                    children.forEach((node, index) => {
                        node.style.animationDelay = `${index * 0.02}s`;
                    });
                });
            } catch (error) {
                console.error("Error in swiftUpElements processing:", error);
            }
        }

        function initializeObserver() {
            try {
                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            console.log(`Element in zicht: ${entry.target}`); // Debugging
                            entry.target.classList.add("show");
                            observer.unobserve(entry.target); // Stop observer voor dit element
                        }
                    });
                });

                const hiddenElements = document.querySelectorAll(".element-fade-in");
                hiddenElements.forEach((el) => observer.observe(el));
            } catch (error) {
                console.error("Error in IntersectionObserver:", error);
            }
        }

        // Controleer of de gebruiker al eerder op de pagina is geweest
        if (!sessionStorage.getItem('hasVisited')) {
            // Toon het laadscherm
            loadingScreen.classList.add('show');

            // Start teller
            let interval = setInterval(() => {
                if (counter < maxCount) {
                    counter++;
                    loadingCounter.textContent = counter.toString().padStart(2, '0'); // Zorgt voor 01, 02, etc.
                } else {
                    clearInterval(interval);
                    // Verberg het laadscherm
                    loadingScreen.classList.remove('show');
                    setTimeout(() => {
                        // Toon de hoofdinhoud na het verwijderen van het laadscherm
                        mainContent.classList.add('show');

                        // Initialiseer de functionaliteiten
                        initializeSwiftUpElements();
                        initializeObserver();
                    }, 100); // Wacht tot het laadscherm is verdwenen
                }
            }, 30); // Interval van 50ms voor snelle telling

            // Markeer als bezocht in de sessie
            sessionStorage.setItem('hasVisited', 'true');
        } else {
            // Verberg het laadscherm en toon direct de inhoud
            loadingScreen.classList.remove('show');
            mainContent.classList.add('show');

            // Initialiseer direct de functionaliteiten
            initializeSwiftUpElements();
            initializeObserver();
        }
    });
} catch (error) { }




try {
    var swiper = new Swiper(".mycases", {
        slidesPerView: "auto",
        freeMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }


try {
    var swiper = new Swiper(".myservices", {
        slidesPerView: "auto",
        speed: 20000,
        freeMode: true,
        allowTouchMove: false, // Swipe uitschakelen
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        loop: true,
    });
} catch (error) { }




try {
    const cursor = document.querySelector('.custom-cursor');
    const links = document.querySelectorAll('a.swiper-slide');

    // Volg de muispositie
    document.addEventListener('mousemove', (event) => {
        cursor.style.left = `${event.pageX}px`;
        cursor.style.top = `${event.pageY}px`;
    });

    // Standaard cursor inhoud
    cursor.innerHTML = '';

    let textTimeout; // Timer om de delay te beheren

    // Hover-effect voor links
    links.forEach(link => {
        link.addEventListener('mouseenter', () => {
            // Voeg de basisstructuur toe zonder tekst
            cursor.innerHTML = '<div class="border-[0.5px] inner-button rounded-full w-full h-full flex justify-center items-center"><p class="lg:text-[0.8vw] mb-[1px]"></p></div>';
            cursor.style.width = '6vw';
            cursor.style.padding = '0.35vw';
            cursor.style.borderRadius = '999px';
            cursor.style.height = '2.5vw';
            cursor.style.transform = 'translate(0%, -50%)';

            // Voeg de tekst toe na een delay
            const p = cursor.querySelector('p');
            textTimeout = setTimeout(() => {
                p.textContent = 'view case';
            }, 100); // Delay van 100ms
        });

        link.addEventListener('mouseleave', () => {
            // Reset inhoud en verwijder eventuele actieve timers
            clearTimeout(textTimeout);
            cursor.innerHTML = ''; // Herstel oorspronkelijke inhoud
            cursor.style.width = '15px';
            cursor.style.padding = '0px';
            cursor.style.borderRadius = '999px';
            cursor.style.height = '15px';
            cursor.style.transform = 'translate(-50%, -50%)';
        });
    });
} catch (error) { }




try {
    // Functie om de klasse te toggelen
    const toggleMenu = () => {
        const body = document.body;

        if (body.classList.contains('mobilemenu-nonactive')) {
            body.classList.remove('mobilemenu-nonactive');
            body.classList.add('mobilemenu-active');
        } else {
            body.classList.remove('mobilemenu-active');
            body.classList.add('mobilemenu-nonactive');
        }
    };

    // Event listener voor de mobiele menu-knop
    document.getElementById('mobiel-menu').addEventListener('click', toggleMenu);

    // Event listeners voor alle <a>-elementen in het menu
    document.querySelectorAll('#mobilemenu a').forEach((link) => {
        link.addEventListener('click', toggleMenu);
    });

} catch (error) {
    console.error(error);
}


try {
    document.addEventListener('DOMContentLoaded', function () {
        const accordionGroups = document.querySelectorAll('.accordion-group');

        accordionGroups.forEach(group => {
            const accItems = group.querySelectorAll('.accordion-item');
            const accButtons = group.querySelectorAll('.accordion');

            // Zet de eerste accordion-item in elke groep standaard op actief
            if (accItems.length > 0) {
                const firstItem = accItems[0];
                firstItem.classList.add('active');
            }

            accButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const panel = this.nextElementSibling;

                    // Sluit alle andere panelen binnen dezelfde groep
                    accItems.forEach(item => {
                        if (item !== this.parentElement) {
                            item.classList.remove('active');
                        }
                    });

                    // Toggle de actieve status van de aangeklikte accordion-item
                    if (this.parentElement.classList.contains('active')) {
                        this.parentElement.classList.remove('active');
                    } else {
                        this.parentElement.classList.add('active');
                    }
                });
            });
        });
    });
} catch (error) { }


try {
    document.getElementById('read-button').addEventListener('click', function () {
        const readElement = document.getElementById('read');
        const textElement = document.getElementById('read-text');

        // Toggle classes on the #read element
        readElement.classList.toggle('read-more');
        readElement.classList.toggle('read-less');

        // Toggle classes on the #read-text element
        textElement.classList.toggle('line-clamp-4');
        textElement.classList.toggle('line-clamp-none');
    });
} catch (error) { }







document.addEventListener("DOMContentLoaded", () => {
    const fadeInElement = document.querySelector('.contact-fade-in');
    const fadeInEndElement = document.querySelector('.contact-fade-in-end');

    let start = 0;
    let end = 0;

    const updatePositions = () => {
        // Bereken de begin- en eindpunten
        start = fadeInElement.getBoundingClientRect().top + window.scrollY - window.innerHeight;
        end = fadeInEndElement.getBoundingClientRect().top + window.scrollY - window.innerHeight;
    };

    // Call once on load
    updatePositions();

    // Herbereken bij window resize
    window.addEventListener('resize', updatePositions);

    // Scroll-gebaseerde animatie
    const handleScroll = () => {
        const currentScroll = window.scrollY;

        if (currentScroll >= start && currentScroll <= end) {
            // Bereken de voortgang tussen start en eind
            const progress = (currentScroll - start) / (end - start);

            // Animatie-eigenschap
            const scale = 0.8 + progress * 0.2; // Van 0.8 naar 1

            fadeInElement.style.transform = `scale(${scale})`;
        } else if (currentScroll < start) {
            // Reset naar beginpositie
            fadeInElement.style.transform = `scale(0.8)`;
        } else if (currentScroll > end) {
            // Zet naar eindpositie
            fadeInElement.style.transform = `scale(1)`;
        }
    };

    // Scroll eventlistener
    window.addEventListener('scroll', handleScroll);
});




// document.querySelectorAll('.animated-text').forEach(p => {
//     const lines = p.innerText.split('\n');
//     p.innerHTML = lines
//         .map((line, index) => `<span style="--line-index: ${index}">${line}</span>`)
//         .join('');
// });




