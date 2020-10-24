<template>
  <div>
    <article>
      <h1 @click="kirimKeBapak(judul)">{{ judul }}</h1>
      <p>{{ artikel }}</p>
      <p>{{ penulis }}</p>

      <slot></slot>
      <hr />
    </article>
  </div>
</template>

<script>
export default {
  name: "Article",
  props: ["judul", "artikel", "penulis"],
  methods: {
    kirimKeBapak(value) {
      this.$emit("ketika-anak-orang-mengirim", value);
    },
  },
};
</script>
