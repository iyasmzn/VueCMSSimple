<template>
  <div>
    <hr />
    <h2>{{ article.title }}</h2>
    <h2>{{ article.content }}</h2>
    <router-link to="/detail">Read more >></router-link>
    <hr />
  </div>
</template>

<script>
export default {
  props: {
    article: { type: Object, required: true },
  },
};
</script>
