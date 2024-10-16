<template>
    <footer class="footer_container">
        <div class="footer-content">
            <div class="footer-content-item">
                <h3 class="footer-title">
                    Intégrateur de solutions informatiques, télécoms et
                    électricités.
                </h3>
                <img
                    :src="'/assets/img/Icone-facebook.svg'"
                    @click="goToLink(socialLinks.facebook)"
                    class="footer_social_icon"
                    alt="Facebook"
                />
                <img
                    :src="'/assets/img/Icone-linkedin.svg'"
                    @click="goToLink(socialLinks.linkedin)"
                    class="footer_social_icon"
                    alt="Linkedin"
                />
                <div style="margin-top:10px;">
                    <div>
                    <img
                        :src="'/assets/img/logo-dollibar-blanc.png'"
                        @click="goToLink(socialLinks.dolibar)"
                        class="footer_social_icon"
                        style="
                            width: 130px;
                            height: 30px; z-index:1000;
                        "
                        alt="Dolibar"
                    />
                    <!--  filter: brightness(0) saturate(100%) invert(55%)
                                sepia(100%) saturate(0%) hue-rotate(0deg)
                                brightness(110%) contrast(100%); -->
                    <h3
                            class="footer-title"
                            style="color: white; cursor: pointer; margin-top:-2px; z-index:1000;"
                            @click="goToLink(socialLinks.dolibar)"
                        >
                            www.dolibarr.org
                        </h3>
                    </div>
                </div>
            </div>
            <div class="footer-content-item">
                <h3 class="footer-title-1">Siège social</h3>
                <ul>
                    <li><a href="#">Abidjan-Cocody</a></li>
                    <li><a href="#">II Plateaux mobile</a></li>
                    <li><a href="tel:2252722524088">T : +225 27 22 52 40 88</a></li>
                    <li><a href="tel:2250748961252">M : +225 07 48 96 12 52</a></li>
                    <li><a href="mailto:contact@infosoluces.ci">contact@infosoluces.ci</a></li>
                    <li><a href="https://www.infosoluces.ci">www.infosoluces.ci</a></li>
                </ul>
            </div>
            <div class="footer-content-item">
                <h3 class="footer-title-1">Menu</h3>
                <ul>
                    <li><Link :href="route('home')">Accueil</Link></li>
                    <li><Link :href="route('infosoluces')">Prestations</Link></li>
                    <li><Link :href="route('services')">Nos services</Link></li>
                    <li><Link :href="route('references')">Nos références</Link></li>
                    <li><Link :href="route('contact')">Nous contacter</Link></li>
                </ul>
            </div>
            <div class="footer-content-item">
                <h3 class="footer-title-1">Liens utiles</h3>
                <ul>
                    <li><a href="#">Mentions légales</a></li>
                    <li>
                        <a href="#">Politiques de confidentialités</a>
                    </li>
                    <li><a href="#">Nos références</a></li>
                    <li>
                        <a href="#">Nos Politiques des coockies</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</template>
<style></style>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import { socialLinks } from '@/config/socialLinks.js'

const goToLink = url => {
    window.open(url, '_blank') // Ouvre le lien dans un nouvel onglet
}
</script>
