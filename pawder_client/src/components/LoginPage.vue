<template>
<p>Login page</p>
</template>

<script>
export default {
  name: "LoginPage",
  mounted() {
    this.axios.get('/tokens/create').then(response => { console.log(response)})
  }
}
</script>

<style scoped>

</style>