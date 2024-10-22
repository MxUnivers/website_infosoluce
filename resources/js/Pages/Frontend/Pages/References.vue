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
    <div
        style="
            background: url('/assets/img/reference.svg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 55vh;
        "
    >
        <MenuFront />
        <div class="container text-center">
            <div class="row">
                <div class="text-center" style="width: 85%; margin: 0 auto">
                    <h1 class="reference_index_hero_contente text-center">
                        Découvrez toutes nos réalisations, nous sommes
                        impatients de vous apporter notre expertise de qualité
                        internationale
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="margin: 50px">
        <h3 class="mb-4 mt-4">Nous avons plus de</h3>
        <samp class="index_hero_contente index_hero_title"
            >200 références.</samp
        >
    </div>

    <!-- Direction -->
    <div style="margin-bottom: 10px" class="direction_grid_section_container">
        <div
            class="container-fluid d-flex direction_grid_section"
            style="margin: 0; padding: 0"
        >
            <div
                class="text-center width_height services_grid_bg"
                style="background: url('/assets/img/reference1.svg')"
            ></div>
            <div class="width_height">
                <div class="sercives_text_container">
                    <h3 class="services_text_container_title">
                        PROJET FRED ET POPEE
                    </h3>
                    <p class="services_text_container_description">
                        Implementation d’un réseau informatique (filaire, sans
                        fil et fibre optique) Mise en place d’une solution VLAN
                        Configuration d’un pare-feu et des Access List
                        Depoilement d’un solution de redondance de passerelle
                        Implementation d’un réseau électrique ondulé
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
            <div class="width_height">
                <div class="sercives_text_container">
                    <h3 class="services_text_container_title">
                        PROJET TRAVAUX COCODY
                    </h3>
                    <p class="services_text_container_description">
                        Implémentation d’un réseau informatique (filaire, sans
                        fil et fibre optique) Implémentation d’un réseau de
                        signaux satellite Implémentation d’un réseau de
                        téléphonie IP Installation d’un système de contrôle
                        d’accès et de vidéosurveillance Réhabilitation du réseau
                        électrique Installation d’un système d’inversion de
                        source électrique Déploiement d’une solution de gestion
                        automatique (allumage et extinction) du réseau de
                        l’éclairage du jardin Installation de coffret
                        divisionnaire
                    </p>
                    <Link :href="route('contact')">
                        <button class="hexagon-btn">Nous Contacter</button>
                    </Link>
                </div>
            </div>
            <div
                class="text-center width_height services_grid_bg"
                style="background: url('/assets/img/reference2.svg')"
            ></div>
        </div>
        <div
            class="container-fluid d-flex direction_grid_section"
            style="margin: 0; padding: 0"
        >
            <div
                class="text-center width_height services_grid_bg"
                style="background: url('/assets/img/reference3.svg')"
            ></div>
            <div class="width_height">
                <div class="sercives_text_container">
                    <h3 class="services_text_container_title">
                        PROJET CLIENT LEVEL
                    </h3>
                    <p class="services_text_container_description">
                        Implementation d’un réseau informatique (filaire, sans
                        fil et fibre optique) Configuration d’un pare-feu et des
                        Access List Depoilement d’un solution de redondance de
                        passerelle
                    </p>
                    <Link :href="route('contact')">
                        <button class="hexagon-btn">Nous Contacter</button>
                    </Link>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%">
        <img
            :src="'/assets/img/reference_groupe.svg'"
            alt=""
            style="
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
            "
        />
    </div>
    <h5 class="text-center" style="">Nos Partenaires</h5>
    <div class="d-flex text-center container justify-content-around">
        <img
            :src="'/assets/img/partenaire_2.svg'"
            alt=""
            style="background-size: contain; background-repeat: no-repeat"
        />
        <img
            :src="'/assets/img/partenaire_1.svg'"
            alt=""
            style="background-size: contain; background-repeat: no-repeat"
        />
    </div>
    <h5 class="text-center mb-5" style="">Nos certifications</h5>
    <div class="d-flex text-center container justify-content-around mb-5">
        <img
            :src="'/assets/img/certif.svg'"
            alt=""
            style="background-size: contain; background-repeat: no-repeat"
        />
    </div>

    <!-- valeur section -->
    <div class="section_valeur_container">
        <div style="padding: 50px 100px; width: 50%; position: relative">
            <h1 class="section_valeur_container_title">
                Nous accordons de la valeur à tous vos besoins
            </h1>
            <p
                style="
                    font-family: Syne;
                    color: white;
                    font-size: 20px;
                    margin-top: 20px;
                "
            >
                Nous voulons Nous Contacter sur vos besoins
            </p>
            <Link :href="route('contact')">
                <button
                    class="hexagon-btn"
                    style="
                        color: #2286bb;
                        background-color: white;
                        margin-top: 20px;
                    "
                >
                    Demander un devis
                </button>
            </Link>
        </div>
    </div>
</template>

<style scoped></style>
<script>
import { Link } from '@inertiajs/inertia-vue3'

import MainLayout from '../Layouts/MainLayout.vue'
import MenuFront from '../Layouts/Partials/MenuFront.vue'
export default {
    layout: MainLayout,
    components: {
        MenuFront
    }
}
</script>
