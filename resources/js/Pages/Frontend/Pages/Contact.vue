<template>
    <div>
    <Link :href="route('contact')">
        <img :src="'/assets/img/Chat-bot.svg'" alt="chat-bot" class="chat-bot" />
        </Link>

        <div style="height: 20vh">
            <MenuFront />
        </div>

        <!-- Section d'informations de contact -->
        <div class="container text-center d-flex justify-content-between contact-info">
            <div class="d-flex align-items-center">
                <img :src="'/assets/img/map.svg'" alt="Adresse siège" class="contact-icon">
                <p class="text-start contact-text">
                    Siège social : Immeuble “the office”,<br>
                    Rue des bambous, Cocody Danga
                </p>
            </div>
            <div class="d-flex align-items-center">
                <img :src="'/assets/img/phone-solid.svg'" alt="Téléphone" class="contact-icon">
                <p class="text-start contact-text">
                    +225 27 22 52 40 88 <br> +225 07 48 96 12 52
                </p>
            </div>
            <div class="d-flex align-items-center">
                <img :src="'/assets/img/mail-solid.svg'" alt="Email" class="contact-icon">
                <p class="text-start contact-text">contact@infosoluces.ci</p>
            </div>
        </div>

        <!-- Section de la carte et du formulaire de contact -->
        <div class="d-flex mb-n4">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10262.867876355616!2d-4.005393746351685!3d5.340130405689041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebff59e0ef7d%3A0x97464c082dd02e7b!2sINFOSOLUCES!5e0!3m2!1sfr!2sci!4v1723311491897!5m2!1sfr!2sci"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-background">
                <div class="contact-message">
                    <h2 class="text-white">Nous accordons de la valeur à tous vos besoins</h2>
                    <p class="text-white mt-4">Nous voulons en savoir plus sur vos besoins</p>
                    <Link :href="route('contact')">
                    <button class="hexagon-btn" style="color: #2286BB; background-color: white; margin-top: 30px">
                        Demander un devis
                    </button>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayout from '../Layouts/MainLayout.vue';
import MenuFront from '../Layouts/Partials/MenuFront.vue';
import { Link } from '@inertiajs/inertia-vue3'


export default {
    layout: MainLayout,
    components: {
        MenuFront,
    }
}
</script>

<style scoped>
/* Styles pour la section de contact */
.contact-info {
    background-color: white;
    height: 10vh;
    width: 70vw;
    justify-content: space-around;
}

.contact-icon {
    width: 30px;
    height: 30px;
    margin-right: 10px;
    margin-top: 10px;
}

.contact-text {
    font-size: 0.8vw;
}

.map-container {
    height: 50vh;
    width: 70vw;
}

.contact-background {
    background: url('/assets/img/contact.svg'); /* Utilise :src si besoin de rendre dynamique */
    background-size: cover;
    background-repeat: no-repeat;
    height: 50vh;
    width: 70vw;
}

.contact-message {
    width: 60%;
    margin: 8%;
}

.text-white {
    line-height: 1.8;
}
</style>
