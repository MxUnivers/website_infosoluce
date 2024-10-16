<template>
    <div class="container mt-5 bg_service_header">
        <!-- Breadcrumb -->

        <!-- Images Section -->
        <div class="row mt-4">
            <div class="col-md-12 main-image mobile_padding">
                <div class="row">
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" style="margin-top: 10px">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Références</a>
                                </li>
                                <li
                                    class="breadcrumb-item active"
                                    aria-current="page"
                                >
                                    Projet FRED et POPEE
                                </li>
                            </ol>
                        </nav>

                        <!-- Project Title -->
                        <h1 class="project-title">
                            Projet Informatique réseau et électricité à FRED et
                            POPEE
                        </h1>
                    </div>
                    <div
                        class="col-md-6"
                        style="cursor: pointer; position: relative"
                        @click="openVideo"
                    >
                        <img
                            :src="/assets/img/reference1.svg"
                            class="small-images"
                            alt="Main Image"
                        />
                        <div
                            class="photo-overlayBg"
                            style="
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            "
                        >
                            <div>
                                <img
                                    :src="/assets/img/icon-park-solid_play.svg"
                                    class="small-images"
                                    style="height: 40px; width: 40px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 pb-5">
                <div class="row">
                    <!-- Première image qui occupe la moitié gauche -->
                    <div class="col-md-6">
                        <img
                            :src="/assets/img/Rectangle14.svg"
                            style="
                                width: 100%;
                                height: 280px;
                                object-fit: cover;
                            "
                            alt="Image 2"
                            class="small-images"
                        />
                    </div>

                    <!-- Deuxième colonne avec deux images plus petites -->
                    <div class="col-md-6">
                        <div class="row">
                            <!-- Première petite image à gauche -->
                            <div class="col-md-6">
                                <img
                                    :src="/assets/img/Rectangle15.svg"
                                    style="
                                        width: 100%;
                                        height: 280px;
                                        object-fit: cover;
                                    "
                                    alt="Image 3"
                                    class="small-images"
                                />
                            </div>

                            <!-- Deuxième petite image à droite avec le texte +15 photos -->
                            <div class="col-md-6" style="position: relative">
                                <img
                                    :src="/assets/img/Group14.svg"
                                    style="
                                        width: 100%;
                                        height: 280px;
                                        object-fit: cover;
                                    "
                                    alt="Image 4"
                                    class="small-images"
                                />

                                <!-- Overlay avec le texte sur l'image -->
                                <div
                                    style="
                                        display: flex;
                                        align-items: flex-end;
                                        justify-content: left;
                                        cursor: pointer;
                                        position: absolute;
                                        bottom: 0%;
                                        left: 0%;
                                        right: 0%;
                                        top: 0%;
                                        color: white;
                                        padding-left: 20px;
                                        padding-bottom: 20px;
                                        height: 280px;
                                        width: 100%;
                                    "
                                >
                                    <div>
                                        <div style="font-size: 17px">+15</div>
                                        <div style="font-size: 17px">
                                            photos
                                        </div>
                                    </div>
                                </div>
                                <div
                                    @click="openGallery"
                                    style="
                                        display: flex;
                                        align-items: flex-end;
                                        justify-content: left;
                                        cursor: pointer;
                                        position: absolute;
                                        z-index: auto;
                                        bottom: 0%;
                                        opacity: 0.1;
                                        left: 0%;
                                        right: 0%;
                                        top: 0%;
                                        background-color: rgba(0, 0, 0, 0.4);
                                        color: white;
                                        padding-left: 20px;
                                        padding-bottom: 20px;
                                        height: 280px;
                                        width: 100%;
                                    "
                                >
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="container mission-section" style="width: 80%">
            <h2 class="mission-title">Missions</h2>
            <div class="row">
                <div
                    class="col-md-5 mission-category"
                    style="padding-bottom: 50px"
                >
                    <h3>INFORMATIQUE</h3>
                    <ul style="padding-top: 60px">
                        <li
                            style="
                                font-weigth: 300;
                                font-size: 10.2px;
                                padding-top: 7px;
                            "
                        >
                            Implémentation d'un réseau informatique (filaire,
                            sans fil et fibre optique)
                        </li>
                        <li
                            style="
                                font-weigth: 300;
                                font-size: 10.2px;
                                padding-top: 7px;
                            "
                        >
                            Mise en place d'une solution VLAN
                        </li>
                        <li
                            style="
                                font-weigth: 300;
                                font-size: 10.2px;
                                padding-top: 7px;
                            "
                        >
                            Configuration d'un pare-feu et des Access List
                        </li>
                        <li
                            style="
                                font-weigth: 300;
                                font-size: 10.2px;
                                padding-top: 7px;
                            "
                        >
                            Déploiement d'une solution de redondance de
                            passerelle
                        </li>
                    </ul>
                </div>
                <div class="col-md-2" style="padding: 5px"></div>
                <div class="col-md-5 mission-category">
                    <h3>ELECTRICITE</h3>
                    <ul style="padding-top: 60px">
                        <li
                            style="
                                font-weigth: 300;
                                font-size: 10.2px;
                                padding-top: 7px;
                            "
                        >
                            Implémentation d'un réseau électrique ondulé
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Modale pour la galerie -->
        <el-dialog
            v-model="galleryVisible"
            width="80%"
            :close-on-click-modal="false"
        >
            <el-image-viewer
                :url-list="galleryImages"
                :initial-index="0"
                v-if="galleryVisible"
                @close="galleryVisible = false"
            />
        </el-dialog>

        <el-dialog
            v-model="videoVisible"
            width="60%"
            :close-on-click-modal="false"
        >
            <iframe
                width="100%"
                height="400"
                ::src="videoUrl"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen
            ></iframe>
        </el-dialog>
    </div>
