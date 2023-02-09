<template>
</template>
<script>
export default {
    mounted() {
        localStorage.setItem('token', null);
        this.$router.push({ name: 'login' });
    }


}

</script>


