<template>
    <div class="container service_blue_line">
        <div class="bleu_line"></div>
    </div>
    <div class="container">
        <h5 class="index_slogan_content">
            Depuis
            <samp class="index_hero_title index_hero_title_size">2012</samp>
            en Côte d’Ivoire pour des solutions d’intégration en technologies de
            l’information.
        </h5>
    </div>
    <div class="services">
        <div class="image-grid">
            <div class="image-container">
                <img
                    :src="'/assets/img/1.svg'"
                    alt="Service audio visuel"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>Service audio visuel</p>
                    <button class="hexagon-btn-orange">En savoir plus</button>
                </div>
            </div>
            <div class="image-container">
                <img
                    :src="'/assets/img/rectangle-3.jpg'"
                    alt="Service surveillance video"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>Service de Vidéo-surveillance et télésurveillance</p>
                    <button class="hexagon-btn-orange">En savoir plus</button>
                </div>
            </div>
            <div class="image-container">
                <img
                    :src="'/assets/img/rectangle-4.svg'"
                    alt="Service de téléphonie sur IP"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>Services de Téléphonie sur IP</p>
                    <button class="hexagon-btn-orange">En savoir plus</button>
                </div>
            </div>
            <div class="image-container">
                <img
                    :src="'/assets/img/rectangle-5.svg'"
                    alt="Service d'audit"
                    class="service-image-container"
                />
                <div class="overlay"></div>
                <div class="content">
                    <p>Déploiement et audit réseau informatique</p>
                    <button class="hexagon-btn-orange">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container text-center d-flex justify-content-between"
        style="margin-top: 10px"
    >
        <div class="bleu_line d-none d-md-block" style="margin-top: 29px"></div>
        <button class="hexagon-btn" style="margin: 0 auto">
            Tous les services
        </button>
    </div>
</template>

<script setup>
</script>