</template>

<script>
export default {
    data () {
        return {
            galleryVisible: false, // Gérer la visibilité de la galerie
            videoVisible: false, // Gérer la visibilité de la vidéo
            videoUrl: 'https://www.youtube.com/embed/YlS0-OkfkCQ', // Lien iframe YouTube
            galleryImages: [
                'assets/img/reference1.svg',
                'assets/img/reference2.svg',
                'assets/img/reference3.svg'
                // Ajoutez d'autres images ici
            ]
        }
    },
    methods: {
        openGallery () {
            this.galleryVisible = true // Ouvrir la galerie d'images
        },
        openVideo () {
            this.videoVisible = true // Ouvrir la vidéo
        }
    }
}
</script>

<style scoped>
.breadcrumb {
    padding: 0;
    margin-top: 20px;
    margin-bottom: 0;
    font-size: 14px;
}

.breadcrumb-item a {
    text-decoration: none;
    color: #007bff;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: '>';
    color: black;
}

.project-title {
    font-size: clamp(23px, 5vw, 30px);
    /*line-height: clamp(34.5px, 5vw, 88.5px);*/
    line-height: 1.5;
    font-weight: 400;
    margin-top: 20px;
    margin-bottom: 30px;
}

.main-image img {
    width: 100%;
    height: 500px;
    height: auto;
    border-radius: 0px;
}


small-images {
    width: 100%;
    height: 300px; /* Ou la hauteur désirée */
    object-fit: cover;
}

.photo-overlayBg {
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    width: 100%;
    display: flex;
    justifiy-content: center;
    height: 100%;
    color: white;
    font-size: 14px;
}

.mission-section {
    margin-top: 40px;
    padding-bottom: 40px;
}

.mission-title {
    text-align: center;
    font-size: 28px;
    font-weight: 400;
    margin-bottom: 30px;
}

.mission-category h3 {
    font-size: 22px;
    margin-top: 20px;
    color: #333;
}

.mission-category ul {
    list-style: none;
    padding: 0;
}

.mission-category ul li::before {
    content: '•';
    color: black;
    margin-right: 10px;
    font-weight: bold;
}

.image-container {
    position: relative;
}

.row.g-2 > .col {
    padding: 5px;
}

/* Ajustements des images */
.row.g-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.col-6 img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

/* Disposition globale des sections */
.main-content {
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin-top: 20px;
}

.missions-content {
    margin-top: 50px;
}

/*Elemen resposive*/

.main-image img {
    width: 100%;
    height: auto;
    border-radius: 0px;
}

.small-images {
    width: 100%;
    height: 280px;
    object-fit: cover;
}

.mobile_padding {
    padding-bottom: 30px;
}

.bg_service_header {
    background-repeat: no-repeat;
    width: 80%;
    margin-bottom: 20px;
}

/* Écrans très larges (desktops) */
@media screen and (min-width: 1200px) {
    /* Styles pour les grands écrans (ordinateurs de bureau, écrans larges) */
    .mobile_padding {
        padding-bottom: 30px;
    }
}

/* Écrans de taille moyenne (tablettes en paysage, petits desktops) */
@media screen and (min-width: 992px) and (max-width: 1199px) {
    /* Styles pour les tablettes ou écrans de taille moyenne */
    .mobile_padding {
        padding-bottom: 30px;
    }
}

/* Écrans petits (tablettes en portrait, grands téléphones) */
@media screen and (min-width: 768px) and (max-width: 991px) {
    /* Styles pour les tablettes */
    .main-image img,
    .small-images {
        width: 100%;
        height: auto;
    }

    .mobile_padding {
        padding-bottom: 30px;
    }

    .col-md-6 {
        padding: 0;
    }
}

/* Très petits écrans (mobiles) */
@media screen and (max-width: 767px) {
    .main-image img,
    .small-images {
        width: 100%;
        height: auto;
    }

    .bg_service_header {
        background-repeat: no-repeat;
        width: 100%;
        margin-bottom: 20px;
    }

    .mobile_padding {
        padding-bottom: 0px;
    }

    .col-md-6 {
        padding: 0;
    }
}
</style>
