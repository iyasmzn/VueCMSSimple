<template>
  <div class="home">
    <h1>Daftar Artikel</h1>

    <HomeArticle
      v-for="article in articles"
      :key="article.title"
      :article="article"
    />

    <button @click="getData">Get the Data</button>
  </div>
</template>

<script>
// @ is an alias to /src
import HomeArticle from "@/components/Home/HomeArticle";
import axios from "axios";

export default {
  name: "Home",
  components: {
    HomeArticle,
  },
  data() {
    return {
      articles: [],
    };
  },
  methods: {
    getData() {
      axios
        // .get("https://jsonplaceholder.typicode.com/todos/1")
        .get("http://localhost:8000/articles")
        .then((res) => {
          this.articles = res.data;
        })
        .catch((e) => alert(e));
    },
  },
  created() {
    this.getData();
  },
};
</script>
