<template>
<Link :href="route('contact')">
    <!-- <img :src="'/assets/img/Chat-bot.svg'" alt="chat-bot" class="chat-bot" /> -->
    </Link>
    <div id="overlay"></div>

    <div class="infosoluce_bg">
        <MenuFront />

        <div class="container">
            <div class="row">
                <div class="text-center info_hero_content">
                    <h1 class="index_hero_contente text-center">
                        Nos techniciens et ingénieurs, forts de plus de
                        <samp class="index_hero_contente index_hero_title">
                            10 ans d’expérience
                        </samp>
                        , garantissent une performance optimale de vos
                        équipements.
                    </h1>
                </div>
            </div>
            <div class="info_hero_content_description">
                <div class="text-center" style="font-family: Syne; margin-top: 16px">
                    Infosoluces a développé une expertise en innovation technologique pour les petites, moyennes et grandes entreprises de tous secteurs. Nous accompagnons nos clients dans l'implémentation de solutions innovantes à forte valeur ajoutée, leur permettant d'optimiser leurs ressources. Nous sommes en mesure de les soutenir sur divers sujets, notamment les réseaux informatiques, l'électricité, le développement logiciel et Internet. La cybersécurité est un enjeu majeur sur lequel nous avons fortement investi pour protéger les infrastructures et les données sensibles de nos clients.
                </div>
            </div>
            <div>
                <img :src="'/assets/img/travail.svg'" id="my-svg" alt="" class="info_svg" />
            </div>
        </div>
    </div>

    <div class="frame_section">
        <div class="container">
            <img :src="'/assets/img/frame.svg'" alt="" class="frame_svg" />
            <img :src="'/assets/img/mobil_info.svg'" id="my-svg" alt="" class="mobile_info_svg" />
        </div>
    </div>

<!-- Direction -->
    <div>
        <div class="custom-container">
            <div class="team-section">
                <h1 class="team-title">Notre équipe</h1>
                <p class="team-description">
                    Rencontrez l’équipe d’Infosoluces, un groupe d’experts passionnés et dévoués, prêts à relever vos défis technologiques. Notre équipe combine expertise technique et business pour offrir des solutions sur mesure à votre entreprise.
                </p>
            </div>

            <div class="spacer"></div>

            <!-- Carousel -->
            <div class="carousel">
                <div class="carousel-container" ref="carouselContainer" :style="{ transform: `translateX(-${currentIndex * (100 / visibleSlides)}%)` }">
                    <div
                        class="carousel-slide"
                        v-for="(item, index) in items"
                        :key="index"
                    >
                        <div class="rectangle" style="padding: 10px">
                            <img :src="item.image" alt="" class="carousel-dirction-image" />
                            <h6 class="text-center mt-5">{{ item.title }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services section -->
        <div class="info_services_section">
            <div class="info_custom_container">
                <div class="container text-center d-flex justify-content-between" style="margin-top: 10px; margin-bottom: 200px">
                    <Link :href="route('services')">
                        <button class="hexagon-btn">Nos services</button>
                    </Link>
                    <div class="info_bleu_line" style="margin-top: 29px"></div>
                    <div class="d-flex">
                        <button type="button" @click="prevSlide" class="control-button">
                            <i class="fa-solid fa-caret-left" style="color: white; font-size: 24px"></i>
                        </button>
                        <button type="button" @click="nextSlide" class="control-button">
                            <i class="fa-solid fa-caret-right" style="color: white; font-size: 24px"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Footer />
</template>

<script>
import MenuFront from '../Layouts/Partials/MenuFront.vue';
import Footer from '../Layouts/Partials/Footer.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        MenuFront,
        Footer
    },
    data() {
        return {
            items: [
                { image: '/assets/img/direction.svg', title: 'Direction générale' },
                { image: '/assets/img/d_techenique.svg', title: 'Direction technique' },
                { image: '/assets/img/innformatique.svg', title: 'Informaticiens' },
                { image: '/assets/img/electronique.svg', title: 'Electriciens' }
            ],
            currentIndex: 0, // Index de la diapositive actuelle
            visibleSlides: this.getVisibleSlides() // Nombre d'images visibles à la fois
        };
    },
    methods: {
        getVisibleSlides() {
            if (window.innerWidth < 480) return 1; // Pour mobile
            if (window.innerWidth < 768) return 2; // Pour tablette
            return 3; // Pour ordinateur ou grand écran
        },
        prevSlide() {
            if (this.currentIndex > 0) {
                this.currentIndex--; // Décrémente l'index
            } else {
                this.currentIndex = this.items.length - 1; // Revient à la dernière diapositive
            }
        },
        nextSlide() {
            if (this.currentIndex < this.items.length - 1) {
                this.currentIndex++; // Incrémente l'index
            } else {
                this.currentIndex = 0; // Retour au début
            }
        },
        handleResize() {
            this.visibleSlides = this.getVisibleSlides(); // Met à jour le nombre d'images visibles
        }
    },
    mounted() {
        window.addEventListener('resize', this.handleResize); // Écoute les changements de taille de la fenêtre
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.handleResize); // Nettoyage de l'écouteur
    }
};
</script>

<style scoped>
.carousel-container {
    display: flex; /* Aligne les éléments horizontalement */
    transition: transform 0.3s ease; /* Animation fluide pour le mouvement */
}

.carousel-slide {
    min-width: calc(100% / 3); /* Pour 3 slides sur grand écran */
    opacity: 1; /* Affiche toutes les diapositives */
    transition: opacity 0.5s ease; /* Animation de l'opacité */
}

.carousel-dirction-image {
    max-width: 100%;
    height: auto;
}

.control-button {
    padding: 10px 22px;
    border-radius: 50%;
    background-color: #2286bb;
    border: none;
    margin-right: 10px;
}

.info_custom_container {
    display: flex;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .carousel-slide {
        min-width: calc(100% / 2); /* Pour 2 slides sur tablette */
    }
}


@media (max-width: 480px) {
    .carousel-slide {
        min-width: 100%; /* Pour 1 slide sur mobile */
    }
}
</style>
