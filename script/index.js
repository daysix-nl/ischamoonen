
// const swiftUpElements = document.querySelectorAll('.swift-up-text');

// swiftUpElements.forEach(elem => {

//     const words = elem.textContent.split(' ');
//     elem.innerHTML = '';

//     words.forEach((el, index) => {
//         words[index] = `<span><i>${words[index]}</i></span>`;
//     });

//     elem.innerHTML = words.join(' ');

//     const children = document.querySelectorAll('span > i');
//     children.forEach((node, index) => {
//         node.style.animationDelay = `${index * .04}s`;
//     });

// });


// try {
//     const observer = new IntersectionObserver((entries) => {
//         entries.forEach((entry) => {
//             if (entry.isIntersecting) {
//                 entry.target.classList.add("show");
//             }
//         });
//     });

//     const hiddenElements = document.querySelectorAll(".element-fade-in");
//     hiddenElements.forEach((el) => observer.observe(el));
// } catch (error) { }



try {
    var swiper = new Swiper(".mycases", {
        slidesPerView: "auto",
        freeMode: true,
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
    cursor.textContent = '';

    // Hover-effect voor links
    links.forEach(link => {
        link.addEventListener('mouseenter', () => {
            cursor.textContent = 'View project'; // Toon tekst van de link
            cursor.style.padding = '0px 20px';
            cursor.style.borderRadius = '999px';
            cursor.style.height = '50px';
            cursor.style.transform = 'translate(0%, -50%)';
        });

        link.addEventListener('mouseleave', () => {
            cursor.textContent = ''; // Herstel oorspronkelijke inhoud
            cursor.style.padding = '0px 0px';
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




