<template>
    <Link :href="route('contact')">
        <img
            :src="'/assets/img/Chat-bot.svg'"
            alt="chat-bot"
            class="chat-bot"
        />
    </Link>

    <div id="overlay"></div>
    <div style="position: relative; height: 100vh; overflow: hidden">
        <!-- Vidéo en arrière-plan -->
        <video autoplay muted loop class="index_hero_video_container">
            <source :src="'/assets/img/video.mp4'" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <MenuFront />

        <div class="header_container">
            <div class="">
                <div class="col-10">
                    <h1 class="index_hero_content">
                        <samp class="index_hero_content index_hero_title"
                            >Infosoluces</samp
                        >
                        Optimise votre infrastructure technologique et renforce
                        la sécurité de votre entreprise.
                    </h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="bleu_line"></div>
            <div style="width: 68%; margin-top: 30px">
                <h6 class="index_hero_description">
                    Notre engagement est de connecter votre entreprise au futur
                    grâce à des solutions personnalisées, sécurisées et
                    innovantes, incluant le développement de logiciels, la
                    création d'applications mobiles, la cybersécurité et
                    l'intégration d'ERP.
                </h6>
            </div>
            <div style="margin-top: 25px">
                <Link :href="route('services')">
                    <button class="hexagon-btn">Tous les services</button>
                </Link>
            </div>

            <div class="d-flex" style="margin-top: 30px">
                <a :href="socialLinks.facebook" target="_blank">
                    <img
                        :src="'/assets/img/facebook-noir.svg'"
                        style="cursor: pointer; margin-right: 20px"
                        alt="Facebook"
                    />
                </a>
                <a :href="socialLinks.linkedin" target="_blank">
                    <img
                        :src="'/assets/img/linkedin-noir.svg'"
                        style="cursor: pointer"
                        alt="LinkedIn"
                    />
                </a>
            </div>
        </div>

        <div
            class="container"
            style="
                position: relative;
                z-index: 2;
                margin-top: 20px;
                margin: 10px;
                width: 80% !important;
            "
        >
            <p></p>
        </div>
    </div>

    <div class="blue_section_container">
        <div class="blue-section">
            <div class="blue-section-text">
                plus de <br />
                <span class="blue-section-big-text">10</span>
                Années d'expérience
            </div>
            <div class="blue-section-text">
                plus de <br />
                <span class="blue-section-big-text">100</span>
                Projets réalisés
            </div>
        </div>
    </div>

    <!-- services section -->
    <div
        class="container text-center"
        style="margin-top: 50px; margin-bottom: 50px"
    >
        <div class="bleu_line1 text-center"></div>
    </div>
    <div class="container text-center">
        <h5 class="index_slogan_content">
            <samp class="index_hero_title index_slogan_content_2012"
                >Infosoluces</samp
            >
            , établie en Côte d'Ivoire depuis 2012, collabore avec des clients à
            l'échelle mondiale pour offrir des solutions d'intégration en
            technologies de l'information.
        </h5>
    </div>
    <div class="services">
        <div class="image-grid">
            <div class="image-container">
                <img
                    :src="'/assets/img/Image-erp-crm.svg'"
                    alt="Service audio visuel"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>
                        Optimisez Votre Gestion d'Entreprise avec Infosoluces :
                        ERP et CRM sur Mesure
                    </p>
                    <Link :href="route('services')">
                        <button class="hexagon-btn-orange">
                            En savoir plus
                        </button>
                    </Link>
                </div>
            </div>
            <div class="image-container">
                <img
                    :src="'/assets/img/Image-telecommunication.svg'"
                    alt="Service surveillance video"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>Connectez Votre Entreprise au Futur avec Infosoluces</p>
                    <Link :href="route('services')">
                        <button class="hexagon-btn-orange">
                            En savoir plus
                        </button>
                    </Link>
                </div>
            </div>
            <div class="image-container">
                <img
                    :src="'/assets/img/Image-ai-cyber.svg'"
                    alt="Service de téléphonie sur IP"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>
                        Protégez Votre Avenir Numérique avec Infosoluces:
                        Cybersecurité et IA
                    </p>
                    <Link :href="route('services')">
                        <button class="hexagon-btn-orange">
                            En savoir plus
                        </button>
                    </Link>
                </div>
            </div>
            <div class="image-container">
                <img
                    :src="'/assets/img/Image-domotique-telesurveillance.svg'"
                    alt="Service d'audit"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>
                        Vivez l'Intelligence au Quotidien avec Infosoluces :
                        Domotique et Télésurveillance
                    </p>
                    <Link :href="route('services')">
                        <button class="hexagon-btn-orange">
                            En savoir plus
                        </button>
                    </Link>
                </div>
            </div>
        </div>
    </div>
    <div class="container bleu_line_and_button" style="margin-top: 10px">
        <div class="bleu_line" style="margin-top: 29px"></div>
        <Link :href="route('services')">
            <button class="hexagon-btn">Tous les services</button>
        </Link>
    </div>
    <!-- Confiance -->
    <div>
        <img
            :src="'/assets/img/confiance.svg'"
            alt=""
            class="confiance_section_img"
        />
        <img
            :src="'/assets/img/11.svg'"
            alt=""
            class="mobil_confiance_section_img"
        />

        <div class="confiance_section">
            <swiper
                :slides-per-view="4"
                space-between="10"
                :autoplay="{ delay: 3000, disableOnInteraction: false }"
                :loop="true"
                navigation
                pagination
                class="mySwiper"
            >
                <swiper-slide v-for="(item, index) in images" :key="index">
                    <div class="confiance_carousel_item">
                        <img
                            :src="item.src"
                            :alt="item.alt"
                            class="confiance_img"
                        />
                    </div>
                </swiper-slide>
            </swiper>
        </div>
        <div class="container text-center container_confiance">
            <h1 class="title_container_confiance">
                Ils nous ont fait confiance, pourquoi pas vous ?
            </h1>
            <p class="text_container_confiance">
                Infosoluces a développé une expertise reconnue auprès de clients
                de toutes tailles et de tous continents, facilitant
                l'implémentation de technologies innovantes qui garantissent un
                retour sur investissement. Nous couvrons tous les aspects des
                réseaux informatiques, de l'électricité (courant faible et
                fort), de la cybersécurité, du développement logiciel, des
                applications mobiles et des ERP.
            </p>
            <Link :href="route('contact')">
                <button class="hexagon-btn">Demander un devis</button>
            </Link>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import MainLayout from '../Layouts/MainLayout.vue'
import MenuFront from '../Layouts/Partials/MenuFront.vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import 'swiper/css/navigation'
import { socialLinks } from '@/config/socialLinks.js'

export default {
    layout: MainLayout,
    components: {
        MenuFront,
        Swiper,
        SwiperSlide
    },
    data () {
        return {
            socialLinks,
            images: [
                { src: '/assets/img/frame1.svg', alt: 'Frame 1' },
                { src: '/assets/img/frame2.svg', alt: 'Frame 2' },
                { src: '/assets/img/frame3.svg', alt: 'Frame 3' },
                { src: '/assets/img/frame4.svg', alt: 'Frame 4' },
                { src: '/assets/img/frame5.svg', alt: 'Frame 5' },
                { src: '/assets/img/frame6.svg', alt: 'Frame 6' }
            ]
        }
    }
}
</script>

<style scoped>
/* Ajoutez vos styles ici */
</style>
