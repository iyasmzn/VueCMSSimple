<template>
  <div class="home">
    <h1>Daftar Artikel</h1>
    <HomeArticle
      v-for="article in articles"
      :key="article.title"
      :article="article"
    />
  </div>
</template>

<script>
// @ is an alias to /src
import HomeArticle from "@/components/Home/HomeArticle";

export default {
  name: "Home",
  components: {
    HomeArticle,
  },
  data() {
    return {
      articles: [
        { title: "Iyey", exerpt: "yeyeyeyeh" },
        { title: "Iyey2", exerpt: "yeyeyeyeh2" },
        { title: "Iyey3", exerpt: "yeyeyeyeh3" },
      ],
    };
  },
};
</script>
