<template>
  <div id="app">
    <AppHeader />
    <router-view />
  </div>
</template>
<script>
import AppHeader from "@/components/Layout/AppHeader";
export default {
  components: {
    AppHeader,
  },
};
</script>
