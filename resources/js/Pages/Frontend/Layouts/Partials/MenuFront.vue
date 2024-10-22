<template>
    <div class="fixed_menu">
        <div class="diagonal shadow">
            <span>
                <div class="index_hero_menu">
                    <div>
                        <Link
                            :href="route('home')"
                            class="index_menu"
                            :class="{ active_menu: isActive('home') }"
                        >
                            <img
                                :src="'/assets/img/logo.svg'"
                                alt=""
                                class="logo"
                            />
                        </Link>
                    </div>
                    <div style="display: flex; justify-content: space-between">
                        <Link
                            :href="route('home')"
                            class="index_menu"
                            :class="{ active_menu: isActive('home') }"
                            >Accueil</Link
                        >
                        <Link
                            :href="route('infosoluces')"
                            class="index_menu"
                            :class="{ active_menu: isActive('infosoluces') }"
                            >Infosoluces ?</Link
                        >







                        <div class="dropdown" id="titi">
                            <Link
                                :href="route('services')"
                                class="index_menu"
                                :class="{ active_menu: isActive('services') }"
                                >Services
                                <img
                                    :src="'/assets/img/arrow_drop_down.svg'"
                                    alt=""
                            /></Link>
                            <div class="dropdown-content">
                                <div class="d-flex">
                                    <div style="margin-right: 50px">
                                        <h6
                                            style="
                                                font-family: Syne;
                                                font-weight: 600;
                                                font-size: 18px;
                                                line-height: 2;
                                                color: #3e3e3e;
                                            "
                                        >
                                            Notre engagement est de connecter
                                            votre entreprise au futur avec des
                                            solutions personnalisées, sécurisées
                                            et innovantes.
                                        </h6>
                                        <h6
                                            style="
                                                font-size: 13px;
                                                margin-top: 20px;
                                            "
                                        >
                                            Explorer la liste des services >
                                        </h6>
                                        <hr />
                                        <div class="d-flex">
                                            <div style="width: 50%">
                                                <div class="d-flex">
                                                    <img
                                                        :src="'/assets/img/maintenance.svg'"
                                                        alt=""
                                                    />
                                                    <Link :href="route('services') + '#devmobile'" >
                                                    Developpeur web et mobile
                                                    </Link>
                                                </div>
                                                <div class="d-flex">
                                                    <img
                                                        :src="'/assets/img/audio.svg'"
                                                        alt=""
                                                    />
                                                    <Link :href="route('services')  + '#communication'">
                                                    Réseaux et télécomminication
                                                        </Link>
                                                </div>
                                                <div class="d-flex">
                                                    <img
                                                        :src="'/assets/img/telephone.svg'"
                                                        alt=""
                                                    />
                                                    <Link  :href="route('services') + '#domotique'" >
                                                    Domotique et télésurveillance
                                                    </Link>
                                                </div>
                                            </div>
                                            <div style="width: 50%">
                                                <div class="d-flex">
                                                    <img
                                                        :src="'/assets/img/deploiment.svg'"
                                                        alt=""
                                                    />
                                                    <Link  :href="route('services') + '#cyberia'" >
                                                    Cyber sécurité et IA
                                                    </Link>
                                                </div>
                                                <div class="d-flex">
                                                    <img
                                                        :src="'/assets/img/video.svg'"
                                                        alt=""
                                                    />
                                                    <Link  :href="route('services') + '#erpcrm'">
                                                    ERP  et CRM
                                                    </Link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img
                                            :src="'/assets/img/menu_rectangle.jpg'"
                                            alt=""
                                            style="width: 300px; height: 280px"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Link
                            :href="route('references')"
                            class="index_menu"
                            :class="{ active_menu: isActive('references') }"
                            >Références</Link
                        >
                        <Link
                            :href="route('contact')"
                            class="index_menu"
                            :class="{ active_menu: isActive('contact') }"
                            >Contacts</Link
                        >
                    </div>
                </div>
            </span>
        </div>
    </div>

    <!-- Menu mobile -->
    <!-- <div class="mobile_menu">
        <div class="mobile_menu_header">
      <button class="burgger_container" @click="isOpen = true">
        <img :src="/assets/img/oi_menu.svg" alt="" style="width: 30px" />
      </button>
      <div>
        <img :src="/assets/img/mobil-logo.svg" alt="" class="mobile_menu_width_height" />
      </div>
    </div>
        <div class="index_menu_container">
            <button class="close_btn"><span>x</span></button>
            <div class="m-4">
                <img :src="/assets/img/mobil-logo.svg" alt="" />
            </div>
            <div class="index_menu_container_links">
                <Link :href="route('home')" class="index_menu_links text-dark" :class="{ 'text-warning': isActive('home') }">Accueil</Link>
                <Link :href="route('infosoluces')" class="index_menu_links text-dark" :class="{ 'text-warning': isActive('infosoluces') }">Infosoluces ?</Link>
                <Link :href="route('services')" class="index_menu_links text-dark" :class="{ 'text-warning': isActive('services') }">Services <img :src="/assets/img/arrow_drop_down.svg" alt="" /></Link>
                <Link :href="route('references')" class="index_menu_links text-dark" :class="{ 'text-warning': isActive('references') }">Références</Link>
                <Link :href="route('contact')" class="index_menu_links text-dark" :class="{ 'text-warning': isActive('contact') }">Contacts</Link>
            </div>
        </div>
    </div> -->

    <!-- Menu Mobile Drawer -->
    <div class="mobile_menu">
        <div class="mobile_menu_header">
            <button class="burgger_container" @click="isOpen = true">
                <img :src="'/assets/img/oi_menu.svg'" alt="" style="width: 30px'" />
            </button>
            <div>
                <img
                    :src="'/assets/img/mobil-logo.svg'"
                    alt=""
                    class="mobile_menu_width_height"
                />
            </div>
        </div>

        <el-drawer
            :model-value="isOpen"
            @close="closeDrawer"
            :close-on-click-modal="false"
            :show-close="false"
            :direction="direction"
            size="300px"
            custom-class="custom-drawer"
        >
            <!-- <div class="index_menu_container"> -->
            <button class="close_btn" @click="isOpen = false">
                <span>x</span>
            </button>
            <div class="m-4">
                <Link
                    :href="route('home')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('home') }"
                >
                    <img :src="'/assets/img/mobil-logo.svg'" alt="" />
                </Link>
            </div>
            <div class="index_menu_container_links">
                <Link
                    :href="route('home')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('home') }"
                    >Accueil</Link
                >
                <Link
                    :href="route('infosoluces')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('infosoluces') }"
                    >Infosoluces ?</Link
                >
                <Link
                    :href="route('services')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('services') }"
                    >Services <img :src="'/assets/img/arrow_drop_down.svg'" alt=""
                /></Link>
                <Link
                    :href="route('references')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('references') }"
                    >Références</Link
                >
                <Link
                    :href="route('contact')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('contact') }"
                    >Contacts</Link
                >
            </div>
            <!-- </div> -->
        </el-drawer>

        <div class="index_menu_container">
            <button class="close_btn"><span>x</span></button>
            <div class="m-4">
                <img :src="'/assets/img/mobil-logo.svg'" alt="" />
            </div>
            <div class="index_menu_container_links">
                <Link
                    :href="route('home')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('home') }"
                    >Accueil</Link
                >
                <Link
                    :href="route('infosoluces')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('infosoluces') }"
                    >Infosoluces ?</Link
                >
                <Link
                    :href="route('services')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('services') }"
                    >Services <img :src="'/assets/img/arrow_drop_down.svg'" alt=""
                /></Link>
                <Link
                    :href="route('references')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('references') }"
                    >Références</Link
                >
                <Link
                    :href="route('contact')"
                    class="index_menu_links text-dark"
                    :class="{ 'text-warning': isActive('contact') }"
                    >Contacts</Link
                >
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

import { ElMessageBox } from 'element-plus'
import { ElDrawer } from 'element-plus'

export default {
    components: {
        ElDrawer
    },
    setup () {
        const isOpen = ref(false) // État du menu
        const direction = ref('ltr') // Direction du tiroir

        const handleClose = done => {
            ElMessageBox.confirm('Êtes-vous sûr de vouloir fermer ce menu ?')
                .then(() => {
                    done()
                })
                .catch(() => {
                    // Gestion des erreurs
                })
        }

        const isActive = routeName => {
            // Remplace par la logique d'Inertia pour vérifier si la route actuelle correspond
            return window.location.pathname.includes(routeName)
        }

        return {
            isOpen,
            direction,
            handleClose,
            isActive
        }
    }
}
</script>

<style scoped>
/* Ajoute ton CSS ici */
</style>
