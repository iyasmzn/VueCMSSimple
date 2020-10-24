<template>
  <div>
    <h1>{{ article.title }}</h1>
    <p>{{ article.content }}</p>
    <hr />
    <div>by {{ article.author }}</div>
    <div>{{ article.date }}</div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      article: {
        title: "judul",
        content:
          "kontent kontent kontent kontent kontent kontent kontent kontent kontent kontent kontent kontent kontent kontent kontent kontent",
        author: "author",
        date: new Date().toString(),
      },
    };
  },
};
</script>
