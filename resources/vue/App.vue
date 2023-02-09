<template>
    <NavBar />
    <main>
        <router-view />
    </main>
</template>
<script>
import NavBar from './views/NavBar.vue';

export default {

    components:{NavBar}
}
</script>
