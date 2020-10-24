<template>
  <div>
    <nav class="navs">
      <router-link class="nav-item" to="/">Home</router-link>
      <router-link class="nav-item" to="/crud-article"
        >CRUD Article</router-link
      >
    </nav>
    <hr />
  </div>
</template>

<style scoped>
.navs {
  display: flex;
}
.nav-item {
  margin-right: 5px;
}
</style>
