<template>

    <Link :href="route('contact')">
      <!-- <img
        :src="'/assets/img/Chat-bot.svg'"
        alt="chat-bot"
        style="
            position: fixed;
            right: 30px;
            bottom: 30px;
            z-index: 1;
            cursor: pointer;
        "
    /> -->
    </Link>
    <div id="overlay"></div>
    <div class="sercives_bg">
        <MenuFront />
        <div class="container text-center hero-section">
            <div class="row">
                <div class="service-hero-title-container">
                    <h1 class="service_index_hero_contente">
                        Tous nos
                        <samp class="index_hero_contente index_hero_title"
                            >services</samp
                        >
                    </h1>
                </div>
            </div>
            <div class="hero-description-container">
                <div class="hero-description">
                    Découvrez chez Infosoluces une gamme complète de solutions
                    d'entreprises pour optimiser votre infrastructure
                    technologique et renforcer la sécurité de votre entreprise.
                </div>
            </div>
            <div class="scroll-arrow-container">
                <img
                    :src="'/assets/img/scroll-down-arrow.png'"
                    style="cursor: pointer"
                    class="scroll-arrow"
                    @click="scrollDown"
                />
            </div>
        </div>
    </div>

    <div class="direction_grid_section_container">
        <div
            class="container-fluid d-flex direction_grid_section"
            style="margin: 0; padding: 0"
        >
            <div
                class="text-center width_height services_grid_bg"
                :style="{ background: 'url(/assets/img/Image-web-mobile-services.svg)' }"
            >
                <h3 class="services_grid_bg_text">
                    <!-- Service maintenance et dépannage -->
                </h3>
            </div>
            <div id="devmobile" class="width_height">
                <div class="sercives_text_container">
                    <h3 class="services_text_container_title" style="display:flex; flex-direction:column;width:100%;">
                        Transformer votre vision en réalité numérique
                    </h3>
                    <p class="services_text_container_description" style="font-size:15.5px">
                        Infosoluces offre des services de développement web et
                        mobile sur mesure, conçus pour répondre aux besoins
                        uniques de votre entreprise. Notre équipe d'experts
                        allie créativité et technologie pour créer des solutions
                        intuitives et performantes, que ce soit pour des sites
                        web dynamiques ou des applications mobiles innovantes...
                    </p>

                    <Link :href="route('contact')">
                        <button class="hexagon-btn">Nous Contacter</button>
                    </Link>
                </div>
            </div>
        </div>
        <div
            class="container-fluid d-flex direction_grid_section"
            style="margin: 0; padding: 0"
        >
            <div id="communication" class="width_height">
                <div class="sercives_text_container" style="display:flex; flex-direction:column;width:100%;">
                    <h3 class="services_text_container_title">
                        Connectez votre entreprise au futur avec infosoluces
                    </h3>
                    <p class="services_text_container_description" style="font-size:15.5px">
                        Infosoluces vous propose des services de réseaux et
                        télécommunications de pointe, conçus pour optimiser la
                        connectivité et la performance de votre entreprise.
                        Notre équipe d'experts met en place des infrastructures
                        robustes et sécurisées, garantissant une communication
                        fluide et efficace. Que ce soit pour la mise en réseau,
                        la gestion des systèmes de téléphonie ou l'intégration
                        de solutions de communication unifiée, nous sommes là
                        pour vous accompagner dans chaque étape, afin de vous
                        permettre de rester connecté et compétitif dans un monde
                        en constante évolution...
                    </p>
                    <Link :href="route('contact')">
                        <button class="hexagon-btn">Nous Contacter</button>
                    </Link>
                </div>
            </div>
            <div
                class="text-center width_height services_grid_bg"
                :style="{ background: 'url(/assets/img/Image-telecommunication.svg)' }"
            >
                <h3 class="services_grid_bg_text">
                    <!-- Vidéo-surveillance et télésurveillance -->
                </h3>
            </div>
        </div>
        <div
            class="container-fluid d-flex direction_grid_section"
            style="margin: 0; padding: 0"
        >
            <div
                class="text-center width_height services_grid_bg"
                :style="{ background: 'url(/assets/img/Image-ai-cyber.svg)' }"
            >
                <h3 class="services_grid_bg_text">
                    Services de Téléphonie sur IP
                </h3>
            </div>
            <div id="cyberia" class="width_height">
                <div class="sercives_text_container" style="display:flex; flex-direction:column;width:100%;">
                    <h3 class="services_text_container_title"  >
                        Protéger Votre Avenir avec Infosoluces : cybersécurité et IA
                    </h3>
                    <p class="services_text_container_description" style="font-size:14.5px;">
                        Infosoluces allie expertise en cybersécurité et
                        intelligence artificielle pour offrir des solutions de
                        protection avancées adaptées aux défis numériques
                        d'aujourd'hui. Notre équipe dédiée évalue et renforce la
                        sécurité de vos systèmes, tout en intégrant des
                        technologies d'IA pour anticiper et neutraliser les
                        menaces avant qu'elles ne se manifestent. Avec notre
                        approche proactive, nous vous aidons à sécuriser vos
                        données sensibles et à garantir la continuité de vos
                        opérations, vous permettant ainsi de vous concentrer sur
                        l'innovation et la croissance de votre entreprise.
                    </p>
                    <Link :href="route('contact')">
                        <button class="hexagon-btn">Nous Contacter</button>
                    </Link>
                </div>
            </div>
        </div>
        <div
            class="container-fluid d-flex direction_grid_section"
            style="margin: 0; padding: 0"
        >
            <div id="domotique" class="width_height">
                <div class="sercives_text_container" style="display:flex; flex-direction:column;width:100%;">
                    <h3 class="services_text_container_title" >
                        Vivez l'Intélligence artificielle au Quotidien avec
                        Infosoluces : Domotique et Télésurveillance
                    </h3>
                    <p class="services_text_container_description" style="font-size:15.5px; padding-bottom:0px;">
                        Infosoluces vous propose des solutions de domotique et
                        de télésurveillance qui transforment votre espace de vie
                        en un environnement intelligent et sécurisé. Grâce à
                        notre expertise, nous intégrons des technologies
                        avancées pour automatiser vos systèmes d'éclairage, de
                        chauffage et de sécurité, vous offrant ainsi un confort
                        inégalé et une gestion simplifiée de votre domicile.
                        Notre service de télésurveillance assure une protection
                        continue, vous permettant de garder un œil sur votre
                        propriété à tout moment, où que vous soyez. Avec
                        Infosoluces, vivez en toute sérénité et profitez d'un
                        quotidien connecté et sécurisé.
                    </p>
                    <Link :href="route('contact')" style="padding-bottom:-10px;" >
                        <button class="hexagon-btn">Nous Contacter</button>
                    </Link>
                </div>
            </div>
            <div
                class="text-center width_height services_grid_bg"
                :style="{ background: 'url(/assets/img/Image-domotique-telesurveillance.svg)' }"
            >
                <h3 class="services_grid_bg_text">
                    <!-- Déploiement et audit réseau informatique -->
                </h3>
            </div>
        </div>
        <div
            class="container-fluid d-flex direction_grid_section"
            style="margin: 0; padding: 0"
        >
            <div
                class="text-center width_height services_grid_bg"
                :style="{ background: 'url(/assets/img/Image-erp-crm.svg)' }"
            >
                <h3 class="services_grid_bg_text">
                <!-- Services Audiovisuel -->
                </h3>
            </div>
            <div id="erpcrm" class="width_height">
                <div class="sercives_text_container" style="display:flex; flex-direction:column;width:100%;">
                    <h3 class="services_text_container_title" >
                        Optimise Votre Gestion d'Entreprise avec Infosoluces :
                        ERP et CRM sur Mesure
                    </h3>
                    <p class="services_text_container_description" style="font-size:15.5px">
                        Infosoluces offre des solutions ERP et CRM
                        personnalisées qui révolutionnent la gestion de votre
                        entreprise. Nos systèmes intégrés vous permettent de
                        centraliser vos données, d'automatiser vos processus et
                        d'améliorer la relation client, tout en favorisant une
                        collaboration fluide entre vos équipes. Grâce à notre
                        expertise, nous vous aidons à prendre des décisions
                        éclairées et à maximiser votre efficacité
                        opérationnelle. Avec Infosoluces, transformez vos défis
                        en opportunités grâce à des solutions technologiques
                        adaptées à vos besoins.
                    </p>
                    <Link :href="route('contact')">
                        <button class="hexagon-btn">Nous Contacter</button>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3'

import MainLayout from '../Layouts/MainLayout.vue'
import MenuFront from '../Layouts/Partials/MenuFront.vue'
export default {
    layout: MainLayout,
    components: {
        MenuFront
    },
     methods: {
    scrollDown() {
      window.scrollBy({
        top: window.innerHeight, // Défile d'une hauteur d'écran vers le bas
        left: 0,
        behavior: 'smooth', // Défilement fluide
      });
    },
    scrollUp() {
      window.scrollBy({
        top: -window.innerHeight, // Défile d'une hauteur d'écran vers le haut
        left: 0,
        behavior: 'smooth',
      });
    },
  },
}
</script>


