<template>
    <div>
    <Link :href="route('contact')">
        <img :src="'/assets/img/Chat-bot.svg'" alt="chat-bot" class="chat-bot" />
        </Link>
        <MenuFront />
        <DetailServiceStart />
        <DetailServiceValue />
    </div>
</template>

<script>
import MainLayout from '../Layouts/MainLayout.vue';
import MenuFront from '../Layouts/Partials/MenuFront.vue';
import DetailServiceStart from '../Components/detailservice/DetailServiceStart.vue';
import DetailServiceValue from '../Components/detailservice/DetailServiceValue.vue';

export default {
    layout: MainLayout,
    components: {
        MenuFront,
        DetailServiceStart,
        DetailServiceValue
    }
}
</script>
